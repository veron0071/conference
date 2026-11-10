<section id="fees" class="py-20 lg:py-28 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-emerald-100 text-emerald-800 text-xs font-bold uppercase tracking-wider mb-4 border border-emerald-200">
                <i data-lucide="tag" class="w-4 h-4"></i>
                <span>{{ __('Registration & Investment') }}</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ __('Tiered Conference Fees') }}
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600">
                {{ __('Transparent and competitive fee structure tailored for domestic, international, and student participants.') }}
            </p>
        </div>

        <!-- Pricing Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($fees as $fee)
            <div class="rounded-3xl p-6 sm:p-7 flex flex-col justify-between transition-all duration-300 relative
                @if($fee->is_featured)
                    icset-featured-pricing-card text-white border-2 border-emerald-400 shadow-2xl scale-105 z-10
                @else
                    bg-white text-slate-800 border border-slate-200 shadow-sm hover:shadow-lg
                @endif">
                
                @if($fee->is_featured)
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 px-3.5 py-1 rounded-full bg-emerald-400 text-slate-950 text-[11px] font-black uppercase tracking-wider shadow-md">
                    {{ __('Most Popular') }}
                </div>
                @endif

                <div>
                    <h3 class="text-lg font-extrabold mb-4 leading-snug @if($fee->is_featured) text-white @else text-slate-900 @endif">
                        {{ __($fee->category) }}
                    </h3>

                    <!-- Price Block -->
                    <div class="py-4 border-y @if($fee->is_featured) border-slate-700 @else border-slate-100 @endif mb-5">
                        <span class="text-xs font-bold uppercase tracking-wider @if($fee->is_featured) text-emerald-300 @else text-emerald-700 @endif block mb-1">
                            {{ __('Early Bird') }}
                        </span>
                        <div class="text-2xl sm:text-3xl font-extrabold @if($fee->is_featured) text-white @else text-slate-900 @endif">
                            {{ $fee->early_bird }}
                        </div>
                        <div class="text-xs @if($fee->is_featured) text-slate-200 @else text-slate-500 @endif mt-1">
                            {{ __('Regular') }}: <span class="font-bold @if($fee->is_featured) text-emerald-300 @else text-slate-700 @endif">{{ $fee->regular }}</span>
                        </div>
                    </div>

                    <!-- Features -->
                    <ul class="space-y-3 text-xs sm:text-sm">
                        @if(is_array($fee->features))
                            @foreach($fee->features as $item)
                            <li class="flex items-start gap-2.5">
                                <i data-lucide="check" class="w-4 h-4 flex-shrink-0 mt-0.5 @if($fee->is_featured) text-emerald-400 @else text-emerald-600 @endif"></i>
                                <span class="@if($fee->is_featured) text-slate-100 font-medium @else text-slate-700 @endif">{{ __($item) }}</span>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                </div>

                <!-- High-Contrast Distinct Action Buttons -->
                <div class="mt-8 pt-4">
                    <a href="{{ route('registration.index', ['category' => $fee->category]) }}" class="block w-full py-3.5 px-4 rounded-xl text-center text-xs font-black transition-all
                        @if($fee->is_featured)
                            bg-emerald-400 hover:bg-emerald-300 text-slate-950 shadow-lg hover:shadow-emerald-400/25
                        @else
                            bg-slate-900 hover:bg-emerald-600 text-white shadow-md
                        @endif">
                        {{ __('Register for this Tier') }}
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-10 text-center text-xs text-slate-500">
            {{ __('*Final fee structure and payment banking instructions are coordinated with the Finance Division (FEB UNWAHAS) prior to launch on 01 December 2026.') }}
        </div>

    </div>
</section>
