<section id="about" class="py-20 lg:py-28 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column: Story & Mission -->
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-emerald-50 text-emerald-800 text-xs font-bold uppercase tracking-wider border border-emerald-200">
                    <i data-lucide="compass" class="w-4 h-4"></i>
                    <span>{{ __('About the Conference') }}</span>
                </div>

                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-snug">
                    {{ __('Navigating Global Economic Shifts with') }} <span class="text-emerald-600">{{ __('Digital Intelligence') }}</span> {{ __('& Sustainable Responsibility') }}
                </h2>

                <p class="text-slate-600 leading-relaxed text-base sm:text-lg">
                    {{ __('The 1st International Conference on Sustainable Economic Transformation (ICSET 2027) is a premier global forum convened by the Faculty of Economics and Business, Universitas Wahid Hasyim (UNWAHAS) in Semarang, Indonesia.') }}
                </p>

                <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                    {{ __('As world economies face intersecting headwinds—accelerated artificial intelligence, climate exigencies, ESG mandates, and socioeconomic disparities—ICSET 2027 serves as an intellectual nexus. We bridge forward-looking scholars, innovative practitioners, and forward-thinking policymakers across six comprehensive tracks spanning sustainable finance, halal economy, business governance, and digital breakthroughs.') }}
                </p>

                <!-- Value Props List -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                        <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <i data-lucide="check-circle" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-800">{{ __('Scopus Indexed Luaran') }}</h4>
                            <p class="text-xs text-slate-500 mt-0.5">{{ __('Collaborating with E3S / IOP / Atlantis Press proceedings.') }}</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                        <div class="w-8 h-8 rounded-lg bg-sky-100 text-sky-700 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <i data-lucide="globe" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-800">{{ __('Global Perspective') }}</h4>
                            <p class="text-xs text-slate-500 mt-0.5">{{ __('Distinguished speakers from Australia, Japan, UAE, Brunei, & Indonesia.') }}</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                        <div class="w-8 h-8 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <i data-lucide="cpu" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-800">{{ __('Digital & Islamic Synergy') }}</h4>
                            <p class="text-xs text-slate-500 mt-0.5">{{ __('Distinctive tracks in Halal Economy, Fintech, AI, & Islamic Social Finance.') }}</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                        <div class="w-8 h-8 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <i data-lucide="book-marked" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-800">{{ __('FEB UNWAHAS Journals') }}</h4>
                            <p class="text-xs text-slate-500 mt-0.5">{{ __('Co-host journal publishing route for peer-reviewed papers.') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Visual Card / Highlights -->
            <div class="lg:col-span-5">
                <div class="relative">
                    <!-- Accent background decor -->
                    <div class="absolute -inset-2 bg-gradient-to-r from-emerald-500 to-sky-500 rounded-3xl blur-xl opacity-20"></div>

                    <div class="relative icset-factsheet-card rounded-3xl p-8 text-white shadow-2xl border border-slate-700/80">
                        <div class="flex items-center justify-between mb-8 pb-4 border-b border-slate-700">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-2xl bg-emerald-500 text-slate-950 flex items-center justify-center font-black text-xl shadow-md shadow-emerald-500/30">
                                    I
                                </div>
                                <div>
                                    <h3 class="font-extrabold text-lg text-white">ICSET 2027</h3>
                                    <p class="text-xs text-emerald-400 font-bold uppercase tracking-wider">{{ __('Conference Factsheet') }}</p>
                                </div>
                            </div>
                            <span class="px-3.5 py-1 rounded-full bg-emerald-500/20 text-emerald-300 text-xs font-bold border border-emerald-500/40">
                                {{ __('August 2027') }}
                            </span>
                        </div>

                        <div class="space-y-4">
                            <div class="flex justify-between items-center py-2.5 border-b border-slate-700/70 text-sm">
                                <span class="text-slate-200 font-semibold">{{ __('Host Institution') }}</span>
                                <span class="font-bold text-white text-right">FEB UNWAHAS</span>
                            </div>
                            <div class="flex justify-between items-center py-2.5 border-b border-slate-700/70 text-sm">
                                <span class="text-slate-200 font-semibold">{{ __('Plenary Venue') }}</span>
                                <span class="font-bold text-white text-right">{{ __('Kampus 2 Gedung CBT') }}</span>
                            </div>
                            <div class="flex justify-between items-center py-2.5 border-b border-slate-700/70 text-sm">
                                <span class="text-slate-200 font-semibold">{{ __('Track Sessions') }}</span>
                                <span class="font-bold text-white text-right">{{ __('Fakultas Kedokteran') }}</span>
                            </div>
                            <div class="flex justify-between items-center py-2.5 border-b border-slate-700/70 text-sm">
                                <span class="text-slate-200 font-semibold">{{ __('CFP Launch Date') }}</span>
                                <span class="font-bold text-emerald-300 text-right">{{ __('01 December 2026') }}</span>
                            </div>
                            <div class="flex justify-between items-center py-2.5 border-b border-slate-700/70 text-sm">
                                <span class="text-slate-200 font-semibold">{{ __('Submission System') }}</span>
                                <span class="font-bold text-white text-right">OJS UNWAHAS Portal</span>
                            </div>
                            <div class="flex justify-between items-center py-2.5 text-sm">
                                <span class="text-slate-200 font-semibold">{{ __('Language') }}</span>
                                <span class="font-bold text-white text-right">{{ __('English') }}</span>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-slate-700">
                            <a href="#cfp" class="block w-full py-3.5 px-4 rounded-xl text-center text-sm font-extrabold text-slate-950 bg-emerald-400 hover:bg-emerald-300 transition-all shadow-lg hover:shadow-emerald-400/20">
                                {{ __('Prepare Your Manuscript') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
