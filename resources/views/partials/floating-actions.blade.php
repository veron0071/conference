@php
    $confSettings = $conference ?? \App\Models\ConferenceSetting::getAllAsArray();
    $contactEnabled = ($confSettings['contact_floating_enabled'] ?? '1') == '1';
    $rawPhone = $confSettings['contact_whatsapp_number'] ?? $confSettings['phone'] ?? '6281225001927';
    $waNumber = preg_replace('/[^0-9]/', '', $rawPhone);
    if (!empty($waNumber) && substr($waNumber, 0, 1) === '0') {
        $waNumber = '62' . substr($waNumber, 1);
    }
    $waMsg = urlencode($confSettings['contact_whatsapp_message'] ?? 'Halo Panitia ICSET 2027, saya ingin bertanya seputar pendaftaran & pelaksanaan konferensi.');
    $waUrl = "https://wa.me/{$waNumber}?text={$waMsg}";
    $contactEmail = $confSettings['contact_email'] ?? $confSettings['email'] ?? 'icset@unwahas.ac.id';
    $contactName = $confSettings['contact_whatsapp_name'] ?? 'Sekretariat ICSET FEB UNWAHAS';
    $officeHours = $confSettings['contact_office_hours'] ?? 'Senin – Jumat: 08:00 – 16:00 WIB • Kampus 2 UNWAHAS';
@endphp

<!-- Unified Floating Action Buttons (Pojok Kanan Bawah) -->
<div id="floating-actions-stack" class="fixed bottom-6 right-6 z-50 flex flex-col items-end gap-2.5 font-sans select-none">

    <!-- 1. Floating Contact Us Button & Upward Card (Diatas Check Status) -->
    @if($contactEnabled)
    <div class="relative" id="floating-contact-container">
        
        <!-- Contact Popup Card (Opens Upwards) -->
        <div id="floating-contact-card" class="hidden absolute bottom-full right-0 mb-3 w-80 sm:w-88 bg-white rounded-3xl shadow-2xl border-2 border-[#F3E6D5] overflow-hidden transition-all duration-200 z-50 animate-in fade-in zoom-in-95">
            <!-- Header -->
            <div class="bg-[#800020] text-white p-4 flex items-center justify-between border-b border-[#F3E6D5]/20">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-xl bg-[#D45060] flex items-center justify-center text-white shadow-sm flex-shrink-0">
                        <i data-lucide="headphones" class="w-4 h-4"></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-black uppercase tracking-wider text-white">{{ __('Secretariat Helpdesk') }}</h4>
                        <p class="text-[10px] text-[#F3E6D5]/90 font-medium truncate max-w-[190px]">{{ $contactName }}</p>
                    </div>
                </div>
                <button type="button" onclick="toggleContactPopup()" class="p-1 rounded-lg text-white/70 hover:text-white hover:bg-white/10 transition-colors">
                    <i data-lucide="x" class="w-4 h-4"></i>
                </button>
            </div>

            <!-- Body Options -->
            <div class="p-4 space-y-2.5 bg-[#FFF9F2]/60 text-xs">
                <!-- WhatsApp Option -->
                <a href="{{ $waUrl }}" target="_blank" rel="noopener noreferrer" 
                   class="flex items-center gap-3 p-3 rounded-2xl bg-white hover:bg-emerald-50 border border-slate-200 hover:border-emerald-300 shadow-sm transition-all group">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500 text-white flex items-center justify-center shadow-sm group-hover:scale-105 transition-transform flex-shrink-0">
                        <i data-lucide="message-circle" class="w-5 h-5"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black text-slate-800 group-hover:text-emerald-700">WhatsApp Official</span>
                            <span class="text-[9px] font-bold px-1.5 py-0.5 rounded bg-emerald-100 text-emerald-800">Fast Response</span>
                        </div>
                        <p class="text-[11px] text-slate-500 truncate font-mono mt-0.5">+{{ $waNumber }}</p>
                    </div>
                </a>

                <!-- Email Option -->
                <a href="mailto:{{ $contactEmail }}?subject=Pertanyaan%20ICSET%202027" 
                   class="flex items-center gap-3 p-3 rounded-2xl bg-white hover:bg-rose-50 border border-slate-200 hover:border-[#D45060]/40 shadow-sm transition-all group">
                    <div class="w-10 h-10 rounded-xl bg-[#800020] text-white flex items-center justify-center shadow-sm group-hover:scale-105 transition-transform flex-shrink-0">
                        <i data-lucide="mail" class="w-5 h-5 text-[#F3E6D5]"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black text-slate-800 group-hover:text-[#800020]">Secretariat Email</span>
                            <span class="text-[9px] font-bold px-1.5 py-0.5 rounded bg-[#F3E6D5] text-[#800020]">Official</span>
                        </div>
                        <p class="text-[11px] text-slate-500 truncate mt-0.5">{{ $contactEmail }}</p>
                    </div>
                </a>

                <!-- Office Hours & Venue note -->
                @if(!empty($officeHours))
                <div class="p-2.5 rounded-xl bg-white border border-slate-200 text-[10px] text-slate-600 flex items-center gap-2 shadow-xs">
                    <i data-lucide="clock" class="w-3.5 h-3.5 text-[#D45060] flex-shrink-0"></i>
                    <span class="leading-tight">{{ $officeHours }}</span>
                </div>
                @endif
            </div>

            <!-- Footer Quick Info -->
            <div class="px-4 py-2 bg-slate-50 border-t border-slate-100 text-center">
                <span class="text-[10px] text-slate-400 font-medium">Faculty of Economics & Business • Universitas Wahid Hasyim</span>
            </div>
        </div>

        <!-- Contact Us Floating Trigger Button -->
        <button type="button" onclick="toggleContactPopup()" 
           class="inline-flex items-center gap-2 px-4 sm:px-4.5 py-2.5 rounded-full bg-[#D45060] hover:bg-[#be3849] text-white border-2 border-white/50 shadow-xl hover:shadow-[0_8px_20px_-4px_rgba(212,80,96,0.6)] hover:scale-105 active:scale-95 transition-all duration-300 group">
            <i data-lucide="message-circle" class="w-4 h-4 text-white group-hover:scale-110 transition-transform"></i>
            <span class="text-xs font-black tracking-wide text-white">
                {{ __('Contact Us') }}
            </span>
        </button>
    </div>
    @endif

    <!-- 2. Floating Check Status Tracker (Dibawah Contact Us) -->
    @if(!request()->routeIs('registration.check'))
    <a href="{{ route('registration.check') }}" 
       class="inline-flex items-center gap-2 px-4 sm:px-4.5 py-2.5 rounded-full bg-[#800020] hover:bg-[#5C0017] text-white border-2 border-[#F3E6D5]/50 shadow-2xl hover:shadow-[0_10px_25px_-5px_rgba(128,0,32,0.6)] hover:scale-105 active:scale-95 transition-all duration-300 group">
        <span class="relative flex h-2 w-2">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#D45060] opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2 w-2 bg-[#D45060]"></span>
        </span>
        <i data-lucide="search" class="w-3.5 h-3.5 text-[#F3E6D5] group-hover:text-white transition-colors"></i>
        <span class="text-xs font-black tracking-wide text-white group-hover:text-[#F3E6D5] transition-colors">
            {{ __('Check Status') }}
        </span>
    </a>
    @endif

</div>

<script>
    function toggleContactPopup() {
        const card = document.getElementById('floating-contact-card');
        if (card) {
            card.classList.toggle('hidden');
            if (!card.classList.contains('hidden') && window.lucide) {
                lucide.createIcons();
            }
        }
    }

    document.addEventListener('click', function(event) {
        const container = document.getElementById('floating-contact-container');
        const card = document.getElementById('floating-contact-card');
        if (container && card && !card.classList.contains('hidden')) {
            if (!container.contains(event.target)) {
                card.classList.add('hidden');
            }
        }
    });
</script>
