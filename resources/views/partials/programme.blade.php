<section id="programme" class="py-20 lg:py-28 bg-white relative border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-14">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-[#FFF9F2] text-[#800020] text-xs font-bold uppercase tracking-wider mb-4 border border-[#5C0017]/30 shadow-sm">
                <i data-lucide="clock" class="w-4 h-4 text-[#5C0017]"></i>
                <span>{{ __('Conference Programme') }}</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ __('Curated 2-Day Hybrid Agenda') }}
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600">
                {{ __('Comprehensive schedule spanning high-impact keynote addresses, parallel breakout track presentations, and cultural networking.') }}
            </p>

            <!-- Day 1 & Day 2 Interactive Switcher -->
            <div class="mt-8 inline-flex p-1.5 bg-[#FFF9F2] rounded-2xl border border-slate-200">
                <button type="button" id="tab-btn-day1" onclick="switchDayTab(1)"
                    class="px-6 py-3 rounded-xl text-xs sm:text-sm font-extrabold transition-all duration-200 flex items-center gap-2 shadow-sm bg-white text-[#800020] border border-slate-200/80">
                    <span class="w-2.5 h-2.5 rounded-full bg-[#D45060]"></span>
                    <span>{{ __('Day 1: Tuesday, 03 August 2027') }}</span>
                    <span class="text-[11px] font-bold px-2 py-0.5 rounded-md bg-[#FFF9F2] text-[#800020] hidden sm:inline">{{ __('Plenary Hall') }}</span>
                </button>
                <button type="button" id="tab-btn-day2" onclick="switchDayTab(2)"
                    class="px-6 py-3 rounded-xl text-xs sm:text-sm font-extrabold transition-all duration-200 flex items-center gap-2 text-slate-600 hover:text-[#800020]">
                    <span class="w-2.5 h-2.5 rounded-full bg-slate-400"></span>
                    <span>{{ __('Day 2: Wednesday, 04 August 2027') }}</span>
                    <span class="text-[11px] font-bold px-2 py-0.5 rounded-md bg-slate-200 text-slate-700 hidden sm:inline">{{ __('Breakout Tracks') }}</span>
                </button>
            </div>
        </div>

        <!-- DAY 1 SCHEDULE (Plenary Hall - Gedung CBT UNWAHAS) -->
        <div id="programme-day1" class="max-w-4xl mx-auto space-y-4">
            @forelse($programmeDay1 as $item)
                @php
                    $isKeynote = str_contains(strtolower($item->badge), 'keynote');
                    $isOpening = str_contains(strtolower($item->badge), 'opening') || str_contains(strtolower($item->badge), 'gala');
                    $isLunch = str_contains(strtolower($item->badge), 'lunch') || str_contains(strtolower($item->badge), 'break');
                @endphp

                <div class="p-6 rounded-2xl border flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 transition-all duration-200 hover:shadow-md
                    @if($isKeynote)
                        bg-[#800020] text-white border-[#5C0017] shadow-md
                    @elseif($isOpening)
                        bg-white border-[#5C0017]/40 text-slate-900 shadow-sm
                    @elseif($isLunch)
                        bg-[#FFF9F2] border-slate-200 text-slate-900
                    @else
                        bg-[#FFF9F2] border-slate-200 text-slate-900
                    @endif">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center font-mono font-extrabold text-xs flex-shrink-0 shadow-sm
                            @if($isKeynote)
                                bg-[#D45060] text-white font-black
                            @elseif($isOpening)
                                bg-[#800020] text-white
                            @elseif($isLunch)
                                bg-slate-200 text-slate-700
                            @else
                                bg-white text-[#800020] border border-slate-200
                            @endif">
                            {{ $item->time_start }}
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full uppercase
                                    @if($isKeynote)
                                        bg-[#5C0017] text-[#D45060] border border-[#D45060]/40
                                    @elseif($isOpening)
                                        bg-[#FFF9F2] text-[#800020] border border-[#5C0017]/30
                                    @elseif($isLunch)
                                        bg-slate-200 text-slate-700
                                    @else
                                        bg-slate-200 text-slate-700
                                    @endif">
                                    {{ __($item->badge) }}
                                </span>
                                <span class="text-xs font-semibold @if($isKeynote) text-slate-300 @else text-slate-500 @endif">
                                    {{ $item->time_label }}
                                </span>
                            </div>
                            <h4 class="text-base font-extrabold @if($isKeynote) text-white @else text-slate-900 @endif">
                                {{ __($item->title) }}
                            </h4>
                            @if($item->description)
                            <p class="text-xs sm:text-sm mt-1 leading-relaxed @if($isKeynote) text-slate-200 @else text-slate-600 @endif">
                                {{ __($item->description) }}
                            </p>
                            @endif
                        </div>
                    </div>
                    @if($item->location)
                    <span class="px-3 py-1 rounded-lg text-xs font-bold self-end sm:self-center flex-shrink-0
                        @if($isKeynote)
                            bg-[#5C0017] text-[#D45060] border border-white/10
                        @else
                            bg-white text-slate-700 border border-slate-200
                        @endif">
                        {{ __($item->location) }}
                    </span>
                    @endif
                </div>
            @empty
                <div class="p-8 text-center bg-[#FFF9F2] rounded-2xl border border-slate-200 text-slate-500">
                    {{ __('No sessions scheduled yet for Day 1.') }}
                </div>
            @endforelse
        </div>

        <!-- DAY 2 SCHEDULE (Breakout Tracks - Fakultas Kedokteran UNWAHAS) -->
        <div id="programme-day2" class="max-w-4xl mx-auto space-y-4 hidden">
            @forelse($programmeDay2 as $item)
                @php
                    $isKeynote = str_contains(strtolower($item->badge), 'keynote');
                    $isParallel = str_contains(strtolower($item->badge), 'parallel');
                    $isLunch = str_contains(strtolower($item->badge), 'lunch') || str_contains(strtolower($item->badge), 'break');
                @endphp

                <div class="p-6 rounded-2xl border flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 transition-all duration-200 hover:shadow-md
                    @if($isKeynote)
                        bg-[#800020] text-white border-[#5C0017] shadow-md
                    @elseif($isParallel)
                        bg-white border-[#5C0017]/40 text-slate-900 shadow-sm
                    @elseif($isLunch)
                        bg-[#FFF9F2] border-slate-200 text-slate-900
                    @else
                        bg-[#FFF9F2] border-slate-200 text-slate-900
                    @endif">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center font-mono font-extrabold text-xs flex-shrink-0 shadow-sm
                            @if($isKeynote)
                                bg-[#D45060] text-white font-black
                            @elseif($isParallel)
                                bg-[#800020] text-white
                            @elseif($isLunch)
                                bg-slate-200 text-slate-700
                            @else
                                bg-white text-[#800020] border border-slate-200
                            @endif">
                            {{ $item->time_start }}
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full uppercase
                                    @if($isKeynote)
                                        bg-[#5C0017] text-[#D45060] border border-[#D45060]/40
                                    @elseif($isParallel)
                                        bg-[#FFF9F2] text-[#800020] border border-[#5C0017]/30
                                    @elseif($isLunch)
                                        bg-slate-200 text-slate-700
                                    @else
                                        bg-slate-200 text-slate-700
                                    @endif">
                                    {{ __($item->badge) }}
                                </span>
                                <span class="text-xs font-semibold @if($isKeynote) text-slate-300 @else text-slate-500 @endif">
                                    {{ $item->time_label }}
                                </span>
                            </div>
                            <h4 class="text-base font-extrabold @if($isKeynote) text-white @else text-slate-900 @endif">
                                {{ __($item->title) }}
                            </h4>
                            @if($item->description)
                            <p class="text-xs sm:text-sm mt-1 leading-relaxed @if($isKeynote) text-slate-200 @else text-slate-600 @endif">
                                {{ __($item->description) }}
                            </p>
                            @endif
                        </div>
                    </div>
                    @if($item->location)
                    <span class="px-3 py-1 rounded-lg text-xs font-bold self-end sm:self-center flex-shrink-0
                        @if($isKeynote)
                            bg-[#5C0017] text-[#D45060] border border-white/10
                        @else
                            bg-white text-slate-700 border border-slate-200
                        @endif">
                        {{ __($item->location) }}
                    </span>
                    @endif
                </div>
            @empty
                <div class="p-8 text-center bg-[#FFF9F2] rounded-2xl border border-slate-200 text-slate-500">
                    {{ __('No sessions scheduled yet for Day 2.') }}
                </div>
            @endforelse
        </div>

        <!-- Venue Summary Banner -->
        <div class="mt-12 p-6 rounded-2xl bg-[#FFF9F2] border border-slate-200 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-white text-[#800020] border border-slate-200 flex items-center justify-center flex-shrink-0 shadow-sm">
                    <i data-lucide="map-pin" class="w-5 h-5 text-[#5C0017]"></i>
                </div>
                <div>
                    <h4 class="text-sm font-extrabold text-slate-900">{{ __('Conference Venues') }}</h4>
                    <p class="text-xs text-slate-600 mt-0.5">{{ __('Day 1: Gedung CBT Kampus 2 UNWAHAS | Day 2: Gedung Fakultas Kedokteran UNWAHAS') }}</p>
                </div>
            </div>
            <a href="#venue" class="px-4 py-2 rounded-xl text-xs font-bold text-[#800020] bg-white border border-slate-200 hover:border-[#5C0017] hover:text-[#5C0017] transition-colors shadow-sm flex items-center gap-1.5 flex-shrink-0">
                <span>{{ __('View Venue Details') }}</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
        </div>

    </div>
</section>

<script>
function switchDayTab(day) {
    const day1Div = document.getElementById('programme-day1');
    const day2Div = document.getElementById('programme-day2');
    const btn1 = document.getElementById('tab-btn-day1');
    const btn2 = document.getElementById('tab-btn-day2');

    if (day === 1) {
        day1Div.classList.remove('hidden');
        day2Div.classList.add('hidden');
        btn1.className = "px-6 py-3 rounded-xl text-xs sm:text-sm font-extrabold transition-all duration-200 flex items-center gap-2 shadow-sm bg-white text-[#800020] border border-slate-200/80";
        btn2.className = "px-6 py-3 rounded-xl text-xs sm:text-sm font-extrabold transition-all duration-200 flex items-center gap-2 text-slate-600 hover:text-[#800020]";
    } else {
        day1Div.classList.add('hidden');
        day2Div.classList.remove('hidden');
        btn2.className = "px-6 py-3 rounded-xl text-xs sm:text-sm font-extrabold transition-all duration-200 flex items-center gap-2 shadow-sm bg-white text-[#800020] border border-slate-200/80";
        btn1.className = "px-6 py-3 rounded-xl text-xs sm:text-sm font-extrabold transition-all duration-200 flex items-center gap-2 text-slate-600 hover:text-[#800020]";
    }
}
</script>
