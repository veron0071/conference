<section id="cfp" class="py-20 lg:py-28 bg-[#002d35] text-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-[#018790]/30 text-[#00B7B5] text-xs font-bold uppercase tracking-wider mb-4 border border-[#00B7B5]/40">
                <i data-lucide="file-check-2" class="w-4 h-4 text-[#00B7B5]"></i>
                <span>{{ __('Call For Papers & Submission') }}</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                {{ __('Submit Your Original Research') }}
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-300">
                {{ __('Opening formally on 01 December 2026. Prepare your manuscript according to the official E3S Proceedings template.') }}
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left: Guidelines & Scope -->
            <div class="lg:col-span-7 space-y-6">
                
                <div class="bg-[#003c45] rounded-2xl p-6 sm:p-8 border border-[#018790] space-y-4 shadow-sm">
                    <h3 class="text-xl font-bold text-white flex items-center gap-2.5">
                        <i data-lucide="info" class="w-5 h-5 text-[#00B7B5]"></i>
                        <span>{{ __('Author Guidelines & Requirements') }}</span>
                    </h3>
                    <p class="text-slate-200 text-sm leading-relaxed">
                        {{ __('All submissions must represent original, unpublished work not under concurrent review elsewhere. Submissions must adhere strictly to the following parameters:') }}
                    </p>
                    
                    <ul class="space-y-3 pt-2 text-sm text-slate-200">
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-md bg-[#018790] text-[#00B7B5] flex items-center justify-center flex-shrink-0 text-xs font-bold mt-0.5">1</span>
                            <span><strong>{{ __('Language:') }}</strong> {{ __('Manuscripts must be written in proficient academic English.') }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-md bg-[#018790] text-[#00B7B5] flex items-center justify-center flex-shrink-0 text-xs font-bold mt-0.5">2</span>
                            <span><strong>{{ __('Manuscript Length:') }}</strong> {{ __('6 to 10 pages including figures, tables, and references.') }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-md bg-[#018790] text-[#00B7B5] flex items-center justify-center flex-shrink-0 text-xs font-bold mt-0.5">3</span>
                            <span><strong>{{ __('Format & Template:') }}</strong> {{ __('Strict compliance with the official E3S Conference Proceedings two-column layout.') }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-md bg-[#018790] text-[#00B7B5] flex items-center justify-center flex-shrink-0 text-xs font-bold mt-0.5">4</span>
                            <span><strong>{{ __('Similarity Index:') }}</strong> {{ __('Plagiarism score must be strictly below 20% (Turnitin/iThenticate).') }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-md bg-[#018790] text-[#00B7B5] flex items-center justify-center flex-shrink-0 text-xs font-bold mt-0.5">5</span>
                            <span><strong>{{ __('Peer Review:') }}</strong> {{ __('Double-blind evaluation by at least two independent expert reviewers.') }}</span>
                        </li>
                    </ul>
                </div>

                <!-- Submission Steps -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="bg-[#003c45] rounded-xl p-4 border border-[#018790]/60">
                        <span class="text-xs font-bold text-[#00B7B5] block mb-1">Step 01</span>
                        <h4 class="text-sm font-bold text-white mb-1">{{ __('Format Paper') }}</h4>
                        <p class="text-xs text-slate-300">{{ __('Download and apply the E3S template file to your work.') }}</p>
                    </div>

                    <div class="bg-[#003c45] rounded-xl p-4 border border-[#018790]/60">
                        <span class="text-xs font-bold text-[#00B7B5] block mb-1">Step 02</span>
                        <h4 class="text-sm font-bold text-white mb-1">{{ __('OJS Submission') }}</h4>
                        <p class="text-xs text-slate-300">{{ __('Submit via the integrated UNWAHAS OJS portal system.') }}</p>
                    </div>

                    <div class="bg-[#003c45] rounded-xl p-4 border border-[#018790]/60">
                        <span class="text-xs font-bold text-[#00B7B5] block mb-1">Step 03</span>
                        <h4 class="text-sm font-bold text-white mb-1">{{ __('Peer Review') }}</h4>
                        <p class="text-xs text-slate-300">{{ __('Receive revision feedback and final acceptance notice.') }}</p>
                    </div>
                </div>

            </div>

            <!-- Right: Action & Portal Card (Solid Flat Design, No Gradients) -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Main Action Card -->
                <div class="icset-cfp-card bg-[#005461] rounded-2xl p-7 sm:p-8 border border-[#018790] shadow-xl relative">
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#018790]/60 text-[#00B7B5] text-xs font-bold mb-4 border border-[#00B7B5]/30">
                        <i data-lucide="clock" class="w-3.5 h-3.5"></i>
                        <span>{{ __('Target Launch: 01 December 2026') }}</span>
                    </div>

                    <h3 class="text-2xl font-bold text-white mb-3">
                        {{ __('Online Conference Portal (OJS UNWAHAS)') }}
                    </h3>
                    
                    <p class="text-sm text-slate-200 mb-6 leading-relaxed">
                        {{ __('Submissions and editorial workflows are integrated through the official Open Journal Systems (OJS) of Universitas Wahid Hasyim to ensure standardized peer reviews and archival integrity.') }}
                    </p>

                    <div class="space-y-3">
                        <a href="https://ejournal.unwahas.ac.id" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center gap-2 w-full py-3.5 px-4 rounded-xl text-center text-sm font-black text-[#005461] bg-[#00B7B5] hover:bg-[#00B7B5]/90 transition-colors shadow-md">
                            <i data-lucide="external-link" class="w-4 h-4 text-[#005461]"></i>
                            <span>{{ __('Go to OJS Submission Portal') }}</span>
                        </a>

                        <a href="#" onclick="alert('The E3S Conference Template will be downloadable upon Call for Papers launch on 01 December 2026.'); return false;" class="flex items-center justify-center gap-2 w-full py-3.5 px-4 rounded-xl text-center text-sm font-bold text-white bg-[#003c45] hover:bg-[#004853] border border-[#018790] transition-colors shadow-sm">
                            <i data-lucide="file-text" class="w-4 h-4 text-[#00B7B5]"></i>
                            <span>{{ __('Download E3S Template (.docx)') }}</span>
                        </a>

                        <a href="{{ route('conference.brochure') }}" target="_blank" class="flex items-center justify-center gap-2 w-full py-3.5 px-4 rounded-xl text-center text-sm font-bold text-white bg-[#018790] hover:bg-[#004853] border border-[#00B7B5]/40 transition-colors shadow-sm">
                            <i data-lucide="download" class="w-4 h-4 text-[#00B7B5]"></i>
                            <span>{{ __('Download Official Brochure & CFP Flyer') }}</span>
                        </a>
                    </div>

                    <div class="mt-6 pt-5 border-t border-white/15 text-center">
                        <span class="text-xs text-slate-300 block mb-1">{{ __('Need assistance with your submission?') }}</span>
                        <a href="mailto:{{ $conference['email'] }}" class="text-xs font-bold text-[#00B7B5] hover:underline">
                            {{ $conference['email'] }}
                        </a>
                    </div>
                </div>

                <!-- Co-Host Partnership Callout -->
                <div class="bg-[#003c45] rounded-2xl p-6 border border-[#018790] flex items-start gap-4 shadow-sm">
                    <div class="w-10 h-10 rounded-xl bg-[#018790] text-[#00B7B5] flex items-center justify-center flex-shrink-0">
                        <i data-lucide="handshake" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white">{{ __('Call for Co-Host Conference & Sponsorship') }}</h4>
                        <p class="text-xs text-slate-300 mt-1 leading-relaxed">
                            {{ __('Universities and institutional partners interested in joining ICSET 2027 as Co-Hosts or Sponsors are invited to connect with the organizing secretariat.') }}
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
