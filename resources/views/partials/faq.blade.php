<section id="faq" class="py-20 lg:py-28 bg-white relative border-t border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-14">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-emerald-100 text-emerald-800 text-xs font-bold uppercase tracking-wider mb-4 border border-emerald-200">
                <i data-lucide="help-circle" class="w-4 h-4"></i>
                <span>{{ __('Frequently Asked Questions') }}</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ __('Everything You Need to Know') }}
            </h2>
            <p class="mt-4 text-base sm:text-lg text-slate-600">
                {{ __('Clear answers regarding paper submission, peer-review timelines, hybrid presentation modes, and registration policies.') }}
            </p>
        </div>

        <!-- FAQ Items -->
        <div class="space-y-4" id="faq-accordion">
            
            <!-- FAQ 1 -->
            <div class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden transition-all">
                <button type="button" class="w-full p-6 text-left flex items-center justify-between gap-4 font-extrabold text-slate-900 hover:text-emerald-700 transition-colors" onclick="toggleFaq(1)">
                    <span class="text-base sm:text-lg">{{ __('What language must submitted manuscripts be written in?') }}</span>
                    <i id="faq-icon-1" data-lucide="chevron-down" class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200"></i>
                </button>
                <div id="faq-ans-1" class="px-6 pb-6 text-slate-600 text-sm leading-relaxed hidden">
                    {{ __('All manuscripts submitted for publication in Scopus-indexed proceedings (E3S / IOP / Atlantis Press) must be written strictly in clear, academic English. Oral presentation slides should also be in English, though bilingual facilitation (English and Indonesian) is available during parallel Q&A sessions.') }}
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden transition-all">
                <button type="button" class="w-full p-6 text-left flex items-center justify-between gap-4 font-extrabold text-slate-900 hover:text-emerald-700 transition-colors" onclick="toggleFaq(2)">
                    <span class="text-base sm:text-lg">{{ __('Can I present virtually if I am unable to travel to Semarang?') }}</span>
                    <i id="faq-icon-2" data-lucide="chevron-down" class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200"></i>
                </button>
                <div id="faq-ans-2" class="px-6 pb-6 text-slate-600 text-sm leading-relaxed hidden">
                    {{ __('Yes! ICSET 2027 provides a comprehensive Virtual Hybrid conference platform. Online presenters will deliver live oral presentations via Zoom with full audience interaction and receive the identical Scopus proceedings publication route and digital certificate as onsite presenters.') }}
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden transition-all">
                <button type="button" class="w-full p-6 text-left flex items-center justify-between gap-4 font-extrabold text-slate-900 hover:text-emerald-700 transition-colors" onclick="toggleFaq(3)">
                    <span class="text-base sm:text-lg">{{ __('When will the official Letter of Acceptance (LoA) be issued?') }}</span>
                    <i id="faq-icon-3" data-lucide="chevron-down" class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200"></i>
                </button>
                <div id="faq-ans-3" class="px-6 pb-6 text-slate-600 text-sm leading-relaxed hidden">
                    {{ __('Double-blind peer review is conducted expeditiously by our international scientific committee. Formal Letters of Acceptance (LoA) alongside detailed reviewer feedback and editorial notes will be sent to corresponding authors by 15 June 2027.') }}
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden transition-all">
                <button type="button" class="w-full p-6 text-left flex items-center justify-between gap-4 font-extrabold text-slate-900 hover:text-emerald-700 transition-colors" onclick="toggleFaq(4)">
                    <span class="text-base sm:text-lg">{{ __('Does the presenter registration fee cover co-authors?') }}</span>
                    <i id="faq-icon-4" data-lucide="chevron-down" class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200"></i>
                </button>
                <div id="faq-ans-4" class="px-6 pb-6 text-slate-600 text-sm leading-relaxed hidden">
                    {{ __('One presenter fee covers the review, presentation slot, and publication submission for one manuscript, as well as attendance and kit for the primary registered presenter. Co-authors who wish to attend in person are warmly welcomed to register under the Participant / Non-Presenter tier.') }}
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden transition-all">
                <button type="button" class="w-full p-6 text-left flex items-center justify-between gap-4 font-extrabold text-slate-900 hover:text-emerald-700 transition-colors" onclick="toggleFaq(5)">
                    <span class="text-base sm:text-lg">{{ __('What similarity index and ethics standards apply for submissions?') }}</span>
                    <i id="faq-icon-5" data-lucide="chevron-down" class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200"></i>
                </button>
                <div id="faq-ans-5" class="px-6 pb-6 text-slate-600 text-sm leading-relaxed hidden">
                    {{ __('Manuscripts must represent original, unpublished scholarly research. In accordance with COPE (Committee on Publication Ethics) and publisher guidelines, all submissions will be screened via Turnitin and must exhibit a similarity index below 20%.') }}
                </div>
            </div>

            <!-- FAQ 6 -->
            <div class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden transition-all">
                <button type="button" class="w-full p-6 text-left flex items-center justify-between gap-4 font-extrabold text-slate-900 hover:text-emerald-700 transition-colors" onclick="toggleFaq(6)">
                    <span class="text-base sm:text-lg">{{ __('How do I verify my registration code and payment status?') }}</span>
                    <i id="faq-icon-6" data-lucide="chevron-down" class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200"></i>
                </button>
                <div id="faq-ans-6" class="px-6 pb-6 text-slate-600 text-sm leading-relaxed hidden">
                    {{ __('Upon submitting the online registration form, you will receive a unique Registration Code (e.g. ICSET27-XXXX). You can check your verification status at any time on our Check Status page or by contacting the secretariat via WhatsApp.') }}
                </div>
            </div>

        </div>

        <!-- Help Desk Banner -->
        <div class="mt-12 p-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-center flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="text-left">
                <h4 class="text-sm font-extrabold text-emerald-950">{{ __('Have other questions not listed here?') }}</h4>
                <p class="text-xs text-slate-600 mt-0.5">{{ __('Our secretariat team is ready to assist you via email or WhatsApp.') }}</p>
            </div>
            <a href="https://wa.me/6281225001927" target="_blank" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs inline-flex items-center gap-2 shadow-sm transition-colors flex-shrink-0">
                <i data-lucide="message-circle" class="w-4 h-4"></i>
                <span>{{ __('Contact Secretariat') }}</span>
            </a>
        </div>

    </div>
</section>

<script>
    function toggleFaq(id) {
        const ans = document.getElementById('faq-ans-' + id);
        const icon = document.getElementById('faq-icon-' + id);
        if (ans && icon) {
            ans.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        }
    }
</script>
