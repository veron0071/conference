<?php

namespace App\Http\Controllers;

use App\Models\ConferenceSetting;
use App\Models\Track;
use App\Models\Speaker;
use App\Models\Timeline;
use App\Models\RegistrationFee;
use App\Models\Committee;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
    {
        $conference = ConferenceSetting::getAllAsArray();

        $tracks = Track::with('topics')
            ->where('is_active', true)
            ->orderBy('order')
            ->get();

        $speakers = Speaker::where('is_active', true)
            ->orderBy('order')
            ->get();

        $timeline = Timeline::where('is_active', true)
            ->orderBy('order')
            ->get();

        $fees = RegistrationFee::where('is_active', true)
            ->orderBy('order')
            ->get();

        $committeeAll = Committee::orderBy('order')->get();
        $committee = [
            'patron' => $committeeAll->where('division', 'patron'),
            'leaders' => $committeeAll->where('division', 'leadership'),
            'division_chairs' => $committeeAll->where('division', 'academic_head'),
        ];

        return view('conference.index', compact('conference', 'tracks', 'speakers', 'timeline', 'committee', 'fees'));
    }
}
