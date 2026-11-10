@extends('admin.layout')

@section('title', 'Manage Registration Fees | ICSET 2027 Admin')
@section('header_title', 'Tiered Registration Fees & Pricing Management')

@section('content')
<div class="space-y-6">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($fees as $fee)
        <div class="bg-white rounded-2xl p-6 border {{ $fee->is_featured ? 'border-2 border-emerald-500 shadow-md' : 'border-slate-200 shadow-sm' }} flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between mb-4 pb-3 border-b border-slate-100">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-emerald-700">Tier #{{ $fee->order }}</span>
                        <h3 class="text-base font-extrabold text-slate-900">{{ $fee->category }}</h3>
                    </div>
                    @if($fee->is_featured)
                    <span class="px-2.5 py-1 rounded-full bg-emerald-500 text-slate-950 text-[10px] font-black uppercase">Featured</span>
                    @endif
                </div>

                <form action="{{ route('admin.fees.update', $fee->id) }}" method="POST" class="space-y-4 text-xs">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Early Bird Price Label</label>
                        <input type="text" name="early_bird" value="{{ $fee->early_bird }}" required class="w-full px-3 py-2 rounded-xl border border-slate-200 font-bold text-emerald-800">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Regular Price Label</label>
                        <input type="text" name="regular" value="{{ $fee->regular }}" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="flex items-center gap-2 cursor-pointer font-bold text-slate-700">
                            <input type="checkbox" name="is_featured" value="1" {{ $fee->is_featured ? 'checked' : '' }} class="rounded text-emerald-600 focus:ring-emerald-500">
                            <span>Mark as Featured Tier (Highlighted on Homepage)</span>
                        </label>
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Package Features (One per line)</label>
                        <textarea name="features_text" rows="4" class="w-full px-3 py-2 rounded-xl border border-slate-200">{{ implode("\n", (array) $fee->features) }}</textarea>
                    </div>

                    <div class="pt-2 text-right">
                        <button type="submit" class="px-5 py-2.5 rounded-xl bg-slate-900 hover:bg-emerald-600 text-white font-bold transition-colors">
                            Update Tier
                        </button>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
