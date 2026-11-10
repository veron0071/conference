<section id="partners" class="py-20 lg:py-24 bg-slate-50 relative border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-sky-100 text-sky-800 text-xs font-bold uppercase tracking-wider mb-4 border border-sky-200">
                <i data-lucide="building-2" class="w-4 h-4"></i>
                <span>{{ __('Academic & Strategic Partners') }}</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ __('Global Institutional Network & Sponsors') }}
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600">
                {{ __('Supported by world-class universities, high-impact publication series, and national financial institutions.') }}
            </p>
        </div>

        @php
            $indexingPartners = $partners->where('category', 'indexing');
            $universityPartners = $partners->where('category', 'university');
            $sponsorPartners = $partners->where('category', 'sponsor');
        @endphp

        <div class="space-y-12 max-w-5xl mx-auto">
            
            <!-- Tier 1: Publication & Indexing Partners -->
            @if($indexingPartners->isNotEmpty())
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm text-center">
                <span class="text-xs font-bold uppercase tracking-widest text-emerald-700 block mb-6">
                    {{ __('Proceedings & Journal Indexing Partners') }}
                </span>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 items-center">
                    @foreach($indexingPartners as $partner)
                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100 flex flex-col items-center justify-center hover:border-emerald-500/40 hover:shadow-md transition-all">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center font-black text-sm mb-2
                            @if($partner->color === 'sky') bg-sky-100 text-sky-800
                            @elseif($partner->color === 'indigo') bg-indigo-100 text-indigo-800
                            @elseif($partner->color === 'amber') bg-amber-100 text-amber-800
                            @else bg-emerald-100 text-emerald-800 @endif">
                            {{ $partner->logo_abbr ?? substr($partner->name, 0, 3) }}
                        </div>
                        <span class="text-xs font-extrabold text-slate-800">{{ $partner->name }}</span>
                        @if($partner->subtitle)
                        <span class="text-[10px] text-slate-500 font-medium">{{ __($partner->subtitle) }}</span>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Tier 2: University Co-Hosts -->
            @if($universityPartners->isNotEmpty())
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm text-center">
                <span class="text-xs font-bold uppercase tracking-widest text-sky-700 block mb-6">
                    {{ __('International Academic Co-Hosts & Participating Institutions') }}
                </span>
                <div class="grid grid-cols-2 sm:grid-cols-5 gap-4 items-center">
                    @foreach($universityPartners as $partner)
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-sky-500/40 transition-all flex flex-col items-center">
                        <div class="w-11 h-11 rounded-xl font-extrabold flex items-center justify-center text-xs mb-2 shadow-sm text-white
                            @if($partner->color === 'sky') bg-sky-600
                            @elseif($partner->color === 'indigo') bg-indigo-600
                            @elseif($partner->color === 'rose') bg-rose-600
                            @elseif($partner->color === 'amber') bg-amber-600
                            @else bg-emerald-600 @endif">
                            {{ $partner->logo_abbr ?? substr($partner->name, 0, 3) }}
                        </div>
                        <span class="text-xs font-bold text-slate-800 leading-tight">{{ $partner->name }}</span>
                        @if($partner->subtitle)
                        <span class="text-[10px] text-slate-500">{{ __($partner->subtitle) }}</span>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Tier 3: Strategic Sponsors & Banking Partners -->
            @if($sponsorPartners->isNotEmpty())
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm text-center">
                <span class="text-xs font-bold uppercase tracking-widest text-slate-600 block mb-6">
                    {{ __('Strategic Financial Partners & Sponsors') }}
                </span>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 items-center">
                    @foreach($sponsorPartners as $partner)
                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100 flex items-center gap-4 hover:border-emerald-500/40 transition-all">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center font-black text-sm flex-shrink-0 text-white
                            @if($partner->color === 'sky') bg-sky-600
                            @elseif($partner->color === 'slate') bg-slate-700
                            @else bg-teal-700 @endif">
                            {{ $partner->logo_abbr ?? substr($partner->name, 0, 3) }}
                        </div>
                        <div class="text-left">
                            <span class="text-xs font-extrabold text-slate-900 block">{{ $partner->name }}</span>
                            @if($partner->subtitle)
                            <span class="text-[11px] text-slate-500">{{ __($partner->subtitle) }}</span>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

        </div>

    </div>
</section>
