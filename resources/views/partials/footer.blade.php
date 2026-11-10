<footer class="bg-slate-950 text-slate-400 py-16 border-t border-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 mb-12">
            
            <!-- Col 1: Brand & Identity -->
            <div class="lg:col-span-2 space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-600 to-teal-600 flex items-center justify-center text-white font-bold text-lg shadow-md shadow-emerald-600/30">
                        <i data-lucide="sparkles" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xl font-extrabold text-white tracking-tight">ICSET</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/30">2027</span>
                        </div>
                        <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">{{ __('Faculty of Economics & Business UNWAHAS') }}</span>
                    </div>
                </div>

                <p class="text-xs sm:text-sm text-slate-400 leading-relaxed max-w-sm">
                    {{ __('The 1st International Conference on Sustainable Economic Transformation: Digital Intelligence, Responsible Business and Inclusive Development.') }}
                </p>

                <div class="pt-2 text-xs text-slate-400 space-y-1">
                    <p class="flex items-center gap-2">
                        <i data-lucide="map-pin" class="w-4 h-4 text-emerald-400 flex-shrink-0"></i>
                        <span>Kampus 2 UNWAHAS, Semarang, Jawa Tengah, Indonesia</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <i data-lucide="mail" class="w-4 h-4 text-emerald-400 flex-shrink-0"></i>
                        <span>{{ $conference['email'] }}</span>
                    </p>
                </div>
            </div>

            <!-- Col 2: Navigation Links -->
            <div class="space-y-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-200">{{ __('About the Conference') }}</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="#about" class="hover:text-emerald-400 transition-colors">{{ __('About') }}</a></li>
                    <li><a href="#tracks" class="hover:text-emerald-400 transition-colors">{{ __('Tracks') }}</a></li>
                    <li><a href="#speakers" class="hover:text-emerald-400 transition-colors">{{ __('Speakers') }}</a></li>
                    <li><a href="#timeline" class="hover:text-emerald-400 transition-colors">{{ __('Timeline') }}</a></li>
                    <li><a href="#fees" class="hover:text-emerald-400 transition-colors">{{ __('Fees') }}</a></li>
                </ul>
            </div>

            <!-- Col 3: Submission & Research -->
            <div class="space-y-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-200">{{ __('Call for Papers') }}</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="#cfp" class="hover:text-emerald-400 transition-colors">{{ __('Author Guidelines & Requirements') }}</a></li>
                    <li><a href="https://ejournal.unwahas.ac.id" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-400 transition-colors">OJS UNWAHAS Portal</a></li>
                    <li><a href="#publications" class="hover:text-emerald-400 transition-colors">{{ __('International Conference Proceedings') }}</a></li>
                    <li><a href="#publications" class="hover:text-emerald-400 transition-colors">{{ __('Supporting Journals') }}</a></li>
                    <li><a href="#cfp" class="hover:text-emerald-400 transition-colors">{{ __('Download E3S Template (.docx)') }}</a></li>
                </ul>
            </div>

            <!-- Col 4: Organization & Host -->
            <div class="space-y-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-200">{{ __('Organizing & Scientific Committee') }}</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="#committee" class="hover:text-emerald-400 transition-colors">{{ __('Committee') }}</a></li>
                    <li><a href="#venue" class="hover:text-emerald-400 transition-colors">{{ __('Venue') }}</a></li>
                    <li><a href="https://unwahas.ac.id" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-400 transition-colors">Universitas Wahid Hasyim</a></li>
                    <li><a href="https://feb.unwahas.ac.id" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-400 transition-colors">FEB UNWAHAS</a></li>
                </ul>
            </div>

        </div>

        <!-- Bottom bar -->
        <div class="pt-8 border-t border-slate-900 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>© 2026 - 2027 ICSET Organizing Committee. All rights reserved.</p>
            <div class="flex items-center gap-4">
                <span>Faculty of Economics and Business</span>
                <span>•</span>
                <span>Universitas Wahid Hasyim</span>
                <span>•</span>
                <a href="{{ route('admin.login') }}" class="text-slate-400 hover:text-emerald-400 font-semibold transition-colors">{{ __('Admin Portal') }}</a>
            </div>
        </div>
    </div>
</footer>
