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
            'order' => 'required|integer',
        ]);

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
            'order' => 'required|integer',
        ]);

        $speaker = Speaker::findOrFail($id);
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
        $data = $request->except(['_token']);

        foreach ($data as $key => $value) {
            ConferenceSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return back()->with('success', 'Conference settings updated successfully.');
    }
}
