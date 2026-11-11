<header id="main-nav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white/95 backdrop-blur-md border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="h-11 flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/logo-feb-unwahas.png') }}" alt="Logo FEB UNWAHAS" class="h-10 sm:h-11 w-auto object-contain">
                </div>
                <div class="flex flex-col border-l border-slate-200 pl-3">
                    <div class="flex items-center gap-1.5">
                        <span class="text-xl font-extrabold tracking-tight text-[#800020] group-hover:text-[#5C0017] transition-colors">ICSET</span>
                        <span class="text-xs font-black px-2 py-0.5 rounded-full bg-[#D45060] text-white border border-[#D45060] shadow-sm">2027</span>
                    </div>
                    <span class="text-[10px] font-bold text-slate-500 uppercase tracking-wider">FEB UNWAHAS SEMARANG</span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden lg:flex items-center gap-4 xl:gap-5">
                <a href="{{ route('home') }}#about" class="text-xs xl:text-sm font-medium text-slate-700 hover:text-[#800020] transition-colors">{{ __('About') }}</a>
                <a href="{{ route('home') }}#tracks" class="text-xs xl:text-sm font-medium text-slate-700 hover:text-[#800020] transition-colors">{{ __('Tracks') }}</a>
                <a href="{{ route('home') }}#speakers" class="text-xs xl:text-sm font-medium text-slate-700 hover:text-[#800020] transition-colors">{{ __('Speakers') }}</a>
                <a href="{{ route('home') }}#cfp" class="text-xs xl:text-sm font-medium text-slate-700 hover:text-[#800020] transition-colors">{{ __('Call for Papers') }}</a>
                <a href="{{ route('home') }}#programme" class="text-xs xl:text-sm font-medium text-slate-700 hover:text-[#800020] transition-colors">{{ __('Programme') }}</a>
                <a href="{{ route('home') }}#fees" class="text-xs xl:text-sm font-medium text-slate-700 hover:text-[#800020] transition-colors">{{ __('Fees') }}</a>
                <a href="{{ route('home') }}#faq" class="text-xs xl:text-sm font-medium text-slate-700 hover:text-[#800020] transition-colors">{{ __('FAQ') }}</a>
                <a href="{{ route('registration.check') }}" class="text-xs font-bold text-[#800020] hover:text-[#5C0017] transition-colors px-2.5 py-1.5 rounded-lg bg-[#FFF9F2] hover:bg-[#e0f7f6] border border-slate-200">{{ __('Check Status') }}</a>
            </nav>

            <!-- Action CTA -->
            <div class="hidden sm:flex items-center gap-3">
                <!-- Registration CTA -->
                <a href="{{ route('registration.index') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-sm font-bold text-white bg-[#800020] hover:bg-[#5C0017] shadow-sm hover:shadow transition-all duration-200">
                    <i data-lucide="user-plus" class="w-4 h-4 text-[#D45060]"></i>
                    <span>{{ __('Register Participant') }}</span>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="flex items-center gap-2 lg:hidden">
                <button id="mobile-menu-btn" type="button" class="p-2 rounded-lg text-slate-600 hover:text-[#800020] hover:bg-[#FFF9F2] focus:outline-none">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Dropdown Navigation -->
    <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-200 bg-white px-4 pt-3 pb-6 shadow-xl space-y-2">
        <a href="{{ route('home') }}#about" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-[#FFF9F2] hover:text-[#800020]">{{ __('About') }}</a>
        <a href="{{ route('home') }}#tracks" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-[#FFF9F2] hover:text-[#800020]">{{ __('Tracks') }}</a>
        <a href="{{ route('home') }}#speakers" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-[#FFF9F2] hover:text-[#800020]">{{ __('Speakers') }}</a>
        <a href="{{ route('home') }}#cfp" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-[#FFF9F2] hover:text-[#800020]">{{ __('Call for Papers') }}</a>
        <a href="{{ route('home') }}#programme" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-[#FFF9F2] hover:text-[#800020]">{{ __('Programme') }}</a>
        <a href="{{ route('home') }}#fees" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-[#FFF9F2] hover:text-[#800020]">{{ __('Fees') }}</a>
        <a href="{{ route('home') }}#faq" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-[#FFF9F2] hover:text-[#800020]">{{ __('FAQ') }}</a>
        <a href="{{ route('conference.brochure') }}" target="_blank" class="block px-3 py-2 rounded-lg text-base font-medium text-[#5C0017] hover:bg-[#FFF9F2]">{{ __('Download Brochure') }}</a>
        <a href="{{ route('registration.check') }}" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-[#FFF9F2] hover:text-[#800020]">{{ __('Check Status') }}</a>
        
        <!-- Mobile Languages -->
        <div class="pt-3 border-t border-slate-100 flex flex-wrap gap-2 text-xs font-bold">
            <a href="{{ route('lang.switch', 'en') }}" class="px-3 py-1.5 rounded-lg border {{ app()->getLocale() == 'en' ? 'bg-[#800020] text-white font-black' : 'bg-[#FFF9F2] text-slate-700' }}">🇬🇧 EN</a>
            <a href="{{ route('lang.switch', 'id') }}" class="px-3 py-1.5 rounded-lg border {{ app()->getLocale() == 'id' ? 'bg-[#800020] text-white font-black' : 'bg-[#FFF9F2] text-slate-700' }}">🇮🇩 ID</a>
            <a href="{{ route('lang.switch', 'zh') }}" class="px-3 py-1.5 rounded-lg border {{ app()->getLocale() == 'zh' ? 'bg-[#800020] text-white font-black' : 'bg-[#FFF9F2] text-slate-700' }}">🇨🇳 中文</a>
            <a href="{{ route('lang.switch', 'ar') }}" class="px-3 py-1.5 rounded-lg border {{ app()->getLocale() == 'ar' ? 'bg-[#800020] text-white font-black' : 'bg-[#FFF9F2] text-slate-700' }}">🇸🇦 العربية</a>
            <a href="{{ route('lang.switch', 'ja') }}" class="px-3 py-1.5 rounded-lg border {{ app()->getLocale() == 'ja' ? 'bg-[#800020] text-white font-black' : 'bg-[#FFF9F2] text-slate-700' }}">🇯🇵 日本語</a>
        </div>

        <div class="pt-3 border-t border-slate-100 flex flex-col gap-2">
            <a href="{{ route('registration.index') }}" class="text-center px-4 py-2.5 rounded-xl text-sm font-bold text-white bg-[#800020] hover:bg-[#5C0017] shadow-sm">{{ __('Register Participant') }}</a>
        </div>
    </div>
</header>
