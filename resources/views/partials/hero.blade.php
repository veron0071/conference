<section id="hero" class="relative pt-28 pb-16 lg:pt-36 lg:pb-24 hero-pattern text-white overflow-hidden border-b border-[#5C0017]/30">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- 2-Column Academic Hero Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <!-- Left Column: Title, Theme, and Actions (7 Cols) -->
            <div class="lg:col-span-7 space-y-6 text-left">
                
                <!-- Conference Subtitle Tag -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-[#F3E6D5] text-[#800020] text-xs font-black uppercase tracking-wider border border-[#F3E6D5] shadow-sm">
                    <i data-lucide="award" class="w-3.5 h-3.5 text-[#D45060]"></i>
                    <span>{{ __('The 1st International Conference') }}</span>
                    <span class="text-[#800020]/40">•</span>
                    <span class="text-[#800020]">ICSET 2027</span>
                </div>

                <!-- Main Heading (Solid Teal & Mint Highlight) -->
                <h1 class="text-3xl sm:text-5xl lg:text-5xl font-black tracking-tight leading-tight sm:leading-tight text-white">
                    <span>{{ __('International Conference on') }}</span> <br>
                    <span class="text-[#D45060]">
                        {{ __('Sustainable Economic Transformation') }}
                    </span>
                </h1>

                <!-- Official Theme Plaque (Parchment Ivory & Warm Cream Card) -->
                <div class="bg-[#FFF9F2] text-[#800020] rounded-2xl p-6 sm:p-7 border-l-4 border-l-[#D45060] border border-[#F3E6D5] shadow-2xl space-y-2.5">
                    <div class="flex items-center justify-between">
                        <span class="text-[11px] font-black uppercase tracking-widest text-[#D45060] flex items-center gap-1.5">
                            <i data-lucide="bookmark" class="w-3.5 h-3.5 text-[#D45060]"></i>
                            <span>{{ __('Conference Main Theme') }}</span>
                        </span>
                        <span class="text-[10px] font-black px-2.5 py-0.5 rounded bg-[#F3E6D5] text-[#800020] border border-[#800020]/15">Official Symposium</span>
                    </div>
                    <p class="text-base sm:text-xl font-black text-[#800020] leading-snug">
                        “{{ $conference['theme'] }}”
                    </p>
                    <p class="text-xs text-slate-700 leading-relaxed font-medium">
                        {{ $conference['sub_theme'] ?? __('Fostering Resilient Economies through Artificial Intelligence, Sustainable Finance, and ESG Integration.') }}
                    </p>
                </div>

                <!-- Key Value Badges (Publication & Co-Hosts) -->
                <div class="flex flex-wrap items-center gap-2 pt-1 text-xs text-slate-300">
                    <span class="font-bold text-slate-200 text-[11px] uppercase mr-1">{{ __('Indexed By:') }}</span>
                    <span class="px-2.5 py-1 rounded-md bg-[#FFF9F2] text-[#800020] border border-[#F3E6D5] font-black flex items-center gap-1 shadow-sm">
                        <i data-lucide="check" class="w-3 h-3 text-[#D45060]"></i> Scopus
                    </span>
                    <span class="px-2.5 py-1 rounded-md bg-[#F3E6D5] text-[#800020] border border-[#F3E6D5] font-black">Web of Science (CPCI)</span>
                    <span class="px-2.5 py-1 rounded-md bg-[#FFF9F2] text-[#800020] border border-[#F3E6D5] font-black">E3S / IOP Proceedings</span>
                </div>

                <!-- Action CTA Buttons (Clean Solid 4-Button Grid) -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 sm:gap-2.5 pt-3">
                    <a href="{{ route('registration.index') }}" class="inline-flex items-center justify-center gap-1.5 px-3 py-3 rounded-xl font-black text-xs text-white bg-[#D45060] hover:bg-[#be3849] shadow-md hover:shadow-lg transition-all text-center">
                        <i data-lucide="user-plus" class="w-3.5 h-3.5 flex-shrink-0 text-white"></i>
                        <span>{{ __('Register Participant') }}</span>
                    </a>
                    
                    <a href="#cfp" class="inline-flex items-center justify-center gap-1.5 px-3 py-3 rounded-xl font-bold text-xs text-white bg-[#5C0017] hover:bg-[#6d001b] border border-[#D45060]/40 shadow-sm transition-all text-center">
                        <i data-lucide="send" class="w-3.5 h-3.5 flex-shrink-0 text-[#D45060]"></i>
                        <span>{{ __('Call for Papers') }}</span>
                    </a>

                    <a href="{{ route('conference.brochure') }}" target="_blank" class="inline-flex items-center justify-center gap-1.5 px-3 py-3 rounded-xl font-bold text-xs text-white bg-[#5C0017] hover:bg-[#6d001b] border border-[#F3E6D5]/30 shadow-sm transition-all text-center">
                        <i data-lucide="download" class="w-3.5 h-3.5 flex-shrink-0 text-[#D45060]"></i>
                        <span>{{ __('Download Brochure') }}</span>
                    </a>

                    <a href="#programme" class="inline-flex items-center justify-center gap-1.5 px-3 py-3 rounded-xl font-bold text-xs text-white bg-[#5C0017] hover:bg-[#6d001b] border border-[#F3E6D5]/30 shadow-sm transition-all text-center">
                        <i data-lucide="clock" class="w-3.5 h-3.5 flex-shrink-0 text-[#D45060]"></i>
                        <span>{{ __('Daily Programme') }}</span>
                    </a>
                </div>

            </div>

            <!-- Right Column: Official Conference Poster Frame & Interactive Lightbox (5 Cols) -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="relative w-full max-w-sm sm:max-w-md">
                    
                    <!-- Outer Card Frame (Clean Solid Flat Design with Cream Border Accent) -->
                    <div class="relative bg-[#4d0013] rounded-3xl p-3 sm:p-4 border-2 border-[#F3E6D5]/60 shadow-2xl overflow-hidden group">
                        
                        <!-- Poster Container -->
                        @if(!empty($conference['poster_image']))
                            <!-- Uploaded Custom Poster -->
                            <div class="relative aspect-[1/1.414] rounded-2xl overflow-hidden cursor-pointer bg-[#38000d] border border-[#5C0017]/50" onclick="openPosterModal('{{ asset('storage/' . $conference['poster_image']) }}')">
                                <img src="{{ asset('storage/' . $conference['poster_image']) }}" alt="ICSET 2027 Conference Poster" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                
                                <div class="absolute inset-0 bg-[#38000d]/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <span class="px-4 py-2.5 rounded-xl bg-[#D45060] text-white font-black text-xs flex items-center gap-1.5 shadow-xl">
                                        <i data-lucide="zoom-in" class="w-4 h-4 text-white"></i>
                                        <span>{{ __('Click to View Full Poster') }}</span>
                                    </span>
                                </div>
                            </div>
                        @else
                            <!-- Default Academic Conference Poster Card (Parchment Ivory & Warm Cream) -->
                            <div class="relative aspect-[1/1.414] rounded-2xl overflow-hidden cursor-pointer bg-[#FFF9F2] p-5 sm:p-6 text-[#800020] flex flex-col justify-between border-2 border-[#F3E6D5] select-none shadow-lg" onclick="openPosterModal(null)">
                                
                                <!-- Poster Mockup Top -->
                                <div class="text-center space-y-1.5 border-b border-[#800020]/15 pb-3">
                                    <div class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded bg-[#F3E6D5] text-[#800020] text-[10px] font-black tracking-wider uppercase border border-[#800020]/20">
                                        <i data-lucide="award" class="w-3 h-3 text-[#D45060]"></i>
                                        <span>UNWAHAS FEB • INTERNATIONAL HYBRID CONFERENCE</span>
                                    </div>
                                    <h3 class="text-xl sm:text-2xl font-black tracking-tight leading-tight text-[#800020] uppercase mt-1">
                                        ICSET 2027
                                    </h3>
                                    <p class="text-[11px] text-[#D45060] font-black uppercase tracking-widest">
                                        Call For Papers & Presentation
                                    </p>
                                </div>

                                <!-- Poster Mockup Center -->
                                <div class="text-center py-2 space-y-2">
                                    <span class="text-[10px] font-extrabold uppercase tracking-widest text-slate-500 block">{{ __('Official Theme:') }}</span>
                                    <p class="text-xs sm:text-sm font-black text-[#800020] italic leading-snug px-1">
                                        “{{ $conference['theme'] }}”
                                    </p>
                                    
                                    <div class="flex items-center justify-center gap-1.5 pt-1 text-[10px]">
                                        <span class="px-2 py-0.5 rounded bg-[#D45060] text-white font-black shadow-sm">Scopus Indexed</span>
                                        <span class="px-2 py-0.5 rounded bg-[#F3E6D5] text-[#800020] font-black border border-[#800020]/20">E3S / IOP Series</span>
                                    </div>
                                </div>

                                <!-- Poster Mockup Bottom Metadata -->
                                <div class="space-y-1.5 pt-3 border-t border-[#800020]/15 text-[11px]">
                                    <div class="flex items-center justify-between text-slate-700">
                                        <span class="font-bold text-[#D45060]">{{ __('Date:') }}</span>
                                        <span class="font-black text-[#800020]">{{ $conference['dates'] }}</span>
                                    </div>
                                    <div class="flex items-center justify-between text-slate-700">
                                        <span class="font-bold text-[#D45060]">{{ __('Venue:') }}</span>
                                        <span class="font-bold text-slate-800">Gedung CBT Kampus 2 UNWAHAS</span>
                                    </div>
                                    <div class="flex items-center justify-between text-slate-700">
                                        <span class="font-bold text-[#D45060]">{{ __('Submission:') }}</span>
                                        <span class="font-bold text-slate-800">OJS UNWAHAS Portal</span>
                                    </div>
                                </div>

                                <!-- Hover Overlay -->
                                <div class="absolute inset-0 bg-[#800020]/80 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <span class="px-4 py-2.5 rounded-xl bg-[#D45060] text-white font-black text-xs flex items-center gap-1.5 shadow-xl">
                                        <i data-lucide="zoom-in" class="w-4 h-4 text-white"></i>
                                        <span>{{ __('Click to View Full Poster') }}</span>
                                    </span>
                                </div>
                            </div>
                        @endif

                        <!-- Poster Action Bar Below -->
                        <div class="grid grid-cols-2 gap-2 mt-3 pt-1">
                            <button type="button" onclick="openPosterModal({{ !empty($conference['poster_image']) ? "'" . asset('storage/' . $conference['poster_image']) . "'" : 'null' }})" class="py-2.5 px-3 rounded-xl bg-[#F3E6D5] hover:bg-[#ebdcce] text-[#800020] font-black text-xs flex items-center justify-center gap-1.5 transition-colors border border-[#F3E6D5] shadow-sm">
                                <i data-lucide="eye" class="w-3.5 h-3.5 text-[#800020]"></i>
                                <span>{{ __('Preview Poster') }}</span>
                            </button>

                            <a href="{{ !empty($conference['poster_image']) ? asset('storage/' . $conference['poster_image']) : route('conference.brochure') }}" target="_blank" download class="py-2.5 px-3 rounded-xl bg-[#D45060] hover:bg-[#D45060]/90 text-white font-black text-xs flex items-center justify-center gap-1.5 transition-colors shadow-sm">
                                <i data-lucide="download" class="w-3.5 h-3.5 text-white"></i>
                                <span>{{ __('Download Flyer') }}</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Metric Badges Row (5 Prestige Stats - Clean & Solid with Cream Trims) -->
        <div class="mt-14 pt-10 border-t border-white/15 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 sm:gap-6 text-center">
            <div class="p-4 rounded-2xl bg-[#4d0013]/80 border border-[#F3E6D5]/30 shadow-sm">
                <span class="block text-3xl sm:text-4xl font-black text-[#D45060]">6</span>
                <span class="text-xs sm:text-sm text-slate-100 mt-1 block font-bold">{{ __('Interdisciplinary Tracks') }}</span>
                <span class="text-[10px] text-[#F3E6D5]/80">Economics to AI Governance</span>
            </div>
            <div class="p-4 rounded-2xl bg-[#4d0013]/80 border border-[#F3E6D5]/30 shadow-sm">
                <span class="block text-3xl sm:text-4xl font-black text-white">4</span>
                <span class="text-xs sm:text-sm text-slate-100 mt-1 block font-bold">{{ __('Continents Represented') }}</span>
                <span class="text-[10px] text-[#F3E6D5]/80">Asia, Australia, Middle East, Japan</span>
            </div>
            <div class="p-4 rounded-2xl bg-[#4d0013]/80 border border-[#F3E6D5]/30 shadow-sm">
                <span class="block text-2xl sm:text-3xl font-black text-[#D45060] pt-1">Scopus</span>
                <span class="text-xs sm:text-sm text-slate-100 mt-1 block font-bold">{{ __('Proceedings Publication') }}</span>
                <span class="text-[10px] text-[#F3E6D5]/80">E3S & IOP Conference Series</span>
            </div>
            <div class="p-4 rounded-2xl bg-[#4d0013]/80 border border-[#F3E6D5]/30 shadow-sm">
                <span class="block text-3xl sm:text-4xl font-black text-white">50+</span>
                <span class="text-xs sm:text-sm text-slate-100 mt-1 block font-bold">{{ __('Curated Research Topics') }}</span>
                <span class="text-[10px] text-[#F3E6D5]/80">Peer-Reviewed Papers</span>
            </div>
            <div class="p-4 rounded-2xl bg-[#4d0013]/80 border border-[#F3E6D5]/30 shadow-sm col-span-2 sm:col-span-1">
                <span class="block text-3xl sm:text-4xl font-black text-[#D45060]">2 Days</span>
                <span class="text-xs sm:text-sm text-slate-100 mt-1 block font-bold">{{ __('Hybrid Conference') }}</span>
                <span class="text-[10px] text-[#F3E6D5]/80">Plenary & Breakout Tracks</span>
            </div>
        </div>

    </div>
</section>

<!-- Interactive Full Poster Lightbox Modal -->
<div id="posterModal" class="fixed inset-0 z-50 hidden bg-[#38000d]/85 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="relative bg-[#4d0013] rounded-3xl border border-[#5C0017] max-w-lg w-full max-h-[92vh] flex flex-col shadow-2xl overflow-hidden animate-in fade-in zoom-in-95 duration-200">
        
        <!-- Modal Header -->
        <div class="flex items-center justify-between p-4 border-b border-white/10 bg-[#38000d]">
            <div class="flex items-center gap-2">
                <i data-lucide="image" class="w-4 h-4 text-[#D45060]"></i>
                <span class="text-xs font-bold text-white uppercase tracking-wider">{{ __('Official Conference Poster') }}</span>
            </div>
            <button type="button" onclick="closePosterModal()" class="p-1.5 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 transition-colors">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>

        <!-- Modal Body: Image or Interactive Card -->
        <div class="p-4 overflow-y-auto flex-1 flex items-center justify-center bg-[#38000d]/50">
            <img id="posterModalImg" src="" alt="Full Poster" class="hidden max-h-[70vh] rounded-xl shadow-lg object-contain">
            
            <div id="posterModalMockup" class="w-full max-w-sm rounded-2xl bg-[#5C0017] p-6 text-white border border-[#5C0017] space-y-4 shadow-xl">
                <div class="text-center space-y-1 pb-3 border-b border-white/15">
                    <span class="px-2 py-0.5 rounded bg-[#5C0017] text-[#D45060] text-[10px] font-bold uppercase">FEB UNWAHAS</span>
                    <h3 class="text-xl font-black text-white">ICSET 2027</h3>
                    <p class="text-xs text-[#D45060] font-bold uppercase">Call for Papers & Presentation</p>
                </div>
                <div class="space-y-2 text-center">
                    <p class="text-xs font-bold text-slate-200 italic">“{{ $conference['theme'] }}”</p>
                    <p class="text-[11px] text-slate-300">{{ $conference['dates'] }} • Kampus 2 UNWAHAS Semarang</p>
                </div>
                <div class="p-3 rounded-xl bg-[#4d0013] border border-[#5C0017]/50 text-[11px] space-y-1.5">
                    <div class="flex justify-between"><span class="text-slate-300">Proceedings:</span><span class="font-bold text-[#D45060]">Scopus (E3S / IOP)</span></div>
                    <div class="flex justify-between"><span class="text-slate-300">CFP Launch:</span><span class="font-bold text-white">01 Dec 2026</span></div>
                    <div class="flex justify-between"><span class="text-slate-300">Submission:</span><span class="font-bold text-[#D45060]">ejournal.unwahas.ac.id</span></div>
                </div>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="p-4 border-t border-white/10 bg-[#38000d] flex items-center justify-between gap-3">
            <button type="button" onclick="closePosterModal()" class="px-4 py-2 rounded-xl text-xs font-semibold text-slate-300 hover:text-white hover:bg-white/10 transition-colors">
                {{ __('Close') }}
            </button>
            <a id="posterModalDownloadBtn" href="{{ route('conference.brochure') }}" target="_blank" download class="px-5 py-2.5 rounded-xl bg-[#D45060] hover:bg-[#D45060]/90 text-white font-black text-xs flex items-center gap-2 shadow-md">
                <i data-lucide="download" class="w-4 h-4"></i>
                <span>{{ __('Download Flyer (PDF/High-Res)') }}</span>
            </a>
        </div>

    </div>
</div>

<script>
function openPosterModal(imgUrl) {
    const modal = document.getElementById('posterModal');
    const modalImg = document.getElementById('posterModalImg');
    const modalMockup = document.getElementById('posterModalMockup');
    const downloadBtn = document.getElementById('posterModalDownloadBtn');

    if (imgUrl) {
        modalImg.src = imgUrl;
        modalImg.classList.remove('hidden');
        modalMockup.classList.add('hidden');
        downloadBtn.href = imgUrl;
    } else {
        modalImg.classList.add('hidden');
        modalMockup.classList.remove('hidden');
        downloadBtn.href = "{{ route('conference.brochure') }}";
    }

    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closePosterModal() {
    const modal = document.getElementById('posterModal');
    modal.classList.add('hidden');
    document.body.style.overflow = 'auto';
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closePosterModal();
    }
});
</script>
