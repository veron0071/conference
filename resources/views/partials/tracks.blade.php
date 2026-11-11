<section id="tracks" class="py-20 lg:py-28 bg-[#F4F4F4] relative border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-white text-[#005461] text-xs font-bold uppercase tracking-wider mb-4 border border-[#018790]/30 shadow-sm">
                <i data-lucide="layers" class="w-4 h-4 text-[#018790]"></i>
                <span>{{ __('Conference Tracks & Scope') }}</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ __('6 Interdisciplinary Tracks for Scholarly Contribution') }}
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600">
                {{ __('Authors are warmly invited to submit empirical, theoretical, and methodological papers aligning with our six curated tracks.') }}
            </p>
        </div>

        <!-- 6 Track Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($tracks as $track)
            <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-200 flex flex-col justify-between group hover:-translate-y-1">
                <div>
                    <!-- Track Header -->
                    <div class="flex items-center justify-between mb-5">
                        <span class="text-xs font-mono font-extrabold px-3 py-1 rounded-full bg-[#F4F4F4] text-[#005461] tracking-wider border border-slate-200">
                            {{ $track->code }}
                        </span>
                        <div class="w-10 h-10 rounded-xl bg-[#F4F4F4] text-[#005461] border border-slate-200 flex items-center justify-center group-hover:bg-[#005461] group-hover:text-white transition-colors duration-300">
                            @if($track->icon == 'trending-up')
                                <i data-lucide="trending-up" class="w-5 h-5"></i>
                            @elseif($track->icon == 'briefcase')
                                <i data-lucide="briefcase" class="w-5 h-5"></i>
                            @elseif($track->icon == 'calculator')
                                <i data-lucide="calculator" class="w-5 h-5"></i>
                            @elseif($track->icon == 'landmark')
                                <i data-lucide="landmark" class="w-5 h-5"></i>
                            @elseif($track->icon == 'cpu')
                                <i data-lucide="cpu" class="w-5 h-5"></i>
                            @else
                                <i data-lucide="globe" class="w-5 h-5"></i>
                            @endif
                        </div>
                    </div>

                    <!-- Track Title -->
                    <h3 class="text-xl font-bold text-slate-900 mb-4 leading-snug group-hover:text-[#005461] transition-colors">
                        {{ __($track->title) }}
                    </h3>

                    <!-- Subtopics List -->
                    <div class="border-t border-slate-100 pt-4 mt-2">
                        <span class="text-xs font-semibold uppercase tracking-wider text-slate-400 block mb-3">{{ __('Topic Scope:') }}</span>
                        <ul class="space-y-2">
                            @foreach($track->topics as $topic)
                            <li class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-600">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#018790] mt-1.5 flex-shrink-0"></span>
                                <span>{{ __($topic->name) }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Footer button in card -->
                <div class="mt-6 pt-5 border-t border-slate-100">
                    <a href="{{ route('registration.index', ['track' => $track->id]) }}" class="inline-flex items-center justify-between w-full px-4 py-2.5 rounded-xl bg-[#F4F4F4] hover:bg-[#005461] text-[#005461] hover:text-white font-bold text-xs border border-slate-200 hover:border-[#005461] transition-all duration-200">
                        <span>{{ __('Register for this Track') }}</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Track note banner -->
        <div class="mt-12 p-6 rounded-2xl bg-white border border-[#018790]/30 shadow-sm flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-[#005461] text-white flex items-center justify-center flex-shrink-0">
                    <i data-lucide="help-circle" class="w-6 h-6 text-[#00B7B5]"></i>
                </div>
                <div>
                    <h4 class="text-base font-bold text-slate-900">{{ __('Unsure which track fits your manuscript?') }}</h4>
                    <p class="text-xs sm:text-sm text-slate-600">{{ __('Our scientific committee will review your abstract and assign it to the most relevant track.') }}</p>
                </div>
            </div>
            <a href="{{ route('registration.index') }}" class="px-6 py-3 rounded-xl bg-[#005461] hover:bg-[#018790] text-white text-xs sm:text-sm font-bold whitespace-nowrap shadow-sm transition-colors">
                {{ __('Register as Author / Participant') }}
            </a>
        </div>

    </div>
</section>
