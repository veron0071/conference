@extends('layouts.app')

@section('title', __('Check Registration Status') . ' | ICSET 2027')

@section('content')
<section class="pt-32 pb-20 bg-slate-50 min-h-screen">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-8">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-500 hover:text-emerald-600 mb-4 transition-colors">
                <i data-lucide="arrow-left" class="w-4 h-4"></i>
                <span>{{ __('Back to Homepage') }}</span>
            </a>
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-sky-100 text-sky-800 text-xs font-bold uppercase tracking-wider mb-3 border border-sky-200">
                <i data-lucide="search" class="w-4 h-4"></i>
                <span>{{ __('Participant Lookup') }}</span>
            </div>
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                {{ __('Check Registration Status') }}
            </h1>
            <p class="mt-2 text-sm text-slate-600">
                {{ __('Enter your Registration Code (e.g., ICSET27-XXXX) or registered email address.') }}
            </p>
        </div>

        <!-- Search Box -->
        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-lg mb-8">
            <form action="{{ route('registration.check') }}" method="GET" class="space-y-4">
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                        {{ __('Registration Code') }} / {{ __('Email Address') }}
                    </label>
                    <div class="flex gap-3">
                        <input type="text" name="query" value="{{ request('query') }}" required
                            placeholder="ICSET27-XXXX or author@email.com"
                            class="flex-1 px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-sm text-slate-900 bg-white">
                        <button type="submit" class="px-6 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm shadow-md transition-colors">
                            {{ __('Search') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Search Result -->
        @if(request()->filled('query'))
            @if($registration)
            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-xl space-y-4">
                <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                    <div>
                        <span class="text-xs text-slate-400 font-bold uppercase">{{ __('Registration Code') }}</span>
                        <h3 class="text-xl font-mono font-extrabold text-emerald-700">{{ $registration->reg_number }}</h3>
                    </div>
                    <span class="px-3 py-1 rounded-full text-xs font-bold uppercase
                        @if($registration->payment_status == 'verified') bg-emerald-100 text-emerald-800
                        @elseif($registration->payment_status == 'rejected') bg-rose-100 text-rose-800
                        @else bg-amber-100 text-amber-800
                        @endif">
                        {{ ucfirst($registration->payment_status) }}
                    </span>
                </div>

                <div class="space-y-2 text-sm">
                    <p><span class="text-slate-500">{{ __('Participant Name:') }}</span> <strong class="text-slate-900">{{ $registration->full_name }}</strong></p>
                    <p><span class="text-slate-500">{{ __('Affiliation / University / Institution') }}:</span> <span class="text-slate-800">{{ $registration->institution }}</span></p>
                    <p><span class="text-slate-500">{{ __('Registration Tier / Category') }}:</span> <span class="text-emerald-700 font-semibold">{{ $registration->category }}</span></p>
                    <p><span class="text-slate-500">{{ __('Attendance Mode:') }}</span> <span class="uppercase text-slate-800">{{ $registration->attendance_type }}</span></p>
                    @if($registration->track)
                    <p><span class="text-slate-500">{{ __('Selected Track:') }}</span> <span class="text-slate-800">{{ $registration->track->code }} - {{ __($registration->track->title) }}</span></p>
                    @endif
                </div>

                <div class="pt-4 border-t border-slate-100 text-right">
                    <a href="{{ route('registration.confirmation', ['reg_number' => $registration->reg_number]) }}" class="text-xs font-bold text-emerald-700 hover:text-emerald-800 underline">
                        {{ __('View Full Registration Card') }} &rarr;
                    </a>
                </div>
            </div>
            @else
            <div class="p-6 rounded-2xl bg-amber-50 border border-amber-200 text-center text-amber-800 text-sm">
                <i data-lucide="alert-triangle" class="w-8 h-8 mx-auto text-amber-600 mb-2"></i>
                <p class="font-bold">{{ __('No registration found with query:') }} "{{ request('query') }}"</p>
                <p class="text-xs mt-1 text-amber-700">{{ __('Please double-check your code or contact the committee.') }}</p>
            </div>
            @endif
        @endif

    </div>
</section>
@endsection
