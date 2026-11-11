<header id="main-nav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-[#800020]/95 backdrop-blur-md border-b border-[#F3E6D5]/20 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3.5 group">
                <div class="h-11 px-2.5 py-1 rounded-xl bg-white flex items-center justify-center shadow-sm group-hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/logo-feb-unwahas.png') }}" alt="Logo FEB UNWAHAS" class="h-9 w-auto object-contain">
                </div>
                <div class="flex flex-col border-l border-white/20 pl-3">
                    <div class="flex items-center gap-1.5">
                        <span class="text-xl font-black tracking-tight text-white group-hover:text-[#F3E6D5] transition-colors">ICSET</span>
                        <span class="text-[10px] font-black px-2 py-0.5 rounded-full bg-[#D45060] text-white border border-[#D45060] shadow-sm">2027</span>
                    </div>
                    <span class="text-[9px] sm:text-[10px] font-bold text-[#F3E6D5]/80 uppercase tracking-wider">FEB UNWAHAS SEMARANG</span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden lg:flex items-center gap-1 xl:gap-2">
                <a href="{{ route('home') }}#about" class="text-xs xl:text-sm font-semibold text-white/85 hover:text-white hover:bg-white/10 px-3 py-2 rounded-xl transition-all">{{ __('About') }}</a>
                <a href="{{ route('home') }}#tracks" class="text-xs xl:text-sm font-semibold text-white/85 hover:text-white hover:bg-white/10 px-3 py-2 rounded-xl transition-all">{{ __('Tracks') }}</a>
                <a href="{{ route('home') }}#speakers" class="text-xs xl:text-sm font-semibold text-white/85 hover:text-white hover:bg-white/10 px-3 py-2 rounded-xl transition-all">{{ __('Speakers') }}</a>
                <a href="{{ route('home') }}#cfp" class="text-xs xl:text-sm font-semibold text-white/85 hover:text-white hover:bg-white/10 px-3 py-2 rounded-xl transition-all">{{ __('Call for Papers') }}</a>
                <a href="{{ route('home') }}#programme" class="text-xs xl:text-sm font-semibold text-white/85 hover:text-white hover:bg-white/10 px-3 py-2 rounded-xl transition-all">{{ __('Programme') }}</a>
                <a href="{{ route('home') }}#fees" class="text-xs xl:text-sm font-semibold text-white/85 hover:text-white hover:bg-white/10 px-3 py-2 rounded-xl transition-all">{{ __('Fees') }}</a>
                <a href="{{ route('home') }}#faq" class="text-xs xl:text-sm font-semibold text-white/85 hover:text-white hover:bg-white/10 px-3 py-2 rounded-xl transition-all">{{ __('FAQ') }}</a>
            </nav>

            <!-- Action CTA -->
            <div class="hidden sm:flex items-center gap-3">
                <!-- Registration CTA -->
                <a href="{{ route('registration.index') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-xs sm:text-sm font-black text-white bg-[#D45060] hover:bg-[#be3849] shadow-md hover:shadow-lg transition-all duration-200">
                    <i data-lucide="user-plus" class="w-4 h-4 text-white"></i>
                    <span>{{ __('Register Participant') }}</span>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="flex items-center gap-2 lg:hidden">
                <button id="mobile-menu-btn" type="button" class="p-2.5 rounded-xl text-white hover:bg-white/10 focus:outline-none transition-colors border border-white/15">
                    <i data-lucide="menu" class="w-5 h-5"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Dropdown Navigation -->
    <div id="mobile-menu" class="hidden lg:hidden border-t border-[#F3E6D5]/20 bg-[#800020] px-4 pt-3 pb-6 shadow-2xl space-y-1 text-white">
        <a href="{{ route('home') }}#about" class="block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-white/90 hover:bg-white/10 hover:text-white transition-colors">{{ __('About') }}</a>
        <a href="{{ route('home') }}#tracks" class="block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-white/90 hover:bg-white/10 hover:text-white transition-colors">{{ __('Tracks') }}</a>
        <a href="{{ route('home') }}#speakers" class="block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-white/90 hover:bg-white/10 hover:text-white transition-colors">{{ __('Speakers') }}</a>
        <a href="{{ route('home') }}#cfp" class="block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-white/90 hover:bg-white/10 hover:text-white transition-colors">{{ __('Call for Papers') }}</a>
        <a href="{{ route('home') }}#programme" class="block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-white/90 hover:bg-white/10 hover:text-white transition-colors">{{ __('Programme') }}</a>
        <a href="{{ route('home') }}#fees" class="block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-white/90 hover:bg-white/10 hover:text-white transition-colors">{{ __('Fees') }}</a>
        <a href="{{ route('home') }}#faq" class="block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-white/90 hover:bg-white/10 hover:text-white transition-colors">{{ __('FAQ') }}</a>
        <a href="{{ route('conference.brochure') }}" target="_blank" class="block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-[#F3E6D5] hover:bg-white/10 transition-colors">{{ __('Download Brochure') }}</a>
        <a href="{{ route('registration.check') }}" class="block px-3.5 py-2.5 rounded-xl text-sm font-bold text-[#F3E6D5] bg-[#5C0017] border border-[#F3E6D5]/30 mt-2">{{ __('Check Status') }}</a>
        
        <!-- Mobile Languages -->
        <div class="pt-3 mt-2 border-t border-white/15 flex flex-wrap gap-2 text-xs font-bold">
            <a href="{{ route('lang.switch', 'en') }}" class="px-3 py-1.5 rounded-lg border {{ app()->getLocale() == 'en' ? 'bg-[#D45060] text-white font-black' : 'bg-[#5C0017] text-[#FFF9F2] border-[#F3E6D5]/20' }}">🇬🇧 EN</a>
            <a href="{{ route('lang.switch', 'id') }}" class="px-3 py-1.5 rounded-lg border {{ app()->getLocale() == 'id' ? 'bg-[#D45060] text-white font-black' : 'bg-[#5C0017] text-[#FFF9F2] border-[#F3E6D5]/20' }}">🇮🇩 ID</a>
            <a href="{{ route('lang.switch', 'zh') }}" class="px-3 py-1.5 rounded-lg border {{ app()->getLocale() == 'zh' ? 'bg-[#D45060] text-white font-black' : 'bg-[#5C0017] text-[#FFF9F2] border-[#F3E6D5]/20' }}">🇨🇳 中文</a>
            <a href="{{ route('lang.switch', 'ar') }}" class="px-3 py-1.5 rounded-lg border {{ app()->getLocale() == 'ar' ? 'bg-[#D45060] text-white font-black' : 'bg-[#5C0017] text-[#FFF9F2] border-[#F3E6D5]/20' }}">🇸🇦 العربية</a>
            <a href="{{ route('lang.switch', 'ja') }}" class="px-3 py-1.5 rounded-lg border {{ app()->getLocale() == 'ja' ? 'bg-[#D45060] text-white font-black' : 'bg-[#5C0017] text-[#FFF9F2] border-[#F3E6D5]/20' }}">🇯🇵 日本語</a>
        </div>

        <div class="pt-3 border-t border-white/15 flex flex-col gap-2">
            <a href="{{ route('registration.index') }}" class="text-center px-4 py-3 rounded-xl text-sm font-black text-white bg-[#D45060] hover:bg-[#be3849] shadow-md">{{ __('Register Participant') }}</a>
        </div>
    </div>
</header>
