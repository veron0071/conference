@extends('admin.layout')

@section('title', 'Dashboard | ICSET 2027 Admin')
@section('header_title', 'Overview & Performance')

@section('content')
<div class="space-y-6">
    
    <!-- Top Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-1">Total Registrations</span>
                <span class="text-3xl font-extrabold text-slate-900">{{ $metrics['total_registrations'] }}</span>
                <span class="text-xs text-slate-500 block mt-1">{{ $metrics['pending_registrations'] }} pending review</span>
            </div>
            <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                <i data-lucide="users" class="w-6 h-6"></i>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-1">Verified Payments</span>
                <span class="text-3xl font-extrabold text-emerald-600">{{ $metrics['verified_registrations'] }}</span>
                <span class="text-xs text-emerald-700 block mt-1">Confirmed participants</span>
            </div>
            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                <i data-lucide="check-circle" class="w-6 h-6"></i>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-1">Keynote & Speakers</span>
                <span class="text-3xl font-extrabold text-slate-900">{{ $metrics['total_speakers'] }}</span>
                <span class="text-xs text-slate-500 block mt-1">International guests</span>
            </div>
            <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center">
                <i data-lucide="mic" class="w-6 h-6"></i>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-1">Conference Tracks</span>
                <span class="text-3xl font-extrabold text-slate-900">{{ $metrics['total_tracks'] }}</span>
                <span class="text-xs text-slate-500 block mt-1">Interdisciplinary scopes</span>
            </div>
            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center">
                <i data-lucide="layers" class="w-6 h-6"></i>
            </div>
        </div>
    </div>

    <!-- Recent Registrations & Quick Actions -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        
        <!-- Recent Registrations Table -->
        <div class="lg:col-span-8 bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                <div>
                    <h3 class="text-sm font-bold text-slate-900">Recent Participant Registrations</h3>
                    <p class="text-xs text-slate-500 mt-0.5">Authors and participants submitted via portal</p>
                </div>
                <a href="{{ route('admin.registrations') }}" class="text-xs font-bold text-emerald-600 hover:text-emerald-700">
                    View All &rarr;
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 text-slate-500 uppercase font-bold text-[10px]">
                        <tr>
                            <th class="px-5 py-3">Code / Name</th>
                            <th class="px-5 py-3">Category</th>
                            <th class="px-5 py-3">Track</th>
                            <th class="px-5 py-3">Payment</th>
                            <th class="px-5 py-3 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($recentRegistrations as $reg)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="px-5 py-3.5">
                                <span class="font-mono font-bold text-emerald-700 block">{{ $reg->reg_number }}</span>
                                <span class="font-semibold text-slate-800">{{ $reg->full_name }}</span>
                                <span class="text-[11px] text-slate-400 block">{{ $reg->institution }}</span>
                            </td>
                            <td class="px-5 py-3.5">
                                <span class="px-2 py-0.5 rounded-full text-[10px] font-semibold bg-slate-100 text-slate-700">
                                    {{ $reg->category }}
                                </span>
                            </td>
                            <td class="px-5 py-3.5 text-slate-600">
                                {{ $reg->track ? $reg->track->code : 'Non-Presenter' }}
                            </td>
                            <td class="px-5 py-3.5">
                                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold uppercase
                                    @if($reg->payment_status == 'verified') bg-emerald-100 text-emerald-800
                                    @elseif($reg->payment_status == 'rejected') bg-rose-100 text-rose-800
                                    @else bg-amber-100 text-amber-800
                                    @endif">
                                    {{ $reg->payment_status }}
                                </span>
                            </td>
                            <td class="px-5 py-3.5 text-right">
                                <a href="{{ route('admin.registrations.show', $reg->id) }}" class="px-2.5 py-1 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-[11px]">
                                    Review
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-5 py-8 text-center text-slate-400">
                                No participant registrations yet.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Quick Actions & Confirmed Speakers -->
        <div class="lg:col-span-4 space-y-6">
            
            <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm">
                <h3 class="text-sm font-bold text-slate-900 mb-3">Quick Actions</h3>
                <div class="space-y-2">
                    <a href="{{ route('admin.speakers') }}" class="flex items-center gap-2.5 p-3 rounded-xl bg-slate-50 hover:bg-slate-100 text-xs font-semibold text-slate-700 transition-colors">
                        <i data-lucide="plus-circle" class="w-4 h-4 text-emerald-600"></i>
                        <span>Add New Speaker</span>
                    </a>
                    <a href="{{ route('admin.timelines') }}" class="flex items-center gap-2.5 p-3 rounded-xl bg-slate-50 hover:bg-slate-100 text-xs font-semibold text-slate-700 transition-colors">
                        <i data-lucide="calendar" class="w-4 h-4 text-sky-600"></i>
                        <span>Adjust Timeline & Deadlines</span>
                    </a>
                    <a href="{{ route('admin.settings') }}" class="flex items-center gap-2.5 p-3 rounded-xl bg-slate-50 hover:bg-slate-100 text-xs font-semibold text-slate-700 transition-colors">
                        <i data-lucide="sliders" class="w-4 h-4 text-purple-600"></i>
                        <span>Edit Conference Theme & Dates</span>
                    </a>
                    <a href="{{ route('registration.index') }}" target="_blank" class="flex items-center gap-2.5 p-3 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-xs font-bold text-emerald-800 transition-colors">
                        <i data-lucide="external-link" class="w-4 h-4 text-emerald-600"></i>
                        <span>Open Public Registration Form</span>
                    </a>
                </div>
            </div>

            <!-- Current Speakers Snapshot -->
            <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-sm font-bold text-slate-900">Invited Speakers</h3>
                    <a href="{{ route('admin.speakers') }}" class="text-[11px] font-bold text-emerald-600 hover:underline">Manage</a>
                </div>
                <div class="space-y-3">
                    @foreach($speakers as $spk)
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 font-bold text-xs flex items-center justify-center flex-shrink-0">
                            {{ $spk->flag ?? '🎤' }}
                        </div>
                        <div class="min-w-0 flex-1">
                            <span class="text-xs font-bold text-slate-800 truncate block">{{ $spk->name }}</span>
                            <span class="text-[11px] text-slate-400 truncate block">{{ $spk->institution }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
