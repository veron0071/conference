<header id="main-nav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white/95 backdrop-blur-md border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-emerald-600 via-teal-600 to-sky-600 flex items-center justify-center text-white shadow-md shadow-emerald-600/20 group-hover:scale-105 transition-transform duration-300">
                    <i data-lucide="sparkles" class="w-6 h-6"></i>
                </div>
                <div class="flex flex-col">
                    <div class="flex items-center gap-1.5">
                        <span class="text-xl font-extrabold tracking-tight text-slate-900 group-hover:text-emerald-600 transition-colors">ICSET</span>
                        <span class="text-xs font-bold px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 border border-emerald-200">2027</span>
                    </div>
                    <span class="text-[11px] font-semibold text-slate-500 uppercase tracking-wider">FEB UNWAHAS</span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden lg:flex items-center gap-5">
                <a href="{{ route('home') }}#about" class="text-sm font-medium text-slate-700 hover:text-emerald-600 transition-colors">{{ __('About') }}</a>
                <a href="{{ route('home') }}#tracks" class="text-sm font-medium text-slate-700 hover:text-emerald-600 transition-colors">{{ __('Tracks') }}</a>
                <a href="{{ route('home') }}#speakers" class="text-sm font-medium text-slate-700 hover:text-emerald-600 transition-colors">{{ __('Speakers') }}</a>
                <a href="{{ route('home') }}#cfp" class="text-sm font-medium text-slate-700 hover:text-emerald-600 transition-colors">{{ __('Call for Papers') }}</a>
                <a href="{{ route('home') }}#timeline" class="text-sm font-medium text-slate-700 hover:text-emerald-600 transition-colors">{{ __('Timeline') }}</a>
                <a href="{{ route('home') }}#fees" class="text-sm font-medium text-slate-700 hover:text-emerald-600 transition-colors">{{ __('Fees') }}</a>
                <a href="{{ route('home') }}#committee" class="text-sm font-medium text-slate-700 hover:text-emerald-600 transition-colors">{{ __('Committee') }}</a>
                <a href="{{ route('registration.check') }}" class="text-xs font-bold text-slate-600 hover:text-emerald-700 transition-colors px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 border border-slate-200">{{ __('Check Status') }}</a>
            </nav>

            <!-- Action CTA -->
            <div class="hidden sm:flex items-center gap-3">
                <!-- Registration CTA -->
                <a href="{{ route('registration.index') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-sm font-bold text-white bg-emerald-600 hover:bg-emerald-700 shadow-md shadow-emerald-600/30 hover:shadow-lg transition-all duration-200">
                    <i data-lucide="user-plus" class="w-4 h-4"></i>
                    <span>{{ __('Register Participant') }}</span>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="flex items-center gap-2 lg:hidden">
                <button id="mobile-menu-btn" type="button" class="p-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100 focus:outline-none">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Dropdown Navigation -->
    <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-200 bg-white px-4 pt-3 pb-6 shadow-xl space-y-2">
        <a href="{{ route('home') }}#about" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-slate-50 hover:text-emerald-600">{{ __('About') }}</a>
        <a href="{{ route('home') }}#tracks" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-slate-50 hover:text-emerald-600">{{ __('Tracks') }}</a>
        <a href="{{ route('home') }}#speakers" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-slate-50 hover:text-emerald-600">{{ __('Speakers') }}</a>
        <a href="{{ route('home') }}#cfp" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-slate-50 hover:text-emerald-600">{{ __('Call for Papers') }}</a>
        <a href="{{ route('home') }}#timeline" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-slate-50 hover:text-emerald-600">{{ __('Timeline') }}</a>
        <a href="{{ route('home') }}#fees" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-slate-50 hover:text-emerald-600">{{ __('Fees') }}</a>
        <a href="{{ route('registration.check') }}" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-slate-50 hover:text-emerald-600">{{ __('Check Status') }}</a>
        
        <!-- Mobile Languages -->
        <div class="pt-3 border-t border-slate-100 flex flex-wrap gap-2 text-xs font-bold">
            <a href="{{ route('lang.switch', 'en') }}" class="px-3 py-1.5 rounded-lg border {{ app()->getLocale() == 'en' ? 'bg-emerald-600 text-white' : 'bg-slate-100 text-slate-700' }}">🇬🇧 EN</a>
            <a href="{{ route('lang.switch', 'id') }}" class="px-3 py-1.5 rounded-lg border {{ app()->getLocale() == 'id' ? 'bg-emerald-600 text-white' : 'bg-slate-100 text-slate-700' }}">🇮🇩 ID</a>
            <a href="{{ route('lang.switch', 'zh') }}" class="px-3 py-1.5 rounded-lg border {{ app()->getLocale() == 'zh' ? 'bg-emerald-600 text-white' : 'bg-slate-100 text-slate-700' }}">🇨🇳 中文</a>
            <a href="{{ route('lang.switch', 'ar') }}" class="px-3 py-1.5 rounded-lg border {{ app()->getLocale() == 'ar' ? 'bg-emerald-600 text-white' : 'bg-slate-100 text-slate-700' }}">🇸🇦 العربية</a>
            <a href="{{ route('lang.switch', 'ja') }}" class="px-3 py-1.5 rounded-lg border {{ app()->getLocale() == 'ja' ? 'bg-emerald-600 text-white' : 'bg-slate-100 text-slate-700' }}">🇯🇵 日本語</a>
        </div>

        <div class="pt-3 border-t border-slate-100 flex flex-col gap-2">
            <a href="{{ route('registration.index') }}" class="text-center px-4 py-2.5 rounded-xl text-sm font-bold text-white bg-emerald-600 hover:bg-emerald-700 shadow">{{ __('Register Participant') }}</a>
        </div>
    </div>
</header>
