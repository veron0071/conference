@extends('admin.layout')

@section('title', 'Manage Partners & Sponsors | ICSET 2027 Admin')
@section('header_title', 'Academic Partners & Sponsors Management')

@section('content')
<div class="space-y-6" x-data="{ 
    editOpen: false, 
    editData: {}, 
    openEditModal(partner) { 
        this.editData = Object.assign({}, partner); 
        this.editOpen = true; 
    } 
}">

    <!-- Add Partner Form -->
    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm">
        <h3 class="text-sm font-bold text-slate-900 mb-4 pb-2 border-b border-slate-100 flex items-center gap-2">
            <i data-lucide="plus-circle" class="w-4 h-4 text-emerald-600"></i>
            <span>Add Partner / Co-Host / Sponsor</span>
        </h3>

        <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 sm:grid-cols-4 gap-4 text-xs">
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
                <label class="block font-bold text-slate-700 mb-1">Logo Abbreviation (Inisial)</label>
                <input type="text" name="logo_abbr" placeholder="e.g. UBD / RMIT / BSI" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Display Order</label>
                <input type="number" name="order" value="{{ $partners->count() + 1 }}" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div class="sm:col-span-2">
                <label class="block font-bold text-slate-700 mb-1">Upload Logo Image (File Logo PNG / SVG / JPG)</label>
                <input type="file" name="logo_image" accept="image/*" class="w-full px-2 py-1.5 rounded-xl border border-slate-200 bg-white text-slate-700 file:mr-2 file:py-1 file:px-2.5 file:rounded-lg file:border-0 file:text-[11px] file:font-bold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
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
                        <th class="py-3 px-4">Logo</th>
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
                            <div class="w-12 h-10 rounded-lg overflow-hidden bg-slate-100 border border-slate-200 flex items-center justify-center font-bold text-slate-800 p-1">
                                @if($partner->logo_image)
                                    <img src="{{ asset('storage/' . $partner->logo_image) }}" alt="{{ $partner->name }}" class="max-h-full max-w-full object-contain">
                                @else
                                    <span class="font-mono text-xs">{{ $partner->logo_abbr ?? substr($partner->name, 0, 3) }}</span>
                                @endif
                            </div>
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
                            <div class="flex items-center justify-end gap-1.5">
                                <button type="button" 
                                        @click="openEditModal({{ json_encode($partner) }})" 
                                        class="p-1.5 rounded-lg text-slate-400 hover:text-emerald-600 hover:bg-emerald-50 transition-colors" 
                                        title="Edit Partner">
                                    <i data-lucide="edit-3" class="w-4 h-4"></i>
                                </button>
                                <form action="{{ route('admin.partners.delete', $partner->id) }}" method="POST" onsubmit="return confirm('Delete this partner?');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-1.5 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-colors" title="Delete">
                                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                                    </button>
                                </form>
                            </div>
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

    <!-- Edit Partner Modal -->
    <div x-show="editOpen" 
         x-cloak 
         class="fixed inset-0 z-50 overflow-y-auto bg-slate-900/60 backdrop-blur-sm flex items-center justify-center p-4"
         @keydown.escape.window="editOpen = false">
        
        <div class="bg-white w-full max-w-xl rounded-2xl shadow-2xl border border-slate-200 overflow-hidden" 
             @click.away="editOpen = false">
            
            <div class="p-5 border-b border-slate-100 flex items-center justify-between bg-slate-50">
                <div class="flex items-center gap-2">
                    <i data-lucide="edit-3" class="w-4 h-4 text-emerald-600"></i>
                    <h3 class="text-sm font-bold text-slate-900">Edit Partner / Sponsor</h3>
                </div>
                <button type="button" @click="editOpen = false" class="p-1.5 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-200/60 transition-colors">
                    <i data-lucide="x" class="w-4 h-4"></i>
                </button>
            </div>

            <form :action="'{{ url('/admin/partners') }}/' + editData.id" method="POST" enctype="multipart/form-data" class="p-6 space-y-4 text-xs">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Partner / Institution Name</label>
                        <input type="text" name="name" x-model="editData.name" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Category</label>
                        <select name="category" x-model="editData.category" required class="w-full px-3 py-2 rounded-xl border border-slate-200 bg-white">
                            <option value="indexing">Indexing & Publication</option>
                            <option value="university">Co-Host University</option>
                            <option value="sponsor">Corporate Sponsor</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Subtitle / Status (Optional)</label>
                        <input type="text" name="subtitle" x-model="editData.subtitle" class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Logo Abbreviation</label>
                        <input type="text" name="logo_abbr" x-model="editData.logo_abbr" class="w-full px-3 py-2 rounded-xl border border-slate-200 uppercase font-mono">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Brand Color (Hex or name)</label>
                        <input type="text" name="color" x-model="editData.color" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Display Order</label>
                        <input type="number" name="order" x-model="editData.order" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block font-bold text-slate-700 mb-1">Logo Image (Optional)</label>
                        <div class="flex items-center gap-4 p-3 bg-slate-50 rounded-xl border border-slate-200">
                            <template x-if="editData.logo_image">
                                <div class="w-16 h-12 rounded-lg overflow-hidden bg-white border border-slate-200 p-1 flex items-center justify-center shrink-0">
                                    <img :src="'{{ asset('storage') }}/' + editData.logo_image" class="max-h-full max-w-full object-contain">
                                </div>
                            </template>
                            <div class="flex-1">
                                <input type="file" name="logo_image" accept="image/*" class="w-full text-[11px] text-slate-700 file:mr-2 file:py-1 file:px-2.5 file:rounded-lg file:border-0 file:text-[11px] file:font-bold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
                                <template x-if="editData.logo_image">
                                    <label class="mt-2 flex items-center gap-1.5 cursor-pointer text-[11px] text-rose-600 font-semibold">
                                        <input type="checkbox" name="remove_logo" value="1" class="rounded text-rose-600 focus:ring-rose-500">
                                        <span>Remove current logo</span>
                                    </label>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-2">
                    <button type="button" @click="editOpen = false" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="px-5 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold transition-colors">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
