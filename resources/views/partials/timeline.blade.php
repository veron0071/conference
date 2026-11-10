<section id="timeline" class="py-20 lg:py-28 bg-slate-50 relative border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-emerald-100 text-emerald-800 text-xs font-bold uppercase tracking-wider mb-4 border border-emerald-200">
                <i data-lucide="calendar-clock" class="w-4 h-4"></i>
                <span>{{ __('Important Dates') }}</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ __('Master Roadmap & Timeline') }}
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600">
                {{ __('Mark your calendar for key submission, review, and conference milestones.') }}
            </p>
        </div>

        <!-- Stepped Timeline Grid -->
        <div class="relative max-w-5xl mx-auto">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($timeline as $item)
                <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-lg transition-all duration-200 relative flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold px-3 py-1 rounded-full 
                                @if($item->badge == 'Kickoff') bg-emerald-100 text-emerald-800
                                @elseif($item->badge == 'Deadline') bg-rose-100 text-rose-800
                                @elseif($item->badge == 'Main Event') bg-amber-100 text-amber-800
                                @else bg-slate-100 text-slate-700
                                @endif">
                                {{ __($item->badge) }}
                            </span>
                            <div class="w-8 h-8 rounded-lg bg-slate-50 text-slate-400 flex items-center justify-center">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                            </div>
                        </div>

                        <span class="text-xs font-bold uppercase tracking-wider text-emerald-700 block mb-1">
                            {{ __($item->date_string) }}
                        </span>

                        <h4 class="text-lg font-bold text-slate-900 mb-2">
                            {{ __($item->title) }}
                        </h4>

                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                            {{ __($item->description) }}
                        </p>
                    </div>

                    <div class="mt-6 pt-3 border-t border-slate-100 text-right">
                        @if($item->badge == 'Kickoff')
                            <span class="text-[11px] font-bold text-emerald-600 flex items-center justify-end gap-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                {{ __('Target Launching') }}
                            </span>
                        @elseif($item->badge == 'Main Event')
                            <span class="text-[11px] font-bold text-amber-600">
                                {{ __('2 Days Conference') }}
                            </span>
                        @else
                            <span class="text-[11px] text-slate-400">
                                {{ __('Scheduled Milestone') }}
                            </span>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>
</section>
