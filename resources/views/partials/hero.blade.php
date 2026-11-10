<section id="hero" class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 hero-pattern text-white overflow-hidden">
    <!-- Subtle Ambient Glows -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-emerald-500/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/2 -right-32 w-96 h-96 bg-sky-500/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full dark-glass text-xs sm:text-sm font-semibold text-emerald-300 mb-6 shadow-sm border border-emerald-500/30">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span>{{ __('The 1st International Conference') }}</span>
                <span class="text-emerald-500">•</span>
                <span class="text-slate-200">{{ __('Semarang, Indonesia') }}</span>
            </div>

            <!-- Main Heading -->
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight sm:leading-tight mb-6">
                {{ __('International Conference on') }} <br class="hidden sm:inline">
                <span class="bg-gradient-to-r from-emerald-400 via-teal-300 to-sky-400 bg-clip-text text-transparent">{{ __('Sustainable Economic Transformation') }}</span>
            </h1>

            <!-- Theme Box -->
            <div class="dark-glass rounded-2xl p-6 sm:p-8 mb-8 text-left sm:text-center border border-emerald-500/30 shadow-2xl">
                <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 block mb-2">{{ __('Conference Main Theme') }}</span>
                <p class="text-lg sm:text-2xl font-semibold text-slate-100 italic leading-relaxed">
                    “{{ $conference['theme'] }}”
                </p>
                <p class="mt-2 text-sm text-slate-300">
                    {{ __('Organized by') }} {{ $conference['faculty'] }}, {{ $conference['host'] }}
                </p>
            </div>

            <!-- Key Info Pills -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-10 max-w-3xl mx-auto text-left">
                <div class="flex items-center gap-3.5 p-4 rounded-xl dark-glass border border-white/10">
                    <div class="w-10 h-10 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="calendar" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <span class="block text-xs text-slate-400 uppercase tracking-wide">{{ __('Conference Dates') }}</span>
                        <span class="text-sm font-bold text-white">{{ $conference['dates'] }}</span>
                    </div>
                </div>

                <div class="flex items-center gap-3.5 p-4 rounded-xl dark-glass border border-white/10">
                    <div class="w-10 h-10 rounded-lg bg-sky-500/20 text-sky-400 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="map-pin" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <span class="block text-xs text-slate-400 uppercase tracking-wide">{{ __('Venue Location') }}</span>
                        <span class="text-sm font-bold text-white">Kampus 2 UNWAHAS, Semarang</span>
                    </div>
                </div>

                <div class="flex items-center gap-3.5 p-4 rounded-xl dark-glass border border-white/10">
                    <div class="w-10 h-10 rounded-lg bg-amber-500/20 text-amber-400 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="award" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <span class="block text-xs text-slate-400 uppercase tracking-wide">{{ __('Target Proceedings') }}</span>
                        <span class="text-sm font-bold text-white">{{ __('Scopus Indexed (E3S / IOP)') }}</span>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('registration.index') }}" class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-xl font-extrabold text-base text-slate-950 bg-emerald-400 hover:bg-emerald-300 shadow-xl shadow-emerald-500/30 hover:scale-105 transition-all duration-200">
                    <i data-lucide="user-plus" class="w-5 h-5"></i>
                    <span>{{ __('Register Participant') }}</span>
                </a>
                <a href="#cfp" class="inline-flex items-center gap-2.5 px-6 py-3.5 rounded-xl font-bold text-base text-white bg-slate-900/90 hover:bg-slate-800 border border-slate-600 shadow-lg transition-all duration-200">
                    <i data-lucide="send" class="w-5 h-5"></i>
                    <span>{{ __('Call for Papers') }}</span>
                </a>
                <a href="#tracks" class="inline-flex items-center gap-2 px-5 py-3.5 rounded-xl font-bold text-sm text-emerald-300 bg-emerald-950/80 hover:bg-emerald-900 border border-emerald-500/30 transition-colors">
                    <span>{{ __('Explore 6 Tracks') }}</span>
                    <i data-lucide="arrow-down" class="w-4 h-4"></i>
                </a>
            </div>
        </div>

        <!-- Metric Badges Row -->
        <div class="mt-16 pt-12 border-t border-emerald-500/20 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div>
                <span class="block text-3xl sm:text-4xl font-extrabold text-emerald-400">6</span>
                <span class="text-xs sm:text-sm text-slate-300 mt-1 block">{{ __('Interdisciplinary Tracks') }}</span>
            </div>
            <div>
                <span class="block text-3xl sm:text-4xl font-extrabold text-teal-300">4+</span>
                <span class="text-xs sm:text-sm text-slate-300 mt-1 block">{{ __('Global Confirmed Speakers') }}</span>
            </div>
            <div>
                <span class="block text-3xl sm:text-4xl font-extrabold text-sky-400">Scopus</span>
                <span class="text-xs sm:text-sm text-slate-300 mt-1 block">{{ __('Proceedings Publication') }}</span>
            </div>
            <div>
                <span class="block text-3xl sm:text-4xl font-extrabold text-amber-300">01 Dec</span>
                <span class="text-xs sm:text-sm text-slate-300 mt-1 block">{{ __('Call for Papers Launch') }}</span>
            </div>
        </div>
    </div>
</section>
