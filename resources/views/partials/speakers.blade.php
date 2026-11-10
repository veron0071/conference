<section id="speakers" class="py-20 lg:py-28 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-sky-100 text-sky-800 text-xs font-bold uppercase tracking-wider mb-4 border border-sky-200">
                <i data-lucide="mic" class="w-4 h-4"></i>
                <span>{{ __('Distinguished Guests') }}</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ __('Keynote & Invited Speakers') }}
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600">
                {{ __('Learn from internationally acclaimed researchers, chief editors, and policy leaders across four continents.') }}
            </p>
        </div>

        @php
            $keynote = $speakers->firstWhere('role', 'Keynote Speaker (Honorary)');
            $invitedSpeakers = $speakers->where('role', '!=', 'Keynote Speaker (Honorary)');
        @endphp

        <!-- Honorary Keynote Card -->
        @if($keynote)
        <div class="mb-14 bg-slate-950 bg-gradient-to-r from-slate-950 via-emerald-950 to-slate-950 rounded-3xl p-8 sm:p-10 text-white shadow-2xl border-2 border-emerald-500/50 relative overflow-hidden">
            <div class="absolute right-0 top-0 translate-x-12 -translate-y-12 w-64 h-64 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/25 text-emerald-300 text-xs font-bold uppercase tracking-wider border border-emerald-400/50">
                        <i data-lucide="star" class="w-3.5 h-3.5 text-amber-300"></i>
                        <span>{{ __($keynote->role) }}</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-white">
                        {{ $keynote->name }}
                    </h3>
                    <p class="text-emerald-400 font-extrabold text-sm sm:text-base">
                        {{ $keynote->institution }}
                    </p>
                    <p class="text-slate-100 text-sm sm:text-base leading-relaxed max-w-2xl font-normal">
                        {{ __($keynote->bio ?? 'Delivering the national strategic perspective on integrating artificial intelligence, research commercialization, and responsible business governance to accelerate Indonesia\'s sustainable economic transition towards Golden Indonesia 2045.') }}
                    </p>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-xl bg-amber-400/20 border border-amber-400/50 text-amber-200 text-xs font-bold">
                        <span class="w-2 h-2 rounded-full bg-amber-400 animate-ping"></span>
                        <span>{{ __('Keynote speaker invitation in official coordination with university leadership') }}</span>
                    </div>
                </div>

                <div class="lg:col-span-4 flex justify-center lg:justify-end">
                    <div class="w-52 h-52 sm:w-60 sm:h-60 rounded-2xl bg-slate-900/90 border border-emerald-500/40 flex flex-col items-center justify-center text-center p-6 shadow-xl backdrop-blur-md">
                        <div class="w-20 h-20 rounded-full bg-emerald-500 text-slate-950 flex items-center justify-center mb-3 shadow-lg shadow-emerald-500/40">
                            <i data-lucide="landmark" class="w-10 h-10"></i>
                        </div>
                        <span class="text-sm font-extrabold text-white">{{ __('National Keynote') }}</span>
                        <span class="text-xs font-bold text-emerald-300 mt-1">{{ $keynote->title ?? 'Kemendiktisaintek / BRIN' }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Invited Speakers Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($invitedSpeakers as $spk)
            <div class="bg-slate-50 hover:bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 border border-emerald-200">
                            {{ __($spk->role) }}
                        </span>
                        <span class="text-xl" title="{{ $spk->country }}">{{ $spk->flag ?? '🌐' }}</span>
                    </div>

                    <div class="w-24 h-24 mx-auto rounded-2xl bg-gradient-to-br from-emerald-600 via-emerald-700 to-teal-900 flex items-center justify-center text-white text-2xl font-black shadow-lg shadow-emerald-900/40 mb-5 group-hover:scale-105 transition-transform overflow-hidden border-2 border-emerald-400/60">
                        @if($spk->image)
                            <img src="{{ asset('storage/' . $spk->image) }}" alt="{{ $spk->name }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-white drop-shadow">{{ strtoupper(substr($spk->name, 0, 2)) }}</span>
                        @endif
                    </div>

                    <div class="text-center">
                        <h4 class="text-base font-extrabold text-slate-900 group-hover:text-emerald-700 transition-colors">
                            {{ $spk->name }}
                        </h4>
                        @if($spk->title)
                            <p class="text-xs font-semibold text-slate-600 mt-0.5">{{ $spk->title }}</p>
                        @endif
                        <p class="text-xs font-bold text-slate-800 mt-1">
                            {{ $spk->institution }}
                        </p>
                        <p class="text-xs font-extrabold text-emerald-700 mt-0.5">
                            {{ $spk->university }}
                        </p>
                    </div>

                    @if($spk->topic)
                    <div class="mt-5 pt-4 border-t border-slate-200 text-xs text-slate-600 space-y-1">
                        <span class="font-bold text-slate-900 block">{{ __('Expertise Focus:') }}</span>
                        <p class="text-slate-700 font-medium">{{ __($spk->topic) }}</p>
                    </div>
                    @endif
                </div>

                <div class="mt-5 pt-3 border-t border-slate-200 flex items-center justify-center gap-1.5 text-xs font-extrabold text-emerald-700 bg-emerald-50 py-1.5 rounded-lg border border-emerald-200/60">
                    <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-emerald-600"></i>
                    <span>{{ __($spk->status) }}</span>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-10 text-center text-xs sm:text-sm text-slate-500">
            <span class="font-semibold text-slate-700">{{ __('Note:') }}</span> {{ __('Additional invited speakers from America, Europe, and Africa are currently being finalized by the Scientific Committee.') }}
        </div>

    </div>
</section>
