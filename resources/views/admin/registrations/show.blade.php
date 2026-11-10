@extends('admin.layout')

@section('title', 'Review Registration | ICSET 2027 Admin')
@section('header_title', 'Participant Verification')

@section('content')
<div class="max-w-4xl space-y-6">

    <div class="flex items-center justify-between">
        <a href="{{ route('admin.registrations') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-500 hover:text-slate-800">
            <i data-lucide="arrow-left" class="w-4 h-4"></i>
            <span>Back to Registrations</span>
        </a>

        <span class="font-mono font-bold text-sm text-slate-500">
            ID: {{ $registration->reg_number }}
        </span>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        
        <!-- Left 8 cols: Participant & Paper Info -->
        <div class="lg:col-span-8 space-y-6">
            
            <!-- Participant Info Card -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm space-y-4">
                <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-3 flex items-center gap-2">
                    <i data-lucide="user" class="w-4 h-4 text-emerald-600"></i>
                    <span>Participant Details</span>
                </h3>

                <div class="grid grid-cols-2 gap-4 text-xs">
                    <div>
                        <span class="text-slate-400 block">Full Name:</span>
                        <span class="font-bold text-slate-800 text-sm">{{ $registration->full_name }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block">Academic Title:</span>
                        <span class="font-semibold text-slate-800">{{ $registration->academic_title ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block">Email Address:</span>
                        <span class="font-semibold text-slate-800">{{ $registration->email }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block">WhatsApp / Phone:</span>
                        <span class="font-semibold text-slate-800">{{ $registration->phone }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block">Institution / University:</span>
                        <span class="font-semibold text-slate-800">{{ $registration->institution }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block">Country:</span>
                        <span class="font-semibold text-slate-800">{{ $registration->country }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block">Category:</span>
                        <span class="font-bold text-emerald-700">{{ $registration->category }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block">Attendance Mode:</span>
                        <span class="font-semibold text-slate-800 uppercase">{{ $registration->attendance_type }}</span>
                    </div>
                </div>
            </div>

            <!-- Paper & Abstract Card (if applicable) -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm space-y-4">
                <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-3 flex items-center gap-2">
                    <i data-lucide="file-text" class="w-4 h-4 text-emerald-600"></i>
                    <span>Manuscript & Track</span>
                </h3>

                <div class="space-y-3 text-xs">
                    <div>
                        <span class="text-slate-400 block">Selected Conference Track:</span>
                        @if($registration->track)
                            <span class="font-bold text-slate-800">{{ $registration->track->code }}: {{ $registration->track->title }}</span>
                        @else
                            <span class="text-slate-500 italic">No specific track chosen / Non-presenter</span>
                        @endif
                    </div>

                    <div>
                        <span class="text-slate-400 block">Paper Title:</span>
                        <span class="font-bold text-slate-900 text-sm block mt-0.5">
                            {{ $registration->paper_title ?? 'Not submitted yet' }}
                        </span>
                    </div>

                    <div>
                        <span class="text-slate-400 block mb-1">Abstract Summary:</span>
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 text-slate-700 leading-relaxed font-sans">
                            {{ $registration->abstract ?? 'No abstract submitted yet.' }}
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right 4 cols: Payment Verification & Proof -->
        <div class="lg:col-span-4 space-y-6">
            
            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm space-y-4">
                <h3 class="text-sm font-bold text-slate-900 border-b border-slate-100 pb-3 flex items-center gap-2">
                    <i data-lucide="check-square" class="w-4 h-4 text-emerald-600"></i>
                    <span>Payment Verification</span>
                </h3>

                <!-- Status Update Form -->
                <form action="{{ route('admin.registrations.status', $registration->id) }}" method="POST" class="space-y-4 text-xs">
                    @csrf

                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5 uppercase">Verification Status</label>
                        <select name="payment_status" class="w-full px-3 py-2.5 rounded-xl border border-slate-200 font-semibold focus:ring-2 focus:ring-emerald-500 outline-none bg-white">
                            <option value="pending" {{ $registration->payment_status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="verified" {{ $registration->payment_status == 'verified' ? 'selected' : '' }}>Verified (Approved)</option>
                            <option value="rejected" {{ $registration->payment_status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1.5 uppercase">Admin Review Notes</label>
                        <textarea name="admin_notes" rows="3" placeholder="Add internal verification notes..."
                            class="w-full px-3 py-2 rounded-xl border border-slate-200 focus:ring-2 focus:ring-emerald-500 outline-none">{{ $registration->admin_notes }}</textarea>
                    </div>

                    <button type="submit" class="w-full py-2.5 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold transition-colors">
                        Update Status
                    </button>
                </form>
            </div>

            <!-- Payment Proof Image / File -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm space-y-3">
                <h4 class="text-xs font-bold text-slate-700 uppercase">Payment Proof Attachment</h4>

                @if($registration->payment_proof)
                    <div class="rounded-xl overflow-hidden border border-slate-200 bg-slate-50">
                        @if(Str::endsWith($registration->payment_proof, ['.pdf']))
                            <div class="p-6 text-center">
                                <i data-lucide="file" class="w-12 h-12 text-slate-400 mx-auto mb-2"></i>
                                <span class="text-xs text-slate-600 font-bold block">PDF Document</span>
                                <a href="{{ asset('storage/' . $registration->payment_proof) }}" target="_blank" class="mt-2 inline-block text-xs text-brand-600 font-bold hover:underline">
                                    Open PDF File &rarr;
                                </a>
                            </div>
                        @else
                            <a href="{{ asset('storage/' . $registration->payment_proof) }}" target="_blank">
                                <img src="{{ asset('storage/' . $registration->payment_proof) }}" alt="Proof" class="w-full h-auto object-cover hover:opacity-90 transition-opacity">
                            </a>
                        @endif
                    </div>
                @else
                    <div class="p-6 rounded-xl bg-slate-50 border border-slate-200 text-center text-xs text-slate-400">
                        <i data-lucide="file-x" class="w-8 h-8 mx-auto mb-1 text-slate-300"></i>
                        <span>No payment receipt uploaded yet.</span>
                    </div>
                @endif
            </div>

        </div>

    </div>

</div>
@endsection
