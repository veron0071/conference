<section id="about" class="py-20 lg:py-28 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column: Story & Mission -->
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-[#FFF9F2] text-[#800020] text-xs font-bold uppercase tracking-wider border border-[#5C0017]/30">
                    <i data-lucide="compass" class="w-4 h-4 text-[#5C0017]"></i>
                    <span>{{ __('About the Conference') }}</span>
                </div>

                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-snug">
                    {{ __('Navigating Global Economic Shifts with') }} <span class="text-[#5C0017]">{{ __('Digital Intelligence') }}</span> {{ __('& Sustainable Responsibility') }}
                </h2>

                <p class="text-slate-600 leading-relaxed text-base sm:text-lg">
                    {{ __('The 1st International Conference on Sustainable Economic Transformation (ICSET 2027) is a premier global forum convened by the Faculty of Economics and Business, Universitas Wahid Hasyim (UNWAHAS) in Semarang, Indonesia.') }}
                </p>

                <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                    {{ __('As world economies face intersecting headwinds—accelerated artificial intelligence, climate exigencies, ESG mandates, and socioeconomic disparities—ICSET 2027 serves as an intellectual nexus. We bridge forward-looking scholars, innovative practitioners, and forward-thinking policymakers across six comprehensive tracks spanning sustainable finance, halal economy, business governance, and digital breakthroughs.') }}
                </p>

                <!-- Value Props List -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div class="flex items-start gap-3 p-3.5 rounded-xl bg-[#FFF9F2] border border-slate-200">
                        <div class="w-8 h-8 rounded-lg bg-white text-[#800020] flex items-center justify-center flex-shrink-0 mt-0.5 shadow-sm border border-slate-200">
                            <i data-lucide="check-circle" class="w-4 h-4 text-[#5C0017]"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900">{{ __('Scopus Indexed Luaran') }}</h4>
                            <p class="text-xs text-slate-500 mt-0.5">{{ __('Collaborating with E3S / IOP / Atlantis Press proceedings.') }}</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 p-3.5 rounded-xl bg-[#FFF9F2] border border-slate-200">
                        <div class="w-8 h-8 rounded-lg bg-white text-[#800020] flex items-center justify-center flex-shrink-0 mt-0.5 shadow-sm border border-slate-200">
                            <i data-lucide="globe" class="w-4 h-4 text-[#5C0017]"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900">{{ __('Global Perspective') }}</h4>
                            <p class="text-xs text-slate-500 mt-0.5">{{ __('Distinguished speakers from Australia, Japan, UAE, Brunei, & Indonesia.') }}</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 p-3.5 rounded-xl bg-[#FFF9F2] border border-slate-200">
                        <div class="w-8 h-8 rounded-lg bg-white text-[#800020] flex items-center justify-center flex-shrink-0 mt-0.5 shadow-sm border border-slate-200">
                            <i data-lucide="cpu" class="w-4 h-4 text-[#5C0017]"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900">{{ __('Digital & Islamic Synergy') }}</h4>
                            <p class="text-xs text-slate-500 mt-0.5">{{ __('Distinctive tracks in Halal Economy, Fintech, AI, & Islamic Social Finance.') }}</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 p-3.5 rounded-xl bg-[#FFF9F2] border border-slate-200">
                        <div class="w-8 h-8 rounded-lg bg-white text-[#800020] flex items-center justify-center flex-shrink-0 mt-0.5 shadow-sm border border-slate-200">
                            <i data-lucide="book-marked" class="w-4 h-4 text-[#5C0017]"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900">{{ __('FEB UNWAHAS Journals') }}</h4>
                            <p class="text-xs text-slate-500 mt-0.5">{{ __('Co-host journal publishing route for peer-reviewed papers.') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Host Faculty & Institutional Patron Endorsement (Solid Flat Design) -->
            <div class="lg:col-span-5">
                <div class="relative bg-[#800020] rounded-3xl p-8 text-white shadow-xl border border-[#5C0017] space-y-6">
                    
                    <!-- Header -->
                    <div class="flex items-center justify-between pb-4 border-b border-white/15">
                        <div class="flex items-center gap-3">
                            <div class="h-12 bg-white px-2.5 py-1.5 rounded-2xl flex items-center justify-center shadow-md">
                                <img src="{{ asset('images/logo-feb-unwahas.png') }}" alt="Logo FEB UNWAHAS" class="h-9 w-auto object-contain">
                            </div>
                            <div>
                                <h3 class="font-extrabold text-base text-white">FEB UNWAHAS</h3>
                                <p class="text-xs text-[#D45060] font-bold uppercase tracking-wider">{{ __('Host Institution') }}</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 rounded-full bg-[#5C0017]/50 text-[#D45060] text-xs font-black border border-[#D45060]/40 shadow-sm">
                            Semarang
                        </span>
                    </div>

                    <!-- Patron / Dean Endorsement Message -->
                    <div class="p-4 rounded-2xl bg-[#5C0017] border border-white/10 space-y-2">
                        <span class="text-[11px] font-bold text-[#D45060] uppercase tracking-wider block">Dean's Welcoming Remark</span>
                        <blockquote class="text-xs sm:text-sm text-slate-200 italic leading-relaxed">
                            “{{ __('ICSET 2027 is convened to provide an intellectual bridge between cutting-edge digital intelligence, green finance, and responsible business governance to accelerate resilient economic growth.') }}”
                        </blockquote>
                        <div class="pt-2 text-right">
                            <span class="text-xs font-extrabold text-white block">Prof. Dr. H. Hasan</span>
                            <span class="text-[10px] text-slate-300 font-medium">Dekan Fakultas Ekonomi dan Bisnis UNWAHAS</span>
                        </div>
                    </div>

                    <!-- Faculty Highlights / Credentials -->
                    <div class="space-y-3 text-xs">
                        <div class="flex items-center justify-between py-2 border-b border-white/10 text-slate-200">
                            <span class="font-medium">{{ __('Academic Programs') }}</span>
                            <span class="font-bold text-white">S1 Manajemen, S1 Ekonomi Islam, S2 MM</span>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-white/10 text-slate-200">
                            <span class="font-medium">{{ __('Research Center') }}</span>
                            <span class="font-bold text-white">Lab Riset & Inkubasi Bisnis FEB</span>
                        </div>
                        <div class="flex items-center justify-between py-2 text-slate-200">
                            <span class="font-medium">{{ __('OJS Portal') }}</span>
                            <span class="font-bold text-[#D45060]">ejournal.unwahas.ac.id</span>
                        </div>
                    </div>

                    <div class="pt-2 border-t border-white/15">
                        <a href="#speakers" class="block w-full py-3.5 px-4 rounded-xl text-center text-xs font-black text-white bg-[#D45060] hover:bg-[#D45060]/90 transition-all shadow-md">
                            {{ __('Meet Our Keynote Speakers') }}
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
