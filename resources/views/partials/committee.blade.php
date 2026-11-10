<section id="committee" class="py-20 lg:py-28 bg-slate-50 relative border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-indigo-100 text-indigo-800 text-xs font-bold uppercase tracking-wider mb-4 border border-indigo-200">
                <i data-lucide="users-2" class="w-4 h-4"></i>
                <span>{{ __('Organization') }}</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ __('Organizing & Scientific Committee') }}
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600">
                {{ __('Led by faculty leadership and distinguished researchers at Universitas Wahid Hasyim.') }}
            </p>
        </div>

        <!-- Committee Structure -->
        <div class="max-w-5xl mx-auto space-y-10">
            
            <!-- Patron / Advisory -->
            <div class="text-center">
                <span class="text-xs font-bold uppercase tracking-widest text-slate-400 block mb-4">{{ __('Advisory Board & Patron') }}</span>
                @foreach($committee['patron'] as $p)
                <div class="inline-block bg-white rounded-2xl p-6 border border-slate-200 shadow-sm min-w-[280px]">
                    <div class="w-16 h-16 mx-auto rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold text-lg mb-3">
                        {{ strtoupper(substr($p->name, 0, 1)) }}
                    </div>
                    <h4 class="text-base font-bold text-slate-900">{{ $p->name }}</h4>
                    <p class="text-xs text-emerald-700 font-semibold mt-0.5">{{ __($p->role) }}</p>
                    <p class="text-[11px] text-slate-500">Universitas Wahid Hasyim</p>
                </div>
                @endforeach
            </div>

            <!-- Leadership Team -->
            <div>
                <span class="text-xs font-bold uppercase tracking-widest text-slate-400 block mb-4 text-center">{{ __('Conference Executive Committee') }}</span>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($committee['leaders'] as $leader)
                    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm text-center">
                        <div class="w-14 h-14 mx-auto rounded-2xl bg-emerald-50 text-emerald-700 flex items-center justify-center font-bold text-lg mb-3">
                            {{ strtoupper(substr($leader->name, 0, 2)) }}
                        </div>
                        <h4 class="text-sm font-bold text-slate-900">{{ $leader->name }}</h4>
                        <p class="text-xs text-emerald-700 font-bold mt-1">{{ __($leader->role) }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Program Chairs -->
            <div>
                <span class="text-xs font-bold uppercase tracking-widest text-slate-400 block mb-4 text-center">{{ __('Academic Department Heads') }}</span>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    @foreach($committee['division_chairs'] as $head)
                    <div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm text-center">
                        <h4 class="text-sm font-bold text-slate-900">{{ $head->name }}</h4>
                        <p class="text-xs text-slate-600 mt-1">{{ __($head->role) }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center text-xs text-slate-500">
                *{{ __('Full scientific committee, review board, and international advisory board members are currently in formation.') }}
            </div>
                *The full expanded organizing committee structure is officially ratified via Decree of the Dean of FEB UNWAHAS.
            </div>

        </div>

    </div>
</section>
