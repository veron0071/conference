<footer class="bg-[#002228] text-slate-300 py-16 border-t border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 mb-12">
            
            <!-- Col 1: Brand & Identity -->
            <div class="lg:col-span-2 space-y-4">
                <div class="flex items-center gap-3">
                    <div class="h-11 bg-white px-2.5 py-1.5 rounded-xl flex items-center justify-center shadow-md">
                        <img src="{{ asset('images/logo-feb-unwahas.png') }}" alt="Logo FEB UNWAHAS" class="h-8 w-auto object-contain">
                    </div>
                    <div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xl font-extrabold text-white tracking-tight">ICSET</span>
                            <span class="text-xs font-black px-2 py-0.5 rounded-full bg-[#00B7B5] text-[#005461] border border-[#00B7B5]">2027</span>
                        </div>
                        <span class="text-[11px] font-semibold text-slate-300 uppercase tracking-wider">{{ __('Faculty of Economics & Business UNWAHAS') }}</span>
                    </div>
                </div>

                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed max-w-sm">
                    {{ __('The 1st International Conference on Sustainable Economic Transformation: Digital Intelligence, Responsible Business and Inclusive Development.') }}
                </p>

                <div class="pt-2 text-xs text-slate-300 space-y-1">
                    <p class="flex items-center gap-2">
                        <i data-lucide="map-pin" class="w-4 h-4 text-[#00B7B5] flex-shrink-0"></i>
                        <span>Kampus 2 UNWAHAS, Semarang, Jawa Tengah, Indonesia</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <i data-lucide="mail" class="w-4 h-4 text-[#00B7B5] flex-shrink-0"></i>
                        <span>{{ $conference['email'] }}</span>
                    </p>
                </div>
            </div>

            <!-- Col 2: Navigation Links -->
            <div class="space-y-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white">{{ __('About the Conference') }}</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="#about" class="hover:text-[#00B7B5] transition-colors">{{ __('About') }}</a></li>
                    <li><a href="#tracks" class="hover:text-[#00B7B5] transition-colors">{{ __('Tracks') }}</a></li>
                    <li><a href="#speakers" class="hover:text-[#00B7B5] transition-colors">{{ __('Speakers') }}</a></li>
                    <li><a href="#timeline" class="hover:text-[#00B7B5] transition-colors">{{ __('Timeline') }}</a></li>
                    <li><a href="#fees" class="hover:text-[#00B7B5] transition-colors">{{ __('Fees') }}</a></li>
                </ul>
            </div>

            <!-- Col 3: Submission & Research -->
            <div class="space-y-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white">{{ __('Call for Papers') }}</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="#cfp" class="hover:text-[#00B7B5] transition-colors">{{ __('Author Guidelines & Requirements') }}</a></li>
                    <li><a href="https://ejournal.unwahas.ac.id" target="_blank" rel="noopener noreferrer" class="hover:text-[#00B7B5] transition-colors">OJS UNWAHAS Portal</a></li>
                    <li><a href="#publications" class="hover:text-[#00B7B5] transition-colors">{{ __('International Conference Proceedings') }}</a></li>
                    <li><a href="#publications" class="hover:text-[#00B7B5] transition-colors">{{ __('Supporting Journals') }}</a></li>
                    <li><a href="#cfp" class="hover:text-[#00B7B5] transition-colors">{{ __('Download E3S Template (.docx)') }}</a></li>
                </ul>
            </div>

            <!-- Col 4: Organization & Host -->
            <div class="space-y-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white">{{ __('Organizing & Scientific Committee') }}</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="#committee" class="hover:text-[#00B7B5] transition-colors">{{ __('Committee') }}</a></li>
                    <li><a href="#venue" class="hover:text-[#00B7B5] transition-colors">{{ __('Venue') }}</a></li>
                    <li><a href="https://unwahas.ac.id" target="_blank" rel="noopener noreferrer" class="hover:text-[#00B7B5] transition-colors">Universitas Wahid Hasyim</a></li>
                    <li><a href="https://feb.unwahas.ac.id" target="_blank" rel="noopener noreferrer" class="hover:text-[#00B7B5] transition-colors">FEB UNWAHAS</a></li>
                </ul>
            </div>

        </div>

        <!-- Bottom bar -->
        <div class="pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-400">
            <p>© 2026 - 2027 ICSET Organizing Committee. All rights reserved.</p>
            <div class="flex items-center gap-4">
                <span>Faculty of Economics and Business</span>
                <span>•</span>
                <span>Universitas Wahid Hasyim</span>
                <span>•</span>
                <a href="{{ route('admin.login') }}" class="text-slate-300 hover:text-[#00B7B5] font-semibold transition-colors">{{ __('Admin Portal') }}</a>
            </div>
        </div>
    </div>
</footer>
