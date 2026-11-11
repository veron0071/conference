@extends('layouts.app')

@section('title', __('Check Registration Status') . ' | ICSET 2027')

@section('content')
<section class="pt-32 pb-20 bg-[#FFF9F2] min-h-screen">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-8">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-500 hover:text-[#800020] mb-4 transition-colors">
                <i data-lucide="arrow-left" class="w-4 h-4"></i>
                <span>{{ __('Back to Homepage') }}</span>
            </a>
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-[#F3E6D5] text-[#800020] text-xs font-black uppercase tracking-wider mb-3 border border-[#800020]/20 shadow-sm">
                <i data-lucide="search" class="w-4 h-4 text-[#D45060]"></i>
                <span>{{ __('Participant Lookup') }}</span>
            </div>
            <h1 class="text-3xl font-black text-slate-900 tracking-tight">
                {{ __('Check Registration Status') }}
            </h1>
            <p class="mt-2 text-sm text-slate-600">
                {{ __('Enter your Registration Code (e.g., ICSET27-XXXX) or registered email address.') }}
            </p>
        </div>

        <!-- Search Box -->
        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-xl mb-8">
            <form action="{{ route('registration.check') }}" method="GET" class="space-y-4">
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                        {{ __('Registration Code') }} / {{ __('Email Address') }}
                    </label>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <input type="text" name="query" value="{{ request('query') }}" required
                            placeholder="ICSET27-XXXX or author@email.com"
                            class="flex-1 px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-[#D45060] focus:border-[#D45060] outline-none text-sm text-slate-900 bg-white">
                        <button type="submit" class="px-6 py-3 rounded-xl bg-[#800020] hover:bg-[#5C0017] text-white font-black text-sm shadow-md transition-colors flex items-center justify-center gap-2">
                            <i data-lucide="search" class="w-4 h-4 text-[#D45060]"></i>
                            <span>{{ __('Search') }}</span>
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
                        <h3 class="text-xl font-mono font-black text-[#800020]">{{ $registration->reg_number }}</h3>
                    </div>
                    <span class="px-3.5 py-1 rounded-full text-xs font-black uppercase shadow-sm
                        @if($registration->payment_status == 'verified') bg-emerald-100 text-emerald-800 border border-emerald-300
                        @elseif($registration->payment_status == 'rejected') bg-rose-100 text-rose-800 border border-rose-300
                        @else bg-[#F3E6D5] text-[#800020] border border-[#800020]/20
                        @endif">
                        {{ ucfirst($registration->payment_status) }}
                    </span>
                </div>

                <div class="space-y-2 text-sm">
                    <p><span class="text-slate-500">{{ __('Participant Name:') }}</span> <strong class="text-slate-900">{{ $registration->full_name }}</strong></p>
                    <p><span class="text-slate-500">{{ __('Affiliation / University / Institution') }}:</span> <span class="text-slate-800">{{ $registration->institution }}</span></p>
                    <p><span class="text-slate-500">{{ __('Registration Tier / Category') }}:</span> <span class="text-[#800020] font-black">{{ $registration->category }}</span></p>
                    <p><span class="text-slate-500">{{ __('Attendance Mode:') }}</span> <span class="uppercase text-slate-800 font-bold">{{ $registration->attendance_type }}</span></p>
                    @if($registration->track)
                    <p><span class="text-slate-500">{{ __('Selected Track:') }}</span> <span class="text-slate-800 font-medium">{{ $registration->track->code }} - {{ __($registration->track->title) }}</span></p>
                    @endif
                </div>

                <div class="pt-4 border-t border-slate-100 text-right">
                    <a href="{{ route('registration.confirmation', ['reg_number' => $registration->reg_number]) }}" class="inline-flex items-center gap-1.5 text-xs font-black text-[#800020] hover:text-[#D45060] transition-colors underline">
                        <span>{{ __('View Full Registration Card') }}</span>
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>
            </div>
            @else
            <div class="p-6 rounded-2xl bg-[#F3E6D5]/60 border border-[#800020]/20 text-center text-[#800020] text-sm shadow-sm">
                <i data-lucide="alert-triangle" class="w-8 h-8 mx-auto text-[#D45060] mb-2"></i>
                <p class="font-black">{{ __('No registration found with query:') }} "{{ request('query') }}"</p>
                <p class="text-xs mt-1 text-slate-600">{{ __('Please double-check your code or contact the committee.') }}</p>
            </div>
            @endif
        @endif

    </div>
</section>
@endsection
