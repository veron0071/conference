<section id="faq" class="py-20 lg:py-28 bg-white relative border-t border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-14">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-[#F4F4F4] text-[#005461] text-xs font-bold uppercase tracking-wider mb-4 border border-[#018790]/30 shadow-sm">
                <i data-lucide="help-circle" class="w-4 h-4 text-[#018790]"></i>
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
            @forelse($faqs as $faq)
            <div class="bg-[#F4F4F4] rounded-2xl border border-slate-200 overflow-hidden transition-all">
                <button type="button" class="w-full p-6 text-left flex items-center justify-between gap-4 font-extrabold text-slate-900 hover:text-[#005461] transition-colors" onclick="toggleFaq({{ $faq->id }})">
                    <span class="text-base sm:text-lg">{{ __($faq->question) }}</span>
                    <i id="faq-icon-{{ $faq->id }}" data-lucide="chevron-down" class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200"></i>
                </button>
                <div id="faq-ans-{{ $faq->id }}" class="px-6 pb-6 text-slate-600 text-sm leading-relaxed hidden">
                    {{ __($faq->answer) }}
                </div>
            </div>
            @empty
            <div class="p-8 text-center bg-slate-50 rounded-2xl border border-slate-200 text-slate-500">
                {{ __('No FAQs available at the moment.') }}
            </div>
            @endforelse
        </div>

        <!-- Help Desk Banner -->
        <div class="mt-12 p-6 rounded-2xl bg-[#F4F4F4] border border-[#018790]/30 text-center flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="text-left">
                <h4 class="text-sm font-extrabold text-[#005461]">{{ __('Have other questions not listed here?') }}</h4>
                <p class="text-xs text-slate-600 mt-0.5">{{ __('Our secretariat team is ready to assist you via email or WhatsApp.') }}</p>
            </div>
            <a href="https://wa.me/6281225001927" target="_blank" class="px-5 py-2.5 rounded-xl bg-[#005461] hover:bg-[#018790] text-white font-bold text-xs inline-flex items-center gap-2 shadow-sm transition-colors flex-shrink-0">
                <i data-lucide="message-circle" class="w-4 h-4 text-[#00B7B5]"></i>
                <span>{{ __('Contact Secretariat') }}</span>
            </a>
        </div>

    </div>
</section>

<script>
function toggleFaq(id) {
    const ans = document.getElementById('faq-ans-' + id);
    const icon = document.getElementById('faq-icon-' + id);
    if (!ans) return;
    
    const isHidden = ans.classList.contains('hidden');
    
    // Close other FAQs
    document.querySelectorAll('[id^="faq-ans-"]').forEach(el => el.classList.add('hidden'));
    document.querySelectorAll('[id^="faq-icon-"]').forEach(el => el.classList.remove('rotate-180'));

    if (isHidden) {
        ans.classList.remove('hidden');
        if (icon) icon.classList.add('rotate-180');
    }
}
</script>
