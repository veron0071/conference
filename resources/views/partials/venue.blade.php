<section id="venue" class="py-20 lg:py-28 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-[#F4F4F4] text-[#005461] text-xs font-bold uppercase tracking-wider mb-4 border border-[#018790]/30 shadow-sm">
                <i data-lucide="map-pin" class="w-4 h-4 text-[#018790]"></i>
                <span>{{ __('Venue') }}</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ __('Venue & City Information') }}
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600">
                {{ __('Experience world-class scholarly exchange in the vibrant historic city of Semarang, Central Java, Indonesia.') }}
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <!-- Left Info Cards -->
            <div class="lg:col-span-7 space-y-6">
                
                <div class="bg-[#F4F4F4] rounded-2xl p-6 sm:p-8 border border-slate-200">
                    <h3 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2.5">
                        <i data-lucide="building-2" class="w-5 h-5 text-[#005461]"></i>
                        <span>{{ __('Campus 2 Universitas Wahid Hasyim') }}</span>
                    </h3>

                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white border border-slate-200 shadow-sm">
                            <div class="w-10 h-10 rounded-lg bg-[#F4F4F4] text-[#005461] border border-slate-200 flex items-center justify-center flex-shrink-0">
                                <i data-lucide="presentation" class="w-5 h-5 text-[#018790]"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-slate-900">{{ __('Main Conference & Plenary Keynotes') }}</h4>
                                <p class="text-xs text-[#018790] font-semibold mt-0.5">{{ __('Gedung CBT (Computer-Based Test) - Kampus 2 UNWAHAS') }}</p>
                                <p class="text-xs text-slate-600 mt-1">{{ __('Equipped with state-of-the-art auditorium facilities for international hybrid plenary sessions and opening ceremonies.') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white border border-slate-200 shadow-sm">
                            <div class="w-10 h-10 rounded-lg bg-[#F4F4F4] text-[#005461] border border-slate-200 flex items-center justify-center flex-shrink-0">
                                <i data-lucide="git-branch" class="w-5 h-5 text-[#018790]"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-slate-900">{{ __('Parallel Breakout Track Sessions') }}</h4>
                                <p class="text-xs text-[#018790] font-semibold mt-0.5">{{ __('Fakultas Kedokteran - Kampus 2 UNWAHAS') }}</p>
                                <p class="text-xs text-slate-600 mt-1">{{ __('Multiple acoustic parallel rooms accommodating presentation tracks 1 through 6 simultaneously.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-200 flex items-center gap-2 text-xs text-slate-600">
                        <i data-lucide="map" class="w-4 h-4 text-[#005461] flex-shrink-0"></i>
                        <span>{{ __('Kota Semarang, Jawa Tengah, Indonesia') }}</span>
                    </div>
                </div>

                <!-- City Highlights -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
                    <div class="p-4 rounded-xl bg-[#F4F4F4] border border-slate-200">
                        <div class="w-8 h-8 mx-auto rounded-lg bg-white text-[#005461] border border-slate-200 flex items-center justify-center mb-2 shadow-sm">
                            <i data-lucide="plane" class="w-4 h-4 text-[#018790]"></i>
                        </div>
                        <h4 class="text-xs font-bold text-slate-800">{{ __('Airport Access') }}</h4>
                        <p class="text-xs text-slate-600 mt-0.5">{{ __('Jenderal Ahmad Yani International Airport (SRG)') }}</p>
                    </div>

                    <div class="p-4 rounded-xl bg-[#F4F4F4] border border-slate-200">
                        <div class="w-8 h-8 mx-auto rounded-lg bg-white text-[#005461] border border-slate-200 flex items-center justify-center mb-2 shadow-sm">
                            <i data-lucide="train" class="w-4 h-4 text-[#018790]"></i>
                        </div>
                        <h4 class="text-xs font-bold text-slate-800">{{ __('Railway Access') }}</h4>
                        <p class="text-xs text-slate-600 mt-0.5">{{ __('Semarang Tawang & Poncol Stations') }}</p>
                    </div>

                    <div class="p-4 rounded-xl bg-[#F4F4F4] border border-slate-200">
                        <div class="w-8 h-8 mx-auto rounded-lg bg-white text-[#005461] border border-slate-200 flex items-center justify-center mb-2 shadow-sm">
                            <i data-lucide="hotel" class="w-4 h-4 text-[#018790]"></i>
                        </div>
                        <h4 class="text-xs font-bold text-slate-800">{{ __('Hotels & Lodging') }}</h4>
                        <p class="text-xs text-slate-600 mt-0.5">{{ __('Recommended partner 4-star & 5-star hotels nearby') }}</p>
                    </div>
                </div>

            </div>

            <!-- Right Visual / Discover Semarang Card (Solid Flat Design, No Gradients) -->
            <div class="lg:col-span-5">
                <div class="bg-[#005461] rounded-3xl p-8 text-white border border-[#018790] shadow-xl relative overflow-hidden">
                    <div class="w-16 h-16 rounded-2xl bg-[#00B7B5] text-[#005461] flex items-center justify-center mb-6 shadow-md font-black">
                        <i data-lucide="compass" class="w-8 h-8"></i>
                    </div>

                    <h3 class="text-2xl font-extrabold text-white mb-3">
                        {{ __('Discover Semarang') }}
                    </h3>
                    <p class="text-slate-100 text-sm leading-relaxed mb-6 font-normal">
                        {{ __('Semarang is known as a harmonious melting pot of multi-cultural heritage, culinary excellence, and rapid economic modernization. Explore iconic landmarks including Kota Lama (Old Town), Sam Poo Kong, and Lawang Sewu during your conference visit.') }}
                    </p>

                    <div class="space-y-3 border-t border-white/15 pt-5 text-xs text-slate-100 font-medium">
                        <div class="flex items-center gap-2.5">
                            <i data-lucide="clock" class="w-4 h-4 text-[#00B7B5] flex-shrink-0"></i>
                            <span>{{ __('Timezone: Western Indonesia Time (WIB / UTC+7)') }}</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <i data-lucide="sun" class="w-4 h-4 text-[#00B7B5] flex-shrink-0"></i>
                            <span>{{ __('Tropical climate: 26°C - 32°C in August') }}</span>
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="https://maps.google.com/?q=Universitas+Wahid+Hasyim+Kampus+2" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 w-full py-3.5 px-4 rounded-xl bg-[#00B7B5] hover:bg-[#00B7B5]/90 text-[#005461] font-black text-xs shadow-md transition-all">
                            <i data-lucide="navigation" class="w-4 h-4 text-[#005461]"></i>
                            <span>{{ __('Open in Google Maps') }}</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
