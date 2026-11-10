@extends('admin.layout')

@section('title', 'Conference Settings | ICSET 2027 Admin')
@section('header_title', 'Global Conference Settings')

@section('content')
<div class="max-w-4xl space-y-6">

    <div class="bg-white rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        <h3 class="text-sm font-bold text-slate-900 mb-6 pb-3 border-b border-slate-100 flex items-center gap-2">
            <i data-lucide="sliders" class="w-4 h-4 text-emerald-600"></i>
            <span>Conference Metadata & Logistics</span>
        </h3>

        <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-6 text-xs">
            @csrf

            <!-- Section: Identity -->
            <div class="space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400">1. Identity & Theme</h4>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="sm:col-span-2">
                        <label class="block font-bold text-slate-700 mb-1">Full Conference Name</label>
                        <input type="text" name="name" value="{{ $settings['name'] ?? '' }}" required
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Short Name / Acronym</label>
                        <input type="text" name="short_name" value="{{ $settings['short_name'] ?? '' }}" required
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200">
                    </div>

                    <div class="sm:col-span-3">
                        <label class="block font-bold text-slate-700 mb-1">Conference Main Theme</label>
                        <textarea name="theme" rows="2" required
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200 leading-relaxed">{{ $settings['theme'] ?? '' }}</textarea>
                    </div>

                    <div class="sm:col-span-3">
                        <label class="block font-bold text-slate-700 mb-1">Host & Faculty</label>
                        <div class="grid grid-cols-2 gap-4">
                            <input type="text" name="faculty" value="{{ $settings['faculty'] ?? '' }}" placeholder="Faculty of Economics and Business (FEB)"
                                class="w-full px-3 py-2.5 rounded-xl border border-slate-200">
                            <input type="text" name="host" value="{{ $settings['host'] ?? '' }}" placeholder="Universitas Wahid Hasyim (UNWAHAS)"
                                class="w-full px-3 py-2.5 rounded-xl border border-slate-200">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section: Schedule & Venues -->
            <div class="space-y-4 pt-4 border-t border-slate-100">
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400">2. Dates & Venues</h4>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Conference Dates (Display)</label>
                        <input type="text" name="dates" value="{{ $settings['dates'] ?? '' }}" required
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Days of Week</label>
                        <input type="text" name="days" value="{{ $settings['days'] ?? '' }}"
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Plenary Venue (Main Conference)</label>
                        <input type="text" name="venue_main" value="{{ $settings['venue_main'] ?? '' }}"
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Parallel Sessions Venue</label>
                        <input type="text" name="venue_track" value="{{ $settings['venue_track'] ?? '' }}"
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200">
                    </div>
                </div>
            </div>

            <!-- Section: Submission & Financial Banking -->
            <div class="space-y-4 pt-4 border-t border-slate-100">
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400">3. Portal OJS & Banking Details</h4>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">UNWAHAS OJS URL</label>
                        <input type="url" name="ojs_url" value="{{ $settings['ojs_url'] ?? '' }}"
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">CFP Official Launch Date</label>
                        <input type="text" name="cfp_launch" value="{{ $settings['cfp_launch'] ?? '' }}"
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Bank Name</label>
                        <input type="text" name="bank_name" value="{{ $settings['bank_name'] ?? '' }}"
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Bank Account Number & Name</label>
                        <input type="text" name="bank_account" value="{{ $settings['bank_account'] ?? '' }}"
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Official Secretariat Email</label>
                        <input type="email" name="email" value="{{ $settings['email'] ?? '' }}"
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200">
                    </div>
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Official WhatsApp Contact</label>
                        <input type="text" name="phone" value="{{ $settings['phone'] ?? '' }}"
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200">
                    </div>
                </div>
            </div>

            <div class="pt-6 border-t border-slate-100 text-right">
                <button type="submit" class="px-6 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold transition-colors">
                    Save Conference Settings
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
