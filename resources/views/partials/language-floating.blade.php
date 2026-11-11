<!-- Floating Language Selector (Pojok Kiri Bawah) -->
<div id="floating-lang-container" class="fixed bottom-6 left-6 z-50 font-sans">
    <div class="relative">
        <!-- Upward Dropdown Menu -->
        <div id="floating-lang-menu" class="hidden absolute bottom-full left-0 mb-3 w-56 bg-white/95 backdrop-blur-md rounded-2xl shadow-2xl border border-slate-200/90 p-2 transition-all duration-200 origin-bottom-left">
            <div class="px-3 py-2 border-b border-slate-100 flex items-center justify-between">
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500">{{ __('Language') }}</span>
                <span class="text-[10px] font-semibold bg-[#F4F4F4] text-[#005461] px-2 py-0.5 rounded-full border border-slate-200">5 Languages</span>
            </div>

            <div class="py-1 space-y-0.5">
                <!-- English -->
                <a href="{{ route('lang.switch', 'en') }}" class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-colors {{ app()->getLocale() == 'en' ? 'bg-[#005461] text-white font-bold shadow-sm' : 'text-slate-700 hover:bg-[#F4F4F4]' }}">
                    <span class="flex items-center gap-2.5">
                        <span class="text-base">🇬🇧</span>
                        <span>English</span>
                    </span>
                    @if(app()->getLocale() == 'en')
                        <i data-lucide="check" class="w-4 h-4 text-white"></i>
                    @endif
                </a>

                <!-- Indonesian -->
                <a href="{{ route('lang.switch', 'id') }}" class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-colors {{ app()->getLocale() == 'id' ? 'bg-[#005461] text-white font-bold shadow-sm' : 'text-slate-700 hover:bg-[#F4F4F4]' }}">
                    <span class="flex items-center gap-2.5">
                        <span class="text-base">🇮🇩</span>
                        <span>Bahasa Indonesia</span>
                    </span>
                    @if(app()->getLocale() == 'id')
                        <i data-lucide="check" class="w-4 h-4 text-white"></i>
                    @endif
                </a>

                <!-- Chinese -->
                <a href="{{ route('lang.switch', 'zh') }}" class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-colors {{ app()->getLocale() == 'zh' ? 'bg-[#005461] text-white font-bold shadow-sm' : 'text-slate-700 hover:bg-[#F4F4F4]' }}">
                    <span class="flex items-center gap-2.5">
                        <span class="text-base">🇨🇳</span>
                        <span>简体中文</span>
                    </span>
                    @if(app()->getLocale() == 'zh')
                        <i data-lucide="check" class="w-4 h-4 text-white"></i>
                    @endif
                </a>

                <!-- Arabic -->
                <a href="{{ route('lang.switch', 'ar') }}" class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-colors {{ app()->getLocale() == 'ar' ? 'bg-[#005461] text-white font-bold shadow-sm' : 'text-slate-700 hover:bg-[#F4F4F4]' }}">
                    <span class="flex items-center gap-2.5">
                        <span class="text-base">🇸🇦</span>
                        <span class="font-bold">العربية</span>
                    </span>
                    @if(app()->getLocale() == 'ar')
                        <i data-lucide="check" class="w-4 h-4 text-white"></i>
                    @endif
                </a>

                <!-- Japanese -->
                <a href="{{ route('lang.switch', 'ja') }}" class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-colors {{ app()->getLocale() == 'ja' ? 'bg-[#005461] text-white font-bold shadow-sm' : 'text-slate-700 hover:bg-[#F4F4F4]' }}">
                    <span class="flex items-center gap-2.5">
                        <span class="text-base">🇯🇵</span>
                        <span>日本語</span>
                    </span>
                    @if(app()->getLocale() == 'ja')
                        <i data-lucide="check" class="w-4 h-4 text-white"></i>
                    @endif
                </a>
            </div>
        </div>

        <!-- Main Floating Trigger Button (Solid Flat) -->
        <button id="floating-lang-btn" type="button" aria-label="Change Language" class="group flex items-center gap-2.5 px-4 py-2.5 bg-[#002d35] hover:bg-[#002228] text-white rounded-full shadow-lg border border-[#018790] transition-all duration-200 focus:outline-none">
            <span class="w-7 h-7 rounded-full bg-[#018790]/50 text-[#00B7B5] flex items-center justify-center group-hover:bg-[#00B7B5] group-hover:text-[#005461] transition-colors">
                <i data-lucide="globe" class="w-4 h-4"></i>
            </span>

            <span class="text-xs font-bold tracking-wide flex items-center gap-1.5">
                @if(app()->getLocale() == 'id')
                    <span>🇮🇩</span> <span>Indonesia</span>
                @elseif(app()->getLocale() == 'zh')
                    <span>🇨🇳</span> <span>中文</span>
                @elseif(app()->getLocale() == 'ar')
                    <span>🇸🇦</span> <span>العربية</span>
                @elseif(app()->getLocale() == 'ja')
                    <span>🇯🇵</span> <span>日本語</span>
                @else
                    <span>🇬🇧</span> <span>English</span>
                @endif
            </span>

            <i id="floating-lang-chevron" data-lucide="chevron-up" class="w-4 h-4 text-slate-300 group-hover:text-white transition-transform duration-200"></i>
        </button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('floating-lang-btn');
        const menu = document.getElementById('floating-lang-menu');
        const chevron = document.getElementById('floating-lang-chevron');
        const container = document.getElementById('floating-lang-container');

        if (btn && menu) {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                menu.classList.toggle('hidden');
                if (chevron) {
                    chevron.classList.toggle('rotate-180');
                }
            });

            // Close when clicking outside
            document.addEventListener('click', function(e) {
                if (container && !container.contains(e.target)) {
                    menu.classList.add('hidden');
                    if (chevron) {
                        chevron.classList.remove('rotate-180');
                    }
                }
            });

            // Close on Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    menu.classList.add('hidden');
                    if (chevron) {
                        chevron.classList.remove('rotate-180');
                    }
                }
            });
        }
    });
</script>
