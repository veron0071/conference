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

    {{-- Important Dates & Timeline --}}
    @include('partials.timeline')

    {{-- Registration Fees --}}
    @include('partials.fees')

    {{-- Committee & Organization --}}
    @include('partials.committee')

    {{-- Venue & Travel Information --}}
    @include('partials.venue')
@endsection
