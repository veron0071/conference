<section id="speakers" class="py-20 lg:py-28 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-[#FFF9F2] text-[#800020] text-xs font-bold uppercase tracking-wider mb-4 border border-[#5C0017]/30">
                <i data-lucide="mic" class="w-4 h-4 text-[#5C0017]"></i>
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

        <!-- Honorary Keynote Card (Solid Flat Design, No Gradients) -->
        @if($keynote)
        <div class="mb-14 bg-[#800020] rounded-3xl p-8 sm:p-10 text-white shadow-xl border border-[#5C0017] relative overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#5C0017]/60 text-[#D45060] text-xs font-bold uppercase tracking-wider border border-[#D45060]/40 shadow-sm">
                        <i data-lucide="star" class="w-3.5 h-3.5 text-[#D45060]"></i>
                        <span>{{ __($keynote->role) }}</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-white">
                        {{ $keynote->name }}
                    </h3>
                    <p class="text-[#D45060] font-extrabold text-sm sm:text-base">
                        {{ $keynote->institution }}
                    </p>
                    <p class="text-slate-100 text-sm sm:text-base leading-relaxed max-w-2xl font-normal">
                        {{ __($keynote->bio ?? 'Delivering the national strategic perspective on integrating artificial intelligence, research commercialization, and responsible business governance to accelerate Indonesia\'s sustainable economic transition towards Golden Indonesia 2045.') }}
                    </p>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-xl bg-[#5C0017] border border-[#D45060]/40 text-[#D45060] text-xs font-bold">
                        <span class="w-2 h-2 rounded-full bg-[#D45060] animate-ping"></span>
                        <span>{{ __('Keynote speaker invitation in official coordination with university leadership') }}</span>
                    </div>
                </div>

                <div class="lg:col-span-4 flex justify-center lg:justify-end">
                    <div class="w-52 h-52 sm:w-60 sm:h-60 rounded-2xl bg-[#5C0017] border border-white/10 flex flex-col items-center justify-center text-center p-6 shadow-md">
                        <div class="w-20 h-20 rounded-full bg-[#D45060] text-white flex items-center justify-center mb-3 shadow-md">
                            <i data-lucide="landmark" class="w-10 h-10"></i>
                        </div>
                        <span class="text-sm font-extrabold text-white">{{ __('National Keynote') }}</span>
                        <span class="text-xs font-bold text-[#D45060] mt-1">{{ $keynote->title ?? 'Kemendiktisaintek / BRIN' }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Invited Speakers Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($invitedSpeakers as $spk)
            <div class="bg-[#FFF9F2] hover:bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-lg transition-all duration-200 flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold px-2.5 py-1 rounded-full bg-white text-[#800020] border border-slate-200 shadow-sm">
                            {{ __($spk->role) }}
                        </span>
                        <span class="text-xl" title="{{ $spk->country }}">{{ $spk->flag ?? '🌐' }}</span>
                    </div>

                    <div class="w-24 h-24 mx-auto rounded-2xl bg-[#5C0017] text-white flex items-center justify-center text-2xl font-black shadow-md mb-5 group-hover:scale-105 transition-transform overflow-hidden border-2 border-white">
                        @if($spk->image)
                            <img src="{{ asset('storage/' . $spk->image) }}" alt="{{ $spk->name }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-white drop-shadow-sm">{{ strtoupper(substr($spk->name, 0, 2)) }}</span>
                        @endif
                    </div>

                    <div class="text-center">
                        <h4 class="text-base font-extrabold text-slate-900 group-hover:text-[#800020] transition-colors">
                            {{ $spk->name }}
                        </h4>
                        @if($spk->title)
                            <p class="text-xs font-semibold text-slate-600 mt-0.5">{{ $spk->title }}</p>
                        @endif
                        <p class="text-xs font-bold text-slate-800 mt-1">
                            {{ $spk->institution }}
                        </p>
                        <p class="text-xs font-extrabold text-[#5C0017] mt-0.5">
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

                <div class="mt-5 pt-3 border-t border-slate-200 flex items-center justify-center gap-1.5 text-xs font-bold text-[#800020] bg-white py-1.5 rounded-lg border border-slate-200">
                    <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-[#5C0017]"></i>
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
