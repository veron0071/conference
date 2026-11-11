<section id="hero" class="relative pt-28 pb-16 lg:pt-36 lg:pb-24 hero-pattern text-white overflow-hidden border-b border-[#018790]/30">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Top Institutional Header Strip -->
        <div class="flex flex-wrap items-center justify-between gap-4 mb-8 pb-5 border-b border-white/15">
            <div class="flex items-center gap-3.5">
                <div class="h-11 flex items-center justify-center bg-white px-2 py-1 rounded-xl shadow-sm">
                    <img src="{{ asset('images/logo-feb-unwahas.png') }}" alt="Logo FEB UNWAHAS" class="h-9 w-auto object-contain">
                </div>
                <div>
                    <div class="flex items-center gap-2">
                        <span class="text-xs sm:text-sm font-extrabold text-white tracking-wide">UNIVERSITAS WAHID HASYIM</span>
                        <span class="text-[11px] font-bold px-2 py-0.5 rounded-md bg-[#018790]/40 text-[#00B7B5] border border-[#00B7B5]/40">FEB UNWAHAS</span>
                    </div>
                    <p class="text-[11px] text-slate-200 font-medium">Faculty of Economics and Business • Semarang, Central Java, Indonesia</p>
                </div>
            </div>

            <div class="flex items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#004853] border border-[#00B7B5]/40 text-xs font-bold text-[#00B7B5]">
                    <span class="w-2 h-2 rounded-full bg-[#00B7B5] animate-ping"></span>
                    <span>{{ __('Hybrid Conference') }}</span>
                </span>
                <span class="text-xs text-slate-200 hidden sm:inline">August 3 – 4, 2027</span>
            </div>
        </div>

        <!-- 2-Column Academic Hero Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <!-- Left Column: Title, Theme, and Actions (7 Cols) -->
            <div class="lg:col-span-7 space-y-6 text-left">
                
                <!-- Conference Subtitle Tag -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-[#018790]/30 border border-[#00B7B5]/40 text-[#00B7B5] text-xs font-bold uppercase tracking-wider">
                    <i data-lucide="award" class="w-3.5 h-3.5 text-[#00B7B5]"></i>
                    <span>{{ __('The 1st International Conference') }}</span>
                    <span class="text-slate-400">•</span>
                    <span class="text-white">ICSET 2027</span>
                </div>

                <!-- Main Heading (Solid Teal & Mint Highlight) -->
                <h1 class="text-3xl sm:text-5xl lg:text-5xl font-black tracking-tight leading-tight sm:leading-tight text-white">
                    <span>{{ __('International Conference on') }}</span> <br>
                    <span class="text-[#00B7B5]">
                        {{ __('Sustainable Economic Transformation') }}
                    </span>
                </h1>

                <!-- Official Theme Plaque -->
                <div class="bg-[#002d35]/90 rounded-2xl p-6 sm:p-7 border-l-4 border-l-[#00B7B5] border border-[#018790]/40 shadow-lg space-y-2.5">
                    <div class="flex items-center justify-between">
                        <span class="text-[11px] font-extrabold uppercase tracking-widest text-[#00B7B5] flex items-center gap-1.5">
                            <i data-lucide="bookmark" class="w-3.5 h-3.5 text-[#00B7B5]"></i>
                            <span>{{ __('Conference Main Theme') }}</span>
                        </span>
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-[#018790] text-white border border-[#00B7B5]/30">Official Symposium</span>
                    </div>
                    <p class="text-base sm:text-xl font-bold text-white leading-snug">
                        “{{ $conference['theme'] }}”
                    </p>
                    <p class="text-xs text-slate-300 leading-relaxed font-normal">
                        {{ $conference['sub_theme'] ?? __('Fostering Resilient Economies through Artificial Intelligence, Sustainable Finance, and ESG Integration.') }}
                    </p>
                </div>

                <!-- Key Value Badges (Publication & Co-Hosts) -->
                <div class="flex flex-wrap items-center gap-2 pt-1 text-xs text-slate-300">
                    <span class="font-bold text-slate-300 text-[11px] uppercase mr-1">{{ __('Indexed By:') }}</span>
                    <span class="px-2.5 py-1 rounded-md bg-[#002d35] text-[#00B7B5] border border-[#00B7B5]/40 font-bold flex items-center gap-1 shadow-sm">
                        <i data-lucide="check" class="w-3 h-3 text-[#00B7B5]"></i> Scopus
                    </span>
                    <span class="px-2.5 py-1 rounded-md bg-[#002d35] text-slate-200 border border-[#018790]/50 font-bold">Web of Science (CPCI)</span>
                    <span class="px-2.5 py-1 rounded-md bg-[#002d35] text-[#00B7B5] border border-[#00B7B5]/40 font-bold">E3S / IOP Proceedings</span>
                </div>

                <!-- Action CTA Buttons (Clean Solid, No Gradients) -->
                <div class="flex flex-wrap items-center gap-3 pt-3">
                    <a href="{{ route('registration.index') }}" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl font-black text-sm text-[#005461] bg-[#00B7B5] hover:bg-[#00B7B5]/90 shadow-md hover:shadow-lg transition-all duration-200">
                        <i data-lucide="user-plus" class="w-4 h-4 text-[#005461]"></i>
                        <span>{{ __('Register Participant') }}</span>
                    </a>
                    
                    <a href="#cfp" class="inline-flex items-center gap-2 px-5 py-3.5 rounded-xl font-bold text-sm text-white bg-[#018790] hover:bg-[#004853] border border-[#00B7B5]/40 shadow-sm transition-all duration-200">
                        <i data-lucide="send" class="w-4 h-4 text-[#00B7B5]"></i>
                        <span>{{ __('Call for Papers') }}</span>
                    </a>

                    <a href="{{ route('conference.brochure') }}" target="_blank" class="inline-flex items-center gap-2 px-5 py-3.5 rounded-xl font-bold text-sm text-slate-100 bg-[#004853] hover:bg-[#003c45] border border-[#018790] shadow transition-colors">
                        <i data-lucide="download" class="w-4 h-4 text-[#00B7B5]"></i>
                        <span>{{ __('Download Brochure') }}</span>
                    </a>

                    <a href="#programme" class="inline-flex items-center gap-2 px-4 py-3.5 rounded-xl font-bold text-xs text-slate-200 hover:text-white hover:bg-white/10 transition-colors">
                        <i data-lucide="clock" class="w-4 h-4 text-[#00B7B5]"></i>
                        <span>{{ __('Daily Programme') }}</span>
                    </a>
                </div>

            </div>

            <!-- Right Column: Official Conference Poster Frame & Interactive Lightbox (5 Cols) -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="relative w-full max-w-sm sm:max-w-md">
                    
                    <!-- Outer Card Frame (Clean Solid Flat Design) -->
                    <div class="relative bg-[#002d35] rounded-3xl p-3 sm:p-4 border-2 border-[#00B7B5]/40 shadow-xl overflow-hidden group">
                        
                        <!-- Top Tag -->
                        <div class="flex items-center justify-between px-3 py-2 mb-2 border-b border-white/10">
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-[#00B7B5]"></span>
                                <span class="text-xs font-black uppercase tracking-wider text-white">{{ __('Official Event Poster') }}</span>
                            </div>
                            <span class="text-[10px] font-black px-2.5 py-0.5 rounded-full bg-[#00B7B5]/20 text-[#00B7B5] border border-[#00B7B5]/40">
                                Call for Papers
                            </span>
                        </div>

                        <!-- Poster Container -->
                        @if(!empty($conference['poster_image']))
                            <!-- Uploaded Custom Poster -->
                            <div class="relative aspect-[1/1.414] rounded-2xl overflow-hidden cursor-pointer bg-[#002228] border border-[#018790]/50" onclick="openPosterModal('{{ asset('storage/' . $conference['poster_image']) }}')">
                                <img src="{{ asset('storage/' . $conference['poster_image']) }}" alt="ICSET 2027 Conference Poster" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                
                                <div class="absolute inset-0 bg-[#002228]/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <span class="px-4 py-2.5 rounded-xl bg-[#00B7B5] text-[#005461] font-black text-xs flex items-center gap-1.5 shadow-xl">
                                        <i data-lucide="zoom-in" class="w-4 h-4 text-[#005461]"></i>
                                        <span>{{ __('Click to View Full Poster') }}</span>
                                    </span>
                                </div>
                            </div>
                        @else
                            <!-- Default Academic Conference Poster Card (Solid, No Gradients) -->
                            <div class="relative aspect-[1/1.414] rounded-2xl overflow-hidden cursor-pointer bg-[#003c45] p-5 sm:p-6 text-white flex flex-col justify-between border border-[#018790] select-none shadow-lg" onclick="openPosterModal(null)">
                                
                                <!-- Poster Mockup Top -->
                                <div class="text-center space-y-1.5 border-b border-white/15 pb-3">
                                    <div class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded bg-[#018790] text-[#00B7B5] text-[10px] font-black tracking-wider uppercase border border-[#00B7B5]/40">
                                        <i data-lucide="award" class="w-3 h-3 text-[#00B7B5]"></i>
                                        <span>UNWAHAS FEB • INTERNATIONAL HYBRID CONFERENCE</span>
                                    </div>
                                    <h3 class="text-xl sm:text-2xl font-black tracking-tight leading-tight text-white uppercase mt-1">
                                        ICSET 2027
                                    </h3>
                                    <p class="text-[11px] text-[#00B7B5] font-black uppercase tracking-widest">
                                        Call For Papers & Presentation
                                    </p>
                                </div>

                                <!-- Poster Mockup Center -->
                                <div class="text-center py-2 space-y-2">
                                    <span class="text-[10px] font-extrabold uppercase tracking-widest text-slate-300 block">{{ __('Official Theme:') }}</span>
                                    <p class="text-xs sm:text-sm font-bold text-white italic leading-snug px-1">
                                        “{{ $conference['theme'] }}”
                                    </p>
                                    
                                    <div class="flex items-center justify-center gap-1.5 pt-1 text-[10px]">
                                        <span class="px-2 py-0.5 rounded bg-[#00B7B5] text-[#005461] font-black shadow-sm">Scopus Indexed</span>
                                        <span class="px-2 py-0.5 rounded bg-[#018790] text-white font-bold border border-[#00B7B5]/30">E3S / IOP Series</span>
                                    </div>
                                </div>

                                <!-- Poster Mockup Bottom Metadata -->
                                <div class="space-y-1.5 pt-3 border-t border-white/15 text-[11px]">
                                    <div class="flex items-center justify-between text-slate-200">
                                        <span class="font-bold text-[#00B7B5]">{{ __('Date:') }}</span>
                                        <span class="font-bold text-white">{{ $conference['dates'] }}</span>
                                    </div>
                                    <div class="flex items-center justify-between text-slate-200">
                                        <span class="font-bold text-[#00B7B5]">{{ __('Venue:') }}</span>
                                        <span class="font-bold text-white">Gedung CBT Kampus 2 UNWAHAS</span>
                                    </div>
                                    <div class="flex items-center justify-between text-slate-200">
                                        <span class="font-bold text-[#00B7B5]">{{ __('Submission:') }}</span>
                                        <span class="font-bold text-white">OJS UNWAHAS Portal</span>
                                    </div>
                                </div>

                                <!-- Hover Overlay -->
                                <div class="absolute inset-0 bg-[#002228]/70 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <span class="px-4 py-2.5 rounded-xl bg-[#00B7B5] text-[#005461] font-black text-xs flex items-center gap-1.5 shadow-xl">
                                        <i data-lucide="zoom-in" class="w-4 h-4 text-[#005461]"></i>
                                        <span>{{ __('Click to View Full Poster') }}</span>
                                    </span>
                                </div>
                            </div>
                        @endif

                        <!-- Poster Action Bar Below -->
                        <div class="grid grid-cols-2 gap-2 mt-3 pt-1">
                            <button type="button" onclick="openPosterModal({{ !empty($conference['poster_image']) ? "'" . asset('storage/' . $conference['poster_image']) . "'" : 'null' }})" class="py-2.5 px-3 rounded-xl bg-[#004853] hover:bg-[#003c45] text-white font-bold text-xs flex items-center justify-center gap-1.5 transition-colors border border-[#018790] shadow-sm">
                                <i data-lucide="eye" class="w-3.5 h-3.5 text-[#00B7B5]"></i>
                                <span>{{ __('Preview Poster') }}</span>
                            </button>

                            <a href="{{ !empty($conference['poster_image']) ? asset('storage/' . $conference['poster_image']) : route('conference.brochure') }}" target="_blank" download class="py-2.5 px-3 rounded-xl bg-[#00B7B5] hover:bg-[#00B7B5]/90 text-[#005461] font-black text-xs flex items-center justify-center gap-1.5 transition-colors shadow-sm">
                                <i data-lucide="download" class="w-3.5 h-3.5 text-[#005461]"></i>
                                <span>{{ __('Download Flyer') }}</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Metric Badges Row (5 Prestige Stats - Clean & Solid) -->
        <div class="mt-14 pt-10 border-t border-white/15 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 sm:gap-6 text-center">
            <div class="p-4 rounded-2xl bg-[#002d35]/80 border border-[#018790]/40 shadow-sm">
                <span class="block text-3xl sm:text-4xl font-black text-[#00B7B5]">6</span>
                <span class="text-xs sm:text-sm text-slate-100 mt-1 block font-bold">{{ __('Interdisciplinary Tracks') }}</span>
                <span class="text-[10px] text-slate-300">Economics to AI Governance</span>
            </div>
            <div class="p-4 rounded-2xl bg-[#002d35]/80 border border-[#018790]/40 shadow-sm">
                <span class="block text-3xl sm:text-4xl font-black text-white">4</span>
                <span class="text-xs sm:text-sm text-slate-100 mt-1 block font-bold">{{ __('Continents Represented') }}</span>
                <span class="text-[10px] text-slate-300">Asia, Australia, Middle East, Japan</span>
            </div>
            <div class="p-4 rounded-2xl bg-[#002d35]/80 border border-[#018790]/40 shadow-sm">
                <span class="block text-2xl sm:text-3xl font-black text-[#00B7B5] pt-1">Scopus</span>
                <span class="text-xs sm:text-sm text-slate-100 mt-1 block font-bold">{{ __('Proceedings Publication') }}</span>
                <span class="text-[10px] text-slate-300">E3S & IOP Conference Series</span>
            </div>
            <div class="p-4 rounded-2xl bg-[#002d35]/80 border border-[#018790]/40 shadow-sm">
                <span class="block text-3xl sm:text-4xl font-black text-white">50+</span>
                <span class="text-xs sm:text-sm text-slate-100 mt-1 block font-bold">{{ __('Curated Research Topics') }}</span>
                <span class="text-[10px] text-slate-300">Peer-Reviewed Papers</span>
            </div>
            <div class="p-4 rounded-2xl bg-[#002d35]/80 border border-[#018790]/40 shadow-sm col-span-2 sm:col-span-1">
                <span class="block text-3xl sm:text-4xl font-black text-[#00B7B5]">2 Days</span>
                <span class="text-xs sm:text-sm text-slate-100 mt-1 block font-bold">{{ __('Hybrid Conference') }}</span>
                <span class="text-[10px] text-slate-300">Plenary & Breakout Tracks</span>
            </div>
        </div>

    </div>
</section>

<!-- Interactive Full Poster Lightbox Modal -->
<div id="posterModal" class="fixed inset-0 z-50 hidden bg-[#002228]/85 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="relative bg-[#002d35] rounded-3xl border border-[#018790] max-w-lg w-full max-h-[92vh] flex flex-col shadow-2xl overflow-hidden animate-in fade-in zoom-in-95 duration-200">
        
        <!-- Modal Header -->
        <div class="flex items-center justify-between p-4 border-b border-white/10 bg-[#002228]">
            <div class="flex items-center gap-2">
                <i data-lucide="image" class="w-4 h-4 text-[#00B7B5]"></i>
                <span class="text-xs font-bold text-white uppercase tracking-wider">{{ __('Official Conference Poster') }}</span>
            </div>
            <button type="button" onclick="closePosterModal()" class="p-1.5 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 transition-colors">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>

        <!-- Modal Body: Image or Interactive Card -->
        <div class="p-4 overflow-y-auto flex-1 flex items-center justify-center bg-[#002228]/50">
            <img id="posterModalImg" src="" alt="Full Poster" class="hidden max-h-[70vh] rounded-xl shadow-lg object-contain">
            
            <div id="posterModalMockup" class="w-full max-w-sm rounded-2xl bg-[#003c45] p-6 text-white border border-[#018790] space-y-4 shadow-xl">
                <div class="text-center space-y-1 pb-3 border-b border-white/15">
                    <span class="px-2 py-0.5 rounded bg-[#018790] text-[#00B7B5] text-[10px] font-bold uppercase">FEB UNWAHAS</span>
                    <h3 class="text-xl font-black text-white">ICSET 2027</h3>
                    <p class="text-xs text-[#00B7B5] font-bold uppercase">Call for Papers & Presentation</p>
                </div>
                <div class="space-y-2 text-center">
                    <p class="text-xs font-bold text-slate-200 italic">“{{ $conference['theme'] }}”</p>
                    <p class="text-[11px] text-slate-300">{{ $conference['dates'] }} • Kampus 2 UNWAHAS Semarang</p>
                </div>
                <div class="p-3 rounded-xl bg-[#002d35] border border-[#018790]/50 text-[11px] space-y-1.5">
                    <div class="flex justify-between"><span class="text-slate-300">Proceedings:</span><span class="font-bold text-[#00B7B5]">Scopus (E3S / IOP)</span></div>
                    <div class="flex justify-between"><span class="text-slate-300">CFP Launch:</span><span class="font-bold text-white">01 Dec 2026</span></div>
                    <div class="flex justify-between"><span class="text-slate-300">Submission:</span><span class="font-bold text-[#00B7B5]">ejournal.unwahas.ac.id</span></div>
                </div>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="p-4 border-t border-white/10 bg-[#002228] flex items-center justify-between gap-3">
            <button type="button" onclick="closePosterModal()" class="px-4 py-2 rounded-xl text-xs font-semibold text-slate-300 hover:text-white hover:bg-white/10 transition-colors">
                {{ __('Close') }}
            </button>
            <a id="posterModalDownloadBtn" href="{{ route('conference.brochure') }}" target="_blank" download class="px-5 py-2.5 rounded-xl bg-[#00B7B5] hover:bg-[#00B7B5]/90 text-[#005461] font-black text-xs flex items-center gap-2 shadow-md">
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
