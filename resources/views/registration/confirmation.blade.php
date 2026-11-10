@extends('layouts.app')

@section('title', __('Registration Submitted Successfully!') . ' | ICSET 2027')

@section('content')
<section class="pt-32 pb-20 bg-slate-50 min-h-screen">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Success Alert -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto mb-4 shadow-sm border border-emerald-200">
                <i data-lucide="check" class="w-8 h-8"></i>
            </div>
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                {{ __('Registration Submitted Successfully!') }}
            </h1>
            <p class="mt-2 text-sm text-slate-600">
                {{ __('Thank you for registering for the 1st International Conference on Sustainable Economic Transformation.') }}
            </p>
        </div>

        <!-- Registration Card / Invoice -->
        <div id="print-area" class="bg-white rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-xl mb-6">
            
            <!-- Card Header -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center pb-6 border-b border-slate-100 gap-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">{{ __('Registration Code') }}</span>
                    <span class="text-2xl font-extrabold text-emerald-700 tracking-tight font-mono">{{ $registration->reg_number }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider
                        @if($registration->payment_status == 'verified') bg-emerald-100 text-emerald-800
                        @elseif($registration->payment_status == 'rejected') bg-rose-100 text-rose-800
                        @else bg-amber-100 text-amber-800
                        @endif">
                        Status: {{ ucfirst($registration->payment_status) }}
                    </span>
                </div>
            </div>

            <!-- Details Grid -->
            <div class="py-6 space-y-4 border-b border-slate-100 text-sm">
                <div class="flex justify-between py-1.5">
                    <span class="text-slate-500">{{ __('Participant Name:') }}</span>
                    <span class="font-bold text-slate-900 text-right">{{ $registration->full_name }}</span>
                </div>
                <div class="flex justify-between py-1.5">
                    <span class="text-slate-500">{{ __('Email Address') }}:</span>
                    <span class="font-semibold text-slate-800 text-right">{{ $registration->email }}</span>
                </div>
                <div class="flex justify-between py-1.5">
                    <span class="text-slate-500">{{ __('WhatsApp / Mobile Number') }}:</span>
                    <span class="font-semibold text-slate-800 text-right">{{ $registration->phone }}</span>
                </div>
                <div class="flex justify-between py-1.5">
                    <span class="text-slate-500">{{ __('Affiliation / University / Institution') }}:</span>
                    <span class="font-semibold text-slate-800 text-right">{{ $registration->institution }} ({{ $registration->country }})</span>
                </div>
                <div class="flex justify-between py-1.5">
                    <span class="text-slate-500">{{ __('Registration Tier / Category') }}:</span>
                    <span class="font-bold text-emerald-700 text-right">{{ $registration->category }}</span>
                </div>
                <div class="flex justify-between py-1.5">
                    <span class="text-slate-500">{{ __('Attendance Mode:') }}</span>
                    <span class="font-semibold text-slate-800 text-right uppercase">{{ $registration->attendance_type }}</span>
                </div>
                @if($registration->track)
                <div class="flex justify-between py-1.5">
                    <span class="text-slate-500">{{ __('Selected Track:') }}</span>
                    <span class="font-semibold text-slate-800 text-right">{{ $registration->track->code }}: {{ $registration->track->title }}</span>
                </div>
                @endif
                @if($registration->paper_title)
                <div class="flex flex-col py-1.5">
                    <span class="text-slate-500 mb-1">{{ __('Paper Title:') }}</span>
                    <span class="font-semibold text-slate-800 italic">“{{ $registration->paper_title }}”</span>
                </div>
                @endif
            </div>

            <!-- Bank & Next Steps -->
            <div class="mt-6 p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-xs sm:text-sm text-slate-700 space-y-2">
                <h4 class="font-bold text-emerald-900 flex items-center gap-1.5">
                    <i data-lucide="info" class="w-4 h-4"></i>
                    <span>{{ __('Payment Instructions:') }}</span>
                </h4>
                <p>{{ __('Please make payment using your Registration Code') }} (<strong>{{ $registration->reg_number }}</strong>) {{ __('in the payment reference/transfer note.') }}</p>
                <div class="p-3 bg-white rounded-xl border border-emerald-200 mt-2">
                    <p class="font-semibold text-slate-800">{{ __('Bank:') }} <strong>{{ $conference['bank_name'] ?? 'Bank Syariah Indonesia (BSI)' }}</strong></p>
                    <p class="font-semibold text-slate-800">{{ __('Account:') }} <strong>{{ $conference['bank_account'] ?? 'Panitia ICSET FEB UNWAHAS' }}</strong></p>
                </div>
                <p class="text-xs text-slate-500 pt-1">
                    {{ __('For inquiries, please contact our Secretariat via WhatsApp or email.') }}
                </p>
            </div>

            <!-- Card Actions -->
            <div class="mt-8 flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-slate-100">
                <button onclick="window.print()" class="w-full sm:w-auto px-5 py-2.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs inline-flex items-center justify-center gap-2 shadow-sm transition-colors">
                    <i data-lucide="printer" class="w-4 h-4"></i>
                    <span>{{ __('Print Confirmation') }}</span>
                </button>
                <div class="flex items-center gap-3 w-full sm:w-auto">
                    <a href="{{ route('registration.check') }}" class="w-full sm:w-auto px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 border border-slate-200 font-bold text-xs text-center transition-colors">
                        {{ __('Check Status') }}
                    </a>
                    <a href="{{ route('home') }}" class="w-full sm:w-auto px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs text-center shadow-md transition-colors">
                        {{ __('Back to Homepage') }}
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection
