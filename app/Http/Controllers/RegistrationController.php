<?php

namespace App\Http\Controllers;

use App\Models\ConferenceSetting;
use App\Models\Track;
use App\Models\RegistrationFee;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(Request $request)
    {
        $conference = ConferenceSetting::getAllAsArray();
        $tracks = Track::where('is_active', true)->orderBy('order')->get();
        $fees = RegistrationFee::where('is_active', true)->orderBy('order')->get();

        $selectedCategory = $request->query('category');
        $selectedTrack = $request->query('track');

        return view('registration.form', compact('conference', 'tracks', 'fees', 'selectedCategory', 'selectedTrack'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'academic_title' => 'nullable|string|max:100',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'institution' => 'required|string|max:255',
            'country' => 'required|string|max:100',
            'category' => 'required|string|max:255',
            'track_id' => 'nullable|exists:tracks,id',
            'attendance_type' => 'required|in:onsite,online',
            'paper_title' => 'nullable|string|max:500',
            'abstract' => 'nullable|string',
            'payment_proof' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5120',
        ]);

        $proofPath = null;
        if ($request->hasFile('payment_proof')) {
            $proofPath = $request->file('payment_proof')->store('payment_proofs', 'public');
        }

        $regNumber = Registration::generateRegNumber();

        $registration = Registration::create([
            'reg_number' => $regNumber,
            'full_name' => $validated['full_name'],
            'academic_title' => $validated['academic_title'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'institution' => $validated['institution'],
            'country' => $validated['country'],
            'category' => $validated['category'],
            'track_id' => $validated['track_id'] ?? null,
            'attendance_type' => $validated['attendance_type'],
            'paper_title' => $validated['paper_title'] ?? null,
            'abstract' => $validated['abstract'] ?? null,
            'payment_proof' => $proofPath,
            'payment_status' => $proofPath ? 'pending' : 'pending',
        ]);

        return redirect()->route('registration.confirmation', ['reg_number' => $registration->reg_number])
            ->with('success', 'Registration submitted successfully! Please retain your registration code.');
    }

    public function confirmation($reg_number)
    {
        $registration = Registration::with('track')->where('reg_number', $reg_number)->firstOrFail();
        $conference = ConferenceSetting::getAllAsArray();

        return view('registration.confirmation', compact('registration', 'conference'));
    }

    public function check(Request $request)
    {
        $conference = ConferenceSetting::getAllAsArray();
        $registration = null;

        if ($request->filled('query')) {
            $query = trim($request->input('query'));
            $registration = Registration::with('track')
                ->where('reg_number', $query)
                ->orWhere('email', $query)
                ->first();
        }

        return view('registration.check', compact('conference', 'registration'));
    }
}
