<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ConferenceSetting;
use App\Models\Track;
use App\Models\TrackTopic;
use App\Models\Speaker;
use App\Models\Timeline;
use App\Models\RegistrationFee;
use App\Models\Committee;
use App\Models\Registration;
use App\Models\ProgrammeSession;
use App\Models\Faq;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // ==================== AUTHENTICATION ====================
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    // ==================== DASHBOARD ====================
    public function dashboard()
    {
        $metrics = [
            'total_registrations' => Registration::count(),
            'pending_registrations' => Registration::where('payment_status', 'pending')->count(),
            'verified_registrations' => Registration::where('payment_status', 'verified')->count(),
            'total_speakers' => Speaker::count(),
            'total_tracks' => Track::count(),
        ];

        $recentRegistrations = Registration::with('track')
            ->latest()
            ->take(6)
            ->get();

        $speakers = Speaker::orderBy('order')->take(4)->get();

        return view('admin.dashboard', compact('metrics', 'recentRegistrations', 'speakers'));
    }

    // ==================== PARTICIPANTS / REGISTRATIONS ====================
    public function registrations(Request $request)
    {
        $query = Registration::with('track')->latest();

        if ($request->filled('status')) {
            $query->where('payment_status', $request->status);
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                  ->orWhere('reg_number', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('institution', 'like', "%{$search}%");
            });
        }

        $registrations = $query->paginate(15);
        $fees = RegistrationFee::all();

        return view('admin.registrations.index', compact('registrations', 'fees'));
    }

    public function showRegistration($id)
    {
        $registration = Registration::with('track')->findOrFail($id);
        return view('admin.registrations.show', compact('registration'));
    }

    public function updateRegistrationStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'payment_status' => 'required|in:pending,verified,rejected',
            'admin_notes' => 'nullable|string',
        ]);

        $registration = Registration::findOrFail($id);
        $registration->update($validated);

        return back()->with('success', 'Participant registration status updated successfully.');
    }

    public function deleteRegistration($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->delete();

        return redirect()->route('admin.registrations')->with('success', 'Registration record deleted.');
    }

    // ==================== SPEAKERS ====================
    public function speakers()
    {
        $speakers = Speaker::orderBy('order')->get();
        return view('admin.speakers.index', compact('speakers'));
    }

    public function storeSpeaker(Request $request)
    {
        $validated = $request->validate([
            'role' => 'required|string|max:100',
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:100',
            'institution' => 'nullable|string|max:255',
            'university' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:100',
            'flag' => 'nullable|string|max:10',
            'topic' => 'nullable|string|max:255',
            'status' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'order' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('speakers', 'public');
        }

        Speaker::create($validated);
        return back()->with('success', 'Speaker added successfully.');
    }

    public function updateSpeaker(Request $request, $id)
    {
        $validated = $request->validate([
            'role' => 'required|string|max:100',
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:100',
            'institution' => 'nullable|string|max:255',
            'university' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:100',
            'flag' => 'nullable|string|max:10',
            'topic' => 'nullable|string|max:255',
            'status' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'order' => 'required|integer',
        ]);

        $speaker = Speaker::findOrFail($id);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('speakers', 'public');
        } elseif ($request->boolean('remove_image')) {
            $validated['image'] = null;
        }

        $speaker->update($validated);
        return back()->with('success', 'Speaker updated successfully.');
    }

    public function deleteSpeaker($id)
    {
        $speaker = Speaker::findOrFail($id);
        $speaker->delete();
        return back()->with('success', 'Speaker deleted.');
    }

    // ==================== TRACKS ====================
    public function tracks()
    {
        $tracks = Track::with('topics')->orderBy('order')->get();
        return view('admin.tracks.index', compact('tracks'));
    }

    public function storeTrack(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|unique:tracks,code|max:50',
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:50',
            'order' => 'required|integer',
        ]);

        Track::create($validated);
        return back()->with('success', 'Track created successfully.');
    }

    public function updateTrack(Request $request, $id)
    {
        $track = Track::findOrFail($id);
        $validated = $request->validate([
            'code' => 'required|string|max:50|unique:tracks,code,' . $track->id,
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:50',
            'order' => 'required|integer',
        ]);

        $track->update($validated);
        return back()->with('success', 'Track updated successfully.');
    }

    public function deleteTrack($id)
    {
        $track = Track::findOrFail($id);
        $track->delete();
        return back()->with('success', 'Track removed.');
    }

    // ==================== TIMELINES ====================
    public function timelines()
    {
        $timelines = Timeline::orderBy('order')->get();
        return view('admin.timelines.index', compact('timelines'));
    }

    public function storeTimeline(Request $request)
    {
        $validated = $request->validate([
            'date_string' => 'required|string|max:100',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'badge' => 'required|string|max:50',
            'order' => 'required|integer',
        ]);

        Timeline::create($validated);
        return back()->with('success', 'Timeline milestone added.');
    }

    public function updateTimeline(Request $request, $id)
    {
        $timeline = Timeline::findOrFail($id);
        $validated = $request->validate([
            'date_string' => 'required|string|max:100',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'badge' => 'required|string|max:50',
            'order' => 'required|integer',
        ]);

        $timeline->update($validated);
        return back()->with('success', 'Timeline milestone updated successfully.');
    }

    public function deleteTimeline($id)
    {
        $timeline = Timeline::findOrFail($id);
        $timeline->delete();
        return back()->with('success', 'Timeline item removed.');
    }

    // ==================== SETTINGS ====================
    public function settings()
    {
        $settings = ConferenceSetting::pluck('value', 'key')->toArray();
        return view('admin.settings.index', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'poster_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240', // max 10MB
        ]);

        if ($request->hasFile('poster_image')) {
            $path = $request->file('poster_image')->store('posters', 'public');
            ConferenceSetting::updateOrCreate(['key' => 'poster_image'], ['value' => $path]);
        } elseif ($request->boolean('remove_poster')) {
            ConferenceSetting::updateOrCreate(['key' => 'poster_image'], ['value' => null]);
        }

        $data = $request->except(['_token', 'poster_image', 'remove_poster']);

        foreach ($data as $key => $value) {
            ConferenceSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return back()->with('success', 'Conference settings and official poster updated successfully.');
    }

    // ==================== PROGRAMME SESSIONS ====================
    public function programmes()
    {
        $programmes = ProgrammeSession::orderBy('day')->orderBy('order')->get();
        return view('admin.programmes.index', compact('programmes'));
    }

    public function storeProgramme(Request $request)
    {
        $validated = $request->validate([
            'day' => 'required|integer|in:1,2',
            'time_start' => 'required|string|max:20',
            'time_end' => 'nullable|string|max:20',
            'time_label' => 'required|string|max:100',
            'badge' => 'required|string|max:100',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:150',
            'order' => 'required|integer',
        ]);

        ProgrammeSession::create($validated);
        return back()->with('success', 'Programme session added successfully.');
    }

    public function updateProgramme(Request $request, $id)
    {
        $validated = $request->validate([
            'day' => 'required|integer|in:1,2',
            'time_start' => 'required|string|max:20',
            'time_end' => 'nullable|string|max:20',
            'time_label' => 'required|string|max:100',
            'badge' => 'required|string|max:100',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:150',
            'order' => 'required|integer',
        ]);

        $session = ProgrammeSession::findOrFail($id);
        $session->update($validated);
        return back()->with('success', 'Programme session updated successfully.');
    }

    public function deleteProgramme($id)
    {
        $session = ProgrammeSession::findOrFail($id);
        $session->delete();
        return back()->with('success', 'Programme session deleted.');
    }

    // ==================== FAQS ====================
    public function faqs()
    {
        $faqs = Faq::orderBy('order')->get();
        return view('admin.faqs.index', compact('faqs'));
    }

    public function storeFaq(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'category' => 'required|string|max:100',
            'order' => 'required|integer',
        ]);

        Faq::create($validated);
        return back()->with('success', 'FAQ added successfully.');
    }

    public function updateFaq(Request $request, $id)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'category' => 'required|string|max:100',
            'order' => 'required|integer',
        ]);

        $faq = Faq::findOrFail($id);
        $faq->update($validated);
        return back()->with('success', 'FAQ updated successfully.');
    }

    public function deleteFaq($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return back()->with('success', 'FAQ removed.');
    }

    // ==================== PARTNERS & SPONSORS ====================
    public function partners()
    {
        $partners = Partner::orderBy('order')->get();
        return view('admin.partners.index', compact('partners'));
    }

    public function storePartner(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|in:indexing,university,sponsor',
            'subtitle' => 'nullable|string|max:255',
            'logo_abbr' => 'nullable|string|max:20',
            'color' => 'required|string|max:30',
            'logo_image' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:5120',
            'order' => 'required|integer',
        ]);

        if ($request->hasFile('logo_image')) {
            $validated['logo_image'] = $request->file('logo_image')->store('partners', 'public');
        }

        Partner::create($validated);
        return back()->with('success', 'Partner/Sponsor added successfully.');
    }

    public function updatePartner(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|in:indexing,university,sponsor',
            'subtitle' => 'nullable|string|max:255',
            'logo_abbr' => 'nullable|string|max:20',
            'color' => 'required|string|max:30',
            'logo_image' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:5120',
            'order' => 'required|integer',
        ]);

        $partner = Partner::findOrFail($id);

        if ($request->hasFile('logo_image')) {
            $validated['logo_image'] = $request->file('logo_image')->store('partners', 'public');
        } elseif ($request->boolean('remove_logo')) {
            $validated['logo_image'] = null;
        }

        $partner->update($validated);
        return back()->with('success', 'Partner/Sponsor updated successfully.');
    }

    public function deletePartner($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();
        return back()->with('success', 'Partner/Sponsor removed.');
    }

    // ==================== REGISTRATION FEES ====================
    public function fees()
    {
        $fees = RegistrationFee::orderBy('order')->get();
        return view('admin.fees.index', compact('fees'));
    }

    public function updateFee(Request $request, $id)
    {
        $validated = $request->validate([
            'early_bird' => 'required|string|max:100',
            'regular' => 'required|string|max:100',
            'is_featured' => 'nullable|boolean',
            'features_text' => 'nullable|string',
        ]);

        $fee = RegistrationFee::findOrFail($id);

        $features = $fee->features;
        if ($request->filled('features_text')) {
            $features = array_filter(array_map('trim', explode("\n", $request->features_text)));
        }

        $fee->update([
            'early_bird' => $validated['early_bird'],
            'regular' => $validated['regular'],
            'is_featured' => $request->boolean('is_featured'),
            'features' => array_values($features),
        ]);

        return back()->with('success', 'Registration fee tier updated successfully.');
    }

    // ==================== ORGANIZING COMMITTEES ====================
    public function committees()
    {
        $committees = Committee::orderBy('order')->get();
        return view('admin.committees.index', compact('committees'));
    }

    public function storeCommittee(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'division' => 'required|string|in:patron,leadership,academic_head,member',
            'affiliation' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'order' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('committees', 'public');
        }

        Committee::create($validated);
        return back()->with('success', 'Committee member added successfully.');
    }

    public function updateCommittee(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'division' => 'required|string|in:patron,leadership,academic_head,member',
            'affiliation' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'order' => 'required|integer',
        ]);

        $committee = Committee::findOrFail($id);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('committees', 'public');
        } elseif ($request->boolean('remove_image')) {
            $validated['image'] = null;
        }

        $committee->update($validated);
        return back()->with('success', 'Committee member updated successfully.');
    }

    public function deleteCommittee($id)
    {
        $committee = Committee::findOrFail($id);
        $committee->delete();
        return back()->with('success', 'Committee member removed.');
    }
}
