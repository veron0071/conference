@extends('layouts.app')

@section('title', __('Participant Registration') . ' | ICSET 2027')

@section('content')
<section class="pt-32 pb-20 bg-slate-50 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-10">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-500 hover:text-emerald-600 mb-4 transition-colors">
                <i data-lucide="arrow-left" class="w-4 h-4"></i>
                <span>{{ __('Back to Homepage') }}</span>
            </a>
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-emerald-100 text-emerald-800 text-xs font-bold uppercase tracking-wider mb-3 border border-emerald-200">
                <i data-lucide="user-plus" class="w-4 h-4"></i>
                <span>{{ __('Official Registration') }}</span>
            </div>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ __('ICSET 2027 Registration Portal') }}
            </h1>
            <p class="mt-2 text-sm sm:text-base text-slate-600 max-w-xl mx-auto">
                {{ __('Register as an author/presenter or attendee for the 1st International Conference on Sustainable Economic Transformation.') }}
            </p>
        </div>

        @if($errors->any())
        <div class="mb-8 p-4 rounded-xl bg-rose-50 border border-rose-200 text-rose-800 text-sm">
            <div class="font-bold mb-1 flex items-center gap-2">
                <i data-lucide="alert-circle" class="w-4 h-4 text-rose-600"></i>
                <span>{{ __('Please correct the errors below:') }}</span>
            </div>
            <ul class="list-disc list-inside space-y-1 text-xs">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Form Card -->
        <div class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-200 shadow-xl">
            <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <!-- Section 1: Personal Details -->
                <div>
                    <h3 class="text-lg font-bold text-slate-900 mb-4 pb-2 border-b border-slate-100 flex items-center gap-2">
                        <i data-lucide="user" class="w-5 h-5 text-emerald-600"></i>
                        <span>{{ __('1. Personal & Institutional Information') }}</span>
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="sm:col-span-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                {{ __('Full Name (with Academic Titles)') }} <span class="text-rose-500">*</span>
                            </label>
                            <input type="text" name="full_name" value="{{ old('full_name') }}" required
                                placeholder="e.g. Dr. Ahmad Fauzi, SE., M.Si."
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-sm transition-all text-slate-900 bg-white">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                {{ __('Academic Title / Role') }}
                            </label>
                            <input type="text" name="academic_title" value="{{ old('academic_title') }}"
                                placeholder="e.g. Lecturer / Researcher / Student"
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-sm transition-all text-slate-900 bg-white">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                {{ __('Email Address') }} <span class="text-rose-500">*</span>
                            </label>
                            <input type="email" name="email" value="{{ old('email') }}" required
                                placeholder="name@university.ac.id"
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-sm transition-all text-slate-900 bg-white">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                {{ __('WhatsApp / Mobile Number') }} <span class="text-rose-500">*</span>
                            </label>
                            <input type="text" name="phone" value="{{ old('phone') }}" required
                                placeholder="+62 812-3456-7890"
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-sm transition-all text-slate-900 bg-white">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                {{ __('Country') }} <span class="text-rose-500">*</span>
                            </label>
                            <input type="text" name="country" value="{{ old('country', 'Indonesia') }}" required
                                placeholder="Indonesia, Brunei, Malaysia, Japan, UAE..."
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-sm transition-all text-slate-900 bg-white">
                        </div>

                        <div class="sm:col-span-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                {{ __('Affiliation / University / Institution') }} <span class="text-rose-500">*</span>
                            </label>
                            <input type="text" name="institution" value="{{ old('institution') }}" required
                                placeholder="e.g. Universitas Wahid Hasyim, Semarang"
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-sm transition-all text-slate-900 bg-white">
                        </div>
                    </div>
                </div>

                <!-- Section 2: Registration Category & Attendance -->
                <div>
                    <h3 class="text-lg font-bold text-slate-900 mb-4 pb-2 border-b border-slate-100 flex items-center gap-2">
                        <i data-lucide="tag" class="w-5 h-5 text-emerald-600"></i>
                        <span>{{ __('2. Participation Category & Mode') }}</span>
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                {{ __('Registration Tier / Category') }} <span class="text-rose-500">*</span>
                            </label>
                            <select name="category" id="category-select" required
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-sm transition-all bg-white text-slate-900">
                                <option value="">-- {{ __('Registration Tier / Category') }} --</option>
                                @foreach($fees as $f)
                                <option value="{{ $f->category }}" {{ (old('category', $selectedCategory) == $f->category) ? 'selected' : '' }}>
                                    {{ __($f->category) }} (Early: {{ $f->early_bird }})
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                {{ __('Attendance Mode') }} <span class="text-rose-500">*</span>
                            </label>
                            <select name="attendance_type" required
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-sm transition-all bg-white text-slate-900">
                                <option value="onsite" {{ old('attendance_type') == 'onsite' ? 'selected' : '' }}>{{ __('Onsite (Gedung CBT UNWAHAS, Semarang)') }}</option>
                                <option value="online" {{ old('attendance_type') == 'online' ? 'selected' : '' }}>{{ __('Online (Virtual Hybrid Platform)') }}</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Paper Details -->
                <div id="paper-section">
                    <h3 class="text-lg font-bold text-slate-900 mb-4 pb-2 border-b border-slate-100 flex items-center gap-2">
                        <i data-lucide="file-text" class="w-5 h-5 text-emerald-600"></i>
                        <span>{{ __('3. Manuscript & Presentation Track (For Presenters)') }}</span>
                    </h3>

                    <div class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                {{ __('Target Conference Track') }}
                            </label>
                            <select name="track_id"
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-sm transition-all bg-white text-slate-900">
                                <option value="">-- {{ __('Target Conference Track') }} --</option>
                                @foreach($tracks as $tr)
                                <option value="{{ $tr->id }}" {{ (old('track_id', $selectedTrack) == $tr->id) ? 'selected' : '' }}>
                                    {{ $tr->code }}: {{ __($tr->title) }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                {{ __('Paper Title (if available)') }}
                            </label>
                            <input type="text" name="paper_title" value="{{ old('paper_title') }}"
                                placeholder="Enter preliminary or final paper title"
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-sm transition-all text-slate-900 bg-white">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                {{ __('Abstract / Summary') }}
                            </label>
                            <textarea name="abstract" rows="4"
                                placeholder="Paste abstract summary (150-250 words)"
                                class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-sm transition-all text-slate-900 bg-white">{{ old('abstract') }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Section 4: Payment Upload -->
                <div>
                    <h3 class="text-lg font-bold text-slate-900 mb-4 pb-2 border-b border-slate-100 flex items-center gap-2">
                        <i data-lucide="credit-card" class="w-5 h-5 text-emerald-600"></i>
                        <span>{{ __('4. Payment Information (Optional at Registration)') }}</span>
                    </h3>

                    <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 mb-4 text-xs sm:text-sm text-slate-700 space-y-1">
                        <p class="font-bold text-emerald-900">{{ __('Transfer Banking Account:') }}</p>
                        <p>{{ __('Bank:') }} <strong>{{ $conference['bank_name'] ?? 'Bank Syariah Indonesia (BSI)' }}</strong></p>
                        <p>{{ __('Account:') }} <strong>{{ $conference['bank_account'] ?? 'Panitia ICSET FEB UNWAHAS' }}</strong></p>
                        <p class="text-[11px] text-slate-500 mt-1">{{ __('*Payment receipt can also be submitted later after receiving paper acceptance notification.') }}</p>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                            {{ __('Upload Payment Proof (JPG, PNG, PDF max 5MB)') }}
                        </label>
                        <input type="file" name="payment_proof" accept=".jpg,.jpeg,.png,.pdf"
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-300 text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-emerald-50 file:text-emerald-800 hover:file:bg-emerald-100">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <p class="text-xs text-slate-500">
                        {{ __('By submitting, you agree to the ICSET 2027 publication and conference terms.') }}
                    </p>
                    <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-xl font-extrabold text-white bg-emerald-600 hover:bg-emerald-700 shadow-lg shadow-emerald-600/30 transition-all text-sm">
                        <i data-lucide="check-circle" class="w-4 h-4"></i>
                        <span>{{ __('Submit Registration') }}</span>
                    </button>
                </div>
            </form>
        </div>

    </div>
</section>
@endsection
