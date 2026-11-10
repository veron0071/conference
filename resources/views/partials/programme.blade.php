<section id="programme" class="py-20 lg:py-28 bg-white relative border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-14">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-emerald-100 text-emerald-800 text-xs font-bold uppercase tracking-wider mb-4 border border-emerald-200">
                <i data-lucide="clock" class="w-4 h-4"></i>
                <span>{{ __('Conference Programme') }}</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ __('Curated 2-Day Hybrid Agenda') }}
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600">
                {{ __('Comprehensive schedule spanning high-impact keynote addresses, parallel breakout track presentations, and cultural networking.') }}
            </p>

            <!-- Day 1 & Day 2 Interactive Switcher -->
            <div class="mt-8 inline-flex p-1.5 bg-slate-100 rounded-2xl border border-slate-200 shadow-inner">
                <button type="button" id="tab-btn-day1" onclick="switchDayTab(1)"
                    class="px-6 py-3 rounded-xl text-xs sm:text-sm font-extrabold transition-all duration-200 flex items-center gap-2 shadow-sm bg-white text-emerald-800 border border-slate-200/80">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                    <span>{{ __('Day 1: Tuesday, 03 August 2027') }}</span>
                    <span class="text-[11px] font-bold px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-700 hidden sm:inline">{{ __('Plenary Hall') }}</span>
                </button>
                <button type="button" id="tab-btn-day2" onclick="switchDayTab(2)"
                    class="px-6 py-3 rounded-xl text-xs sm:text-sm font-extrabold transition-all duration-200 flex items-center gap-2 text-slate-600 hover:text-slate-900">
                    <span class="w-2.5 h-2.5 rounded-full bg-slate-400"></span>
                    <span>{{ __('Day 2: Wednesday, 04 August 2027') }}</span>
                    <span class="text-[11px] font-bold px-2 py-0.5 rounded-md bg-slate-200 text-slate-700 hidden sm:inline">{{ __('Breakout Tracks') }}</span>
                </button>
            </div>
        </div>

        <!-- DAY 1 SCHEDULE (Gedung CBT UNWAHAS) -->
        <div id="programme-day1" class="max-w-4xl mx-auto space-y-4">
            
            <!-- Item 1: Registration -->
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 hover:shadow-md transition-shadow">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-mono font-extrabold text-xs flex-shrink-0">
                        08:00
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-slate-200 text-slate-700 uppercase">{{ __('Onsite Check-in') }}</span>
                            <span class="text-xs text-slate-500 font-semibold">08:00 – 08:45 WIB</span>
                        </div>
                        <h4 class="text-base font-extrabold text-slate-900">{{ __('Delegate Registration, Kit Collection & Morning Coffee') }}</h4>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1">{{ __('Registration desk check-in, distribution of physical conference kits, ID badges, and welcoming morning coffee at CBT Grand Foyer.') }}</p>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-white text-slate-700 border border-slate-200 self-end sm:self-center flex-shrink-0">
                    {{ __('CBT Main Foyer') }}
                </span>
            </div>

            <!-- Item 2: Opening Ceremony -->
            <div class="p-6 rounded-2xl bg-emerald-50/50 border border-emerald-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 hover:shadow-md transition-shadow">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-600 text-white flex items-center justify-center font-mono font-extrabold text-xs flex-shrink-0 shadow-sm">
                        08:45
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-emerald-100 text-emerald-800 uppercase">{{ __('Opening Ceremony') }}</span>
                            <span class="text-xs text-emerald-700 font-semibold">08:45 – 09:30 WIB</span>
                        </div>
                        <h4 class="text-base font-extrabold text-slate-900">{{ __('Grand Opening & Official Welcome Addresses') }}</h4>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1">{{ __('Indonesian National Anthem, traditional welcoming dance, remarks by General Chair, Dean of FEB UNWAHAS, and official opening by Rector of Universitas Wahid Hasyim.') }}</p>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-white text-emerald-800 border border-emerald-300 self-end sm:self-center flex-shrink-0">
                    {{ __('Main Plenary Stage') }}
                </span>
            </div>

            <!-- Item 3: Keynote Address -->
            <div class="p-6 rounded-2xl bg-slate-900 text-white border border-slate-800 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 shadow-lg hover:shadow-xl transition-shadow">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-amber-400 text-slate-950 flex items-center justify-center font-mono font-black text-xs flex-shrink-0 shadow-md">
                        09:30
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-amber-400/20 text-amber-300 uppercase border border-amber-400/30">{{ __('National Keynote') }}</span>
                            <span class="text-xs text-slate-400 font-semibold">09:30 – 10:30 WIB</span>
                        </div>
                        <h4 class="text-base font-extrabold text-white">{{ __('National Keynote Address: Digital Intelligence & Sustainable Economic Transition') }}</h4>
                        <p class="text-xs sm:text-sm text-slate-300 mt-1">{{ __('Presented by Ministry of Higher Education, Science, and Technology / BRIN Leadership on accelerating Indonesia’s sustainable economic leap towards Golden Indonesia 2045.') }}</p>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-slate-800 text-emerald-300 border border-slate-700 self-end sm:self-center flex-shrink-0">
                    {{ __('Plenary Auditorium') }}
                </span>
            </div>

            <!-- Item 4: International Plenary Panel -->
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 hover:shadow-md transition-shadow">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-sky-100 text-sky-800 flex items-center justify-center font-mono font-extrabold text-xs flex-shrink-0">
                        10:30
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-sky-100 text-sky-800 uppercase">{{ __('Global Plenary Panel') }}</span>
                            <span class="text-xs text-sky-700 font-semibold">10:30 – 12:15 WIB</span>
                        </div>
                        <h4 class="text-base font-extrabold text-slate-900">{{ __('Distinguished International Speaker Panel & Interactive Q&A') }}</h4>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1">{{ __('Presentations by invited professors from Effat University (UAE), RMIT University (Australia), Universiti Brunei Darussalam, and Nagasaki University (Japan). Moderated discussion with audience questions.') }}</p>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-white text-slate-700 border border-slate-200 self-end sm:self-center flex-shrink-0">
                    {{ __('Main Plenary Stage') }}
                </span>
            </div>

            <!-- Item 5: Lunch & Networking -->
            <div class="p-5 rounded-2xl bg-amber-50/60 border border-amber-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center font-mono font-bold text-xs flex-shrink-0">
                        12:15
                    </div>
                    <div>
                        <span class="text-xs text-amber-700 font-bold block mb-0.5">12:15 – 13:30 WIB</span>
                        <h4 class="text-sm sm:text-base font-bold text-slate-900">{{ __('Networking Luncheon & Midday Prayer Break') }}</h4>
                        <p class="text-xs text-slate-600">{{ __('Buffet lunch with traditional Javanese and halal culinary specialties, researcher networking, and prayer facilities.') }}</p>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-white text-amber-800 border border-amber-300 self-end sm:self-center flex-shrink-0">
                    {{ __('Banquet Hall') }}
                </span>
            </div>

            <!-- Item 6: Roundtable -->
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 hover:shadow-md transition-shadow">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-indigo-100 text-indigo-800 flex items-center justify-center font-mono font-extrabold text-xs flex-shrink-0">
                        13:30
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-indigo-100 text-indigo-800 uppercase">{{ __('Special Forum') }}</span>
                            <span class="text-xs text-indigo-700 font-semibold">13:30 – 15:30 WIB</span>
                        </div>
                        <h4 class="text-base font-extrabold text-slate-900">{{ __('Executive Roundtable: AI & Sustainable Governance in Emerging Markets') }}</h4>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1">{{ __('Cross-sector dialogue bringing together university leaders, banking practitioners (BSI / Bank Jateng Syariah), and policy analysts.') }}</p>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-white text-slate-700 border border-slate-200 self-end sm:self-center flex-shrink-0">
                    {{ __('Auditorium') }}
                </span>
            </div>

            <!-- Item 7: Gala Dinner -->
            <div class="p-6 rounded-2xl bg-emerald-950 text-white border border-emerald-800/80 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 shadow-lg hover:shadow-xl transition-shadow">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-400 text-slate-950 flex items-center justify-center font-mono font-black text-xs flex-shrink-0 shadow-md">
                        19:00
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-emerald-400/20 text-emerald-300 uppercase border border-emerald-400/30">{{ __('Evening Gala') }}</span>
                            <span class="text-xs text-slate-400 font-semibold">19:00 – 21:00 WIB</span>
                        </div>
                        <h4 class="text-base font-extrabold text-white">{{ __('Conference Banquet & Gala Dinner') }}</h4>
                        <p class="text-xs sm:text-sm text-slate-300 mt-1">{{ __('Official conference dinner for keynote speakers, registered presenters, and invited university dignitaries featuring classical Semarang cultural performances.') }}</p>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-emerald-900 text-emerald-200 border border-emerald-700 self-end sm:self-center flex-shrink-0">
                    {{ __('Grand Ballroom') }}
                </span>
            </div>

        </div>

        <!-- DAY 2 SCHEDULE (Fakultas Kedokteran UNWAHAS) -->
        <div id="programme-day2" class="max-w-4xl mx-auto space-y-4 hidden">
            
            <!-- Item 1: Morning Briefing -->
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 hover:shadow-md transition-shadow">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-mono font-extrabold text-xs flex-shrink-0">
                        08:30
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-slate-200 text-slate-700 uppercase">{{ __('Coordination') }}</span>
                            <span class="text-xs text-slate-500 font-semibold">08:30 – 09:00 WIB</span>
                        </div>
                        <h4 class="text-base font-extrabold text-slate-900">{{ __('Presenter Sign-in & Session Chair Briefing') }}</h4>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1">{{ __('Presenters upload digital slide decks to designated track breakout rooms at the Faculty of Medicine building.') }}</p>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-white text-slate-700 border border-slate-200 self-end sm:self-center flex-shrink-0">
                    {{ __('FK Building') }}
                </span>
            </div>

            <!-- Item 2: Parallel Sessions Part 1 -->
            <div class="p-6 rounded-2xl bg-emerald-50/50 border border-emerald-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 hover:shadow-md transition-shadow">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-600 text-white flex items-center justify-center font-mono font-extrabold text-xs flex-shrink-0 shadow-sm">
                        09:00
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-emerald-100 text-emerald-800 uppercase">{{ __('Parallel Tracks') }}</span>
                            <span class="text-xs text-emerald-700 font-semibold">09:00 – 12:00 WIB</span>
                        </div>
                        <h4 class="text-base font-extrabold text-slate-900">{{ __('Parallel Breakout Paper Presentations (Sessions 1 to 6)') }}</h4>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1">{{ __('6 Concurrent rooms: Room A (Sustainable Economics), Room B (Responsible Management), Room C (ESG Accounting), Room D (Halal Economy), Room E (Digital AI/FinTech), and Room F (Inclusive Development).') }}</p>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-white text-emerald-800 border border-emerald-300 self-end sm:self-center flex-shrink-0">
                    {{ __('6 Breakout Rooms') }}
                </span>
            </div>

            <!-- Item 3: Lunch -->
            <div class="p-5 rounded-2xl bg-amber-50/60 border border-amber-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center font-mono font-bold text-xs flex-shrink-0">
                        12:00
                    </div>
                    <div>
                        <span class="text-xs text-amber-700 font-bold block mb-0.5">12:00 – 13:15 WIB</span>
                        <h4 class="text-sm sm:text-base font-bold text-slate-900">{{ __('Presenter Lunch & Author Networking') }}</h4>
                        <p class="text-xs text-slate-600">{{ __('Informal networking opportunity with co-authors, peer reviewers, and track session chairs.') }}</p>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-white text-amber-800 border border-amber-300 self-end sm:self-center flex-shrink-0">
                    {{ __('Dining Foyer') }}
                </span>
            </div>

            <!-- Item 4: Hybrid Virtual Presentations -->
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 hover:shadow-md transition-shadow">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-sky-100 text-sky-800 flex items-center justify-center font-mono font-extrabold text-xs flex-shrink-0">
                        13:15
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-sky-100 text-sky-800 uppercase">{{ __('Hybrid Sessions') }}</span>
                            <span class="text-xs text-sky-700 font-semibold">13:15 – 15:30 WIB</span>
                        </div>
                        <h4 class="text-base font-extrabold text-slate-900">{{ __('Online Hybrid Presentations & Scientific Q&A') }}</h4>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1">{{ __('Live streamed oral presentations from international virtual authors connecting across time zones via high-definition hybrid conferencing.') }}</p>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-white text-slate-700 border border-slate-200 self-end sm:self-center flex-shrink-0">
                    {{ __('Zoom Hybrid Hub') }}
                </span>
            </div>

            <!-- Item 5: Best Paper Awards & Closing -->
            <div class="p-6 rounded-2xl bg-slate-900 text-white border border-slate-800 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 shadow-lg hover:shadow-xl transition-shadow">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-amber-400 text-slate-950 flex items-center justify-center font-mono font-black text-xs flex-shrink-0 shadow-md">
                        15:30
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-amber-400/20 text-amber-300 uppercase border border-amber-400/30">{{ __('Awards & Closing') }}</span>
                            <span class="text-xs text-slate-400 font-semibold">15:30 – 16:30 WIB</span>
                        </div>
                        <h4 class="text-base font-extrabold text-white">{{ __('Best Paper & Best Presenter Awards Ceremony & Official Closing') }}</h4>
                        <p class="text-xs sm:text-sm text-slate-300 mt-1">{{ __('Scientific committee announcement of 6 Best Paper Award winners, presentation of certificates, and official closing statement by Dean of FEB UNWAHAS.') }}</p>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-slate-800 text-amber-300 border border-slate-700 self-end sm:self-center flex-shrink-0">
                    {{ __('Main Auditorium') }}
                </span>
            </div>

            <!-- Item 6: Cultural Tour -->
            <div class="p-6 rounded-2xl bg-emerald-50/70 border border-emerald-300/80 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 hover:shadow-md transition-shadow">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-600 text-white flex items-center justify-center font-mono font-extrabold text-xs flex-shrink-0 shadow-sm">
                        16:30
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-emerald-200 text-emerald-900 uppercase">{{ __('Cultural Tour') }}</span>
                            <span class="text-xs text-emerald-800 font-semibold">16:30 – 19:00 WIB</span>
                        </div>
                        <h4 class="text-base font-extrabold text-slate-900">{{ __('Semarang Heritage Excursion (Kota Lama & Sam Poo Kong)') }}</h4>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1">{{ __('Guided bus tour visiting Semarang’s Dutch colonial Old Town (Kota Lama), historic Lawang Sewu, and the iconic Sam Poo Kong temple complex.') }}</p>
                    </div>
                </div>
                <span class="px-3 py-1 rounded-lg text-xs font-bold bg-white text-emerald-800 border border-emerald-300 self-end sm:self-center flex-shrink-0">
                    {{ __('Bus Excursion') }}
                </span>
            </div>

        </div>

    </div>
</section>

<script>
    function switchDayTab(day) {
        const d1 = document.getElementById('programme-day1');
        const d2 = document.getElementById('programme-day2');
        const btn1 = document.getElementById('tab-btn-day1');
        const btn2 = document.getElementById('tab-btn-day2');

        if (day === 1) {
            d1.classList.remove('hidden');
            d2.classList.add('hidden');
            btn1.className = 'px-6 py-3 rounded-xl text-xs sm:text-sm font-extrabold transition-all duration-200 flex items-center gap-2 shadow-sm bg-white text-emerald-800 border border-slate-200/80';
            btn2.className = 'px-6 py-3 rounded-xl text-xs sm:text-sm font-extrabold transition-all duration-200 flex items-center gap-2 text-slate-600 hover:text-slate-900';
            btn1.querySelector('span:first-child').className = 'w-2.5 h-2.5 rounded-full bg-emerald-500';
            btn2.querySelector('span:first-child').className = 'w-2.5 h-2.5 rounded-full bg-slate-400';
        } else {
            d1.classList.add('hidden');
            d2.classList.remove('hidden');
            btn2.className = 'px-6 py-3 rounded-xl text-xs sm:text-sm font-extrabold transition-all duration-200 flex items-center gap-2 shadow-sm bg-white text-emerald-800 border border-slate-200/80';
            btn1.className = 'px-6 py-3 rounded-xl text-xs sm:text-sm font-extrabold transition-all duration-200 flex items-center gap-2 text-slate-600 hover:text-slate-900';
            btn2.querySelector('span:first-child').className = 'w-2.5 h-2.5 rounded-full bg-emerald-500';
            btn1.querySelector('span:first-child').className = 'w-2.5 h-2.5 rounded-full bg-slate-400';
        }
    }
</script>
