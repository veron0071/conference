<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICSET 2027 Official Call for Papers Brochure & Conference Flyer</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Noto+Sans+Arabic:wght@400;700&family=Noto+Sans+SC:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        @media print {
            .no-print { display: none !important; }
            body { background: white !important; color: black !important; padding: 0 !important; }
            .print-page { box-shadow: none !important; border: none !important; margin: 0 !important; max-width: 100% !important; }
        }
    </style>
</head>
<body class="bg-slate-100 text-slate-900 py-8 px-4 sm:px-6">

    <!-- Top Floating Toolbar (Hidden on print) -->
    <div class="no-print max-w-5xl mx-auto mb-6 flex flex-wrap items-center justify-between gap-4 p-4 rounded-2xl bg-slate-900 text-white shadow-xl">
        <div class="flex items-center gap-3">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-300 hover:text-white transition-colors">
                <i data-lucide="arrow-left" class="w-4 h-4"></i>
                <span>{{ __('Back to Website') }}</span>
            </a>
            <span class="text-slate-600">|</span>
            <span class="text-xs font-semibold text-emerald-400">{{ __('Official Conference Brochure & Factsheet (PDF-Ready)') }}</span>
        </div>

        <div class="flex items-center gap-3">
            <button onclick="window.print()" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-extrabold text-xs shadow-md transition-all">
                <i data-lucide="printer" class="w-4 h-4"></i>
                <span>{{ __('Print / Save as PDF') }}</span>
            </button>
            <a href="{{ route('registration.index') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-white font-bold text-xs border border-slate-700 transition-all">
                <i data-lucide="user-plus" class="w-4 h-4 text-emerald-400"></i>
                <span>{{ __('Register Now') }}</span>
            </a>
        </div>
    </div>

    <!-- Official Brochure Document Container -->
    <main class="print-page max-w-5xl mx-auto bg-white rounded-3xl border border-slate-200 shadow-2xl overflow-hidden p-8 sm:p-12">
        
        <!-- Document Header / Letterhead -->
        <header class="pb-8 border-b-2 border-emerald-600 mb-8 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
            <div class="flex items-center gap-4">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-emerald-600 via-teal-600 to-sky-600 text-white flex items-center justify-center font-black text-2xl shadow-lg">
                    I
                </div>
                <div>
                    <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">ICSET 2027</h1>
                    <p class="text-xs font-bold uppercase tracking-wider text-emerald-700">The 1st International Conference on Sustainable Economic Transformation</p>
                    <p class="text-xs text-slate-500">Faculty of Economics and Business, Universitas Wahid Hasyim (UNWAHAS)</p>
                </div>
            </div>

            <div class="text-left sm:text-right">
                <span class="inline-block px-3.5 py-1 rounded-full bg-emerald-100 text-emerald-800 font-extrabold text-xs border border-emerald-300 mb-1">
                    {{ __('Hybrid Conference') }}
                </span>
                <p class="text-xs font-bold text-slate-800">August 3 – 4, 2027</p>
                <p class="text-[11px] text-slate-500">Semarang, Central Java, Indonesia</p>
            </div>
        </header>

        <!-- Conference Theme Callout -->
        <div class="mb-10 p-6 rounded-2xl bg-slate-900 text-white border border-emerald-500/40 shadow-lg">
            <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 block mb-1">
                {{ __('Official Call for Papers Announcement') }}
            </span>
            <h2 class="text-xl sm:text-2xl font-extrabold text-white leading-snug mb-2">
                “{{ $conference['theme'] }}”
            </h2>
            <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                {{ __('Scholars, practitioners, doctoral researchers, and policymakers are warmly invited to submit empirical, theoretical, and methodological manuscripts for double-blind peer review and Scopus-indexed proceedings publication.') }}
            </p>
        </div>

        <!-- 2 Columns Grid: Keynotes & Indexing -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-10">
            
            <!-- Left: Speakers -->
            <div class="md:col-span-7 space-y-4">
                <div class="flex items-center gap-2 pb-2 border-b border-slate-200">
                    <i data-lucide="mic" class="w-4 h-4 text-emerald-600"></i>
                    <h3 class="text-sm font-extrabold uppercase tracking-wider text-slate-900">{{ __('Distinguished Speakers') }}</h3>
                </div>

                <div class="space-y-3">
                    @foreach($speakers as $spk)
                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <div class="w-10 h-10 rounded-lg bg-emerald-700 text-white flex items-center justify-center font-bold text-xs flex-shrink-0">
                            {{ substr($spk->name, 0, 2) }}
                        </div>
                        <div class="min-w-0">
                            <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800">
                                {{ __($spk->role) }}
                            </span>
                            <h4 class="text-xs font-extrabold text-slate-900 truncate mt-0.5">{{ $spk->name }}</h4>
                            <p class="text-[11px] text-slate-600 truncate">{{ __($spk->institution) }}</p>
                            <p class="text-[10px] text-emerald-700 font-semibold truncate">{{ __($spk->topic) }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Right: Publication & Indexing -->
            <div class="md:col-span-5 space-y-4">
                <div class="flex items-center gap-2 pb-2 border-b border-slate-200">
                    <i data-lucide="book-marked" class="w-4 h-4 text-sky-600"></i>
                    <h3 class="text-sm font-extrabold uppercase tracking-wider text-slate-900">{{ __('Publication Luaran') }}</h3>
                </div>

                <div class="p-5 rounded-2xl bg-sky-50/70 border border-sky-200 space-y-3 text-xs text-slate-700">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-sky-600"></span>
                        <span class="font-extrabold text-slate-900">Scopus & Web of Science Indexed</span>
                    </div>
                    <p class="text-[11px] leading-relaxed text-slate-600">
                        Accepted manuscripts presented at ICSET 2027 will be submitted for international proceedings in <strong>E3S Web of Conferences</strong> or <strong>IOP Conference Series</strong> (Backup: Atlantis Press).
                    </p>

                    <div class="pt-2 border-t border-sky-200 space-y-1.5 text-[11px]">
                        <p class="flex items-center gap-2 font-semibold">
                            <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                            <span>Assigned DOI for each paper</span>
                        </p>
                        <p class="flex items-center gap-2 font-semibold">
                            <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                            <span>Worldwide Open Access visibility</span>
                        </p>
                        <p class="flex items-center gap-2 font-semibold">
                            <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                            <span>Peer-reviewed by international committee</span>
                        </p>
                    </div>
                </div>

                <!-- Co-Host Journals -->
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 text-xs">
                    <span class="font-bold text-slate-800 block mb-1">Supporting FEB UNWAHAS Journals:</span>
                    <ul class="text-[11px] text-slate-600 space-y-0.5 list-disc list-inside">
                        <li>Jurnal Ekonomi Manajemen & Akuntansi (JEMA)</li>
                        <li>Jurnal Ilmiah Ekonomi Islam</li>
                        <li>Magister Manajemen UNWAHAS Scientific Journal</li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- 6 Conference Tracks -->
        <div class="mb-10">
            <div class="flex items-center gap-2 pb-2 border-b border-slate-200 mb-4">
                <i data-lucide="layers" class="w-4 h-4 text-emerald-600"></i>
                <h3 class="text-sm font-extrabold uppercase tracking-wider text-slate-900">{{ __('6 Interdisciplinary Research Tracks') }}</h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach($tracks as $trk)
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 text-xs">
                    <span class="font-mono font-extrabold text-[10px] px-2 py-0.5 rounded bg-slate-200 text-slate-800">
                        {{ $trk->code }}
                    </span>
                    <h4 class="font-bold text-slate-900 mt-2 mb-1">{{ __($trk->title) }}</h4>
                    <p class="text-[10px] text-slate-500 line-clamp-2">
                        @foreach($trk->topics->take(3) as $tp)
                            {{ __($tp->name) }}{{ !$loop->last ? ', ' : '' }}
                        @endforeach
                    </p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- 2 Columns Grid: Timeline & Registration Fees -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-10">
            
            <!-- Timeline Milestones -->
            <div class="md:col-span-6 space-y-4">
                <div class="flex items-center gap-2 pb-2 border-b border-slate-200">
                    <i data-lucide="calendar-clock" class="w-4 h-4 text-amber-600"></i>
                    <h3 class="text-sm font-extrabold uppercase tracking-wider text-slate-900">{{ __('Key Submission Dates') }}</h3>
                </div>

                <div class="space-y-2 text-xs">
                    @foreach($timeline as $tm)
                    <div class="flex items-center justify-between p-2.5 rounded-lg bg-slate-50 border border-slate-200">
                        <div>
                            <span class="font-bold text-slate-900 block">{{ __($tm->title) }}</span>
                            <span class="text-[10px] text-slate-500">{{ __($tm->badge) }}</span>
                        </div>
                        <span class="font-mono font-extrabold text-emerald-800 text-xs">
                            {{ __($tm->date_string) }}
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Registration Fees -->
            <div class="md:col-span-6 space-y-4">
                <div class="flex items-center gap-2 pb-2 border-b border-slate-200">
                    <i data-lucide="tag" class="w-4 h-4 text-emerald-600"></i>
                    <h3 class="text-sm font-extrabold uppercase tracking-wider text-slate-900">{{ __('Registration Fee Tiers') }}</h3>
                </div>

                <div class="space-y-2 text-xs">
                    @foreach($fees as $fee)
                    <div class="p-3 rounded-lg border {{ $fee->is_featured ? 'bg-emerald-50/70 border-emerald-300' : 'bg-slate-50 border-slate-200' }} flex items-center justify-between">
                        <div>
                            <span class="font-bold text-slate-900 block">{{ __($fee->category) }}</span>
                            <span class="text-[10px] text-slate-500">Regular: {{ $fee->regular }}</span>
                        </div>
                        <div class="text-right">
                            <span class="text-[10px] font-bold text-emerald-700 uppercase block">Early Bird</span>
                            <span class="font-extrabold text-slate-900 text-xs">{{ $fee->early_bird }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        <!-- Payment & Secretarial Footer -->
        <footer class="pt-6 border-t-2 border-slate-200 grid grid-cols-1 sm:grid-cols-3 gap-6 text-xs text-slate-600">
            <div>
                <span class="font-bold text-slate-900 block mb-1">{{ __('Payment Banking Details:') }}</span>
                <p>Bank: <strong>{{ $conference['bank_name'] }}</strong></p>
                <p>Account: <strong>{{ $conference['bank_account'] }}</strong></p>
                <p class="text-[10px] text-slate-400 mt-0.5">{{ __('Reference: ICSET27 Registration Code') }}</p>
            </div>

            <div>
                <span class="font-bold text-slate-900 block mb-1">{{ __('Conference Secretariat:') }}</span>
                <p>Email: <strong>{{ $conference['email'] }}</strong></p>
                <p>WhatsApp: <strong>{{ $conference['phone'] }}</strong></p>
                <p class="text-[10px] text-slate-400 mt-0.5">{{ $conference['address'] }}</p>
            </div>

            <div class="text-left sm:text-right">
                <span class="font-bold text-slate-900 block mb-1">{{ __('Registration Portal:') }}</span>
                <p class="text-emerald-700 font-extrabold">{{ url('/register-participant') }}</p>
                <p class="text-[10px] text-slate-400 mt-1">OJS Submission Portal: {{ $conference['ojs_url'] }}</p>
            </div>
        </footer>

    </main>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
