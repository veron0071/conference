@extends('admin.layout')

@section('title', 'Manage Partners & Sponsors | ICSET 2027 Admin')
@section('header_title', 'Academic Partners & Sponsors Management')

@section('content')
<div class="space-y-6">

    <!-- Add Partner Form -->
    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm">
        <h3 class="text-sm font-bold text-slate-900 mb-4 pb-2 border-b border-slate-100 flex items-center gap-2">
            <i data-lucide="plus-circle" class="w-4 h-4 text-emerald-600"></i>
            <span>Add Partner / Co-Host / Sponsor</span>
        </h3>

        <form action="{{ route('admin.partners.store') }}" method="POST" class="grid grid-cols-1 sm:grid-cols-4 gap-4 text-xs">
            @csrf

            <div class="sm:col-span-2">
                <label class="block font-bold text-slate-700 mb-1">Partner / Institution Name</label>
                <input type="text" name="name" required placeholder="e.g. Scopus / Universiti Brunei Darussalam" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Category</label>
                <select name="category" required class="w-full px-3 py-2 rounded-xl border border-slate-200 bg-white">
                    <option value="indexing">Indexing & Proceedings</option>
                    <option value="university">University Co-Host</option>
                    <option value="sponsor">Sponsor & Banking</option>
                </select>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Color Theme</label>
                <select name="color" class="w-full px-3 py-2 rounded-xl border border-slate-200 bg-white">
                    <option value="emerald">Emerald</option>
                    <option value="sky">Sky Blue</option>
                    <option value="indigo">Indigo</option>
                    <option value="amber">Amber</option>
                    <option value="rose">Rose</option>
                    <option value="teal">Teal</option>
                    <option value="slate">Slate</option>
                </select>
            </div>

            <div class="sm:col-span-2">
                <label class="block font-bold text-slate-700 mb-1">Subtitle / Country</label>
                <input type="text" name="subtitle" placeholder="e.g. Elsevier Database / Melbourne, Australia" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Logo Abbreviation</label>
                <input type="text" name="logo_abbr" placeholder="e.g. UBD / RMIT / BSI" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Display Order</label>
                <input type="number" name="order" value="{{ $partners->count() + 1 }}" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div class="sm:col-span-4 text-right">
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold transition-colors">
                    Add Partner
                </button>
            </div>
        </form>
    </div>

    <!-- Partners Table -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-5 border-b border-slate-100 flex items-center justify-between">
            <h3 class="text-sm font-bold text-slate-900">Current Partners & Sponsors</h3>
            <span class="text-xs text-slate-500 font-semibold">{{ $partners->count() }} active partners</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 text-slate-500 font-bold uppercase tracking-wider border-b border-slate-100">
                    <tr>
                        <th class="py-3 px-4">Order</th>
                        <th class="py-3 px-4">Abbr</th>
                        <th class="py-3 px-4">Category</th>
                        <th class="py-3 px-4">Partner Name & Subtitle</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($partners as $partner)
                    <tr class="hover:bg-slate-50/80 transition-colors">
                        <td class="py-3 px-4 font-bold text-slate-700">
                            {{ $partner->order }}
                        </td>
                        <td class="py-3 px-4">
                            <span class="px-2.5 py-1 rounded-lg bg-slate-100 font-mono font-bold text-slate-800">
                                {{ $partner->logo_abbr ?? '-' }}
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="px-2.5 py-0.5 rounded-full font-bold uppercase text-[10px]
                                @if($partner->category === 'indexing') bg-emerald-100 text-emerald-800
                                @elseif($partner->category === 'university') bg-sky-100 text-sky-800
                                @else bg-amber-100 text-amber-800 @endif">
                                {{ $partner->category }}
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="font-extrabold text-slate-900 text-sm">{{ $partner->name }}</div>
                            @if($partner->subtitle)
                            <div class="text-slate-500 text-[11px]">{{ $partner->subtitle }}</div>
                            @endif
                        </td>
                        <td class="py-3 px-4 text-right whitespace-nowrap">
                            <form action="{{ route('admin.partners.delete', $partner->id) }}" method="POST" onsubmit="return confirm('Delete this partner?');" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-1.5 text-rose-600 hover:bg-rose-50 rounded-lg transition-colors" title="Delete">
                                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="p-8 text-center text-slate-400">
                            No partners configured yet.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
