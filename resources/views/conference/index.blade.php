@extends('layouts.app')

@section('title', 'ICSET 2027 | The 1st International Conference on Sustainable Economic Transformation')

@section('content')
    {{-- Hero Section --}}
    @include('partials.hero')

    {{-- About Section --}}
    @include('partials.about')

    {{-- Tracks Section (6 Tracks & Subtopics) --}}
    @include('partials.tracks')

    {{-- Speakers Section (Keynote & 4 Confirmed International Speakers) --}}
    @include('partials.speakers')

    {{-- Call for Papers & OJS Submission --}}
    @include('partials.cfp')

    {{-- Publications & Scopus Indexing --}}
    @include('partials.publications')

    {{-- Academic Partners & Sponsors --}}
    @include('partials.partners')

    {{-- Important Dates & Timeline --}}
    @include('partials.timeline')

    {{-- 2-Day Conference Daily Programme (Day 1 vs Day 2) --}}
    @include('partials.programme')

    {{-- Registration Fees --}}
    @include('partials.fees')

    {{-- Frequently Asked Questions (FAQ) --}}
    @include('partials.faq')

    {{-- Committee & Organization --}}
    @include('partials.committee')

    {{-- Venue & Travel Information --}}
    @include('partials.venue')
@endsection
