@extends('admin.layout')

@section('title', 'Manage Speakers | ICSET 2027 Admin')
@section('header_title', 'Keynote & Invited Speakers Management')

@section('content')
<div class="space-y-6" x-data="{ 
    editOpen: false, 
    editData: {}, 
    openEditModal(spk) { 
        this.editData = Object.assign({}, spk); 
        this.editOpen = true; 
    } 
}">

    <!-- Add Speaker Accordion / Card -->
    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm">
        <h3 class="text-sm font-bold text-slate-900 mb-4 pb-2 border-b border-slate-100 flex items-center gap-2">
            <i data-lucide="user-plus" class="w-4 h-4 text-emerald-600"></i>
            <span>Add New Speaker</span>
        </h3>

        <form action="{{ route('admin.speakers.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
            @csrf

            <div>
                <label class="block font-bold text-slate-700 mb-1">Speaker Role</label>
                <select name="role" required class="w-full px-3 py-2 rounded-xl border border-slate-200 bg-white">
                    <option value="Invited Speaker">Invited Speaker</option>
                    <option value="Keynote Speaker (Honorary)">Keynote Speaker (Honorary)</option>
                    <option value="Plenary Speaker">Plenary Speaker</option>
                </select>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Full Name & Title</label>
                <input type="text" name="name" required placeholder="e.g. Prof. John Doe, Ph.D"
                    class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Academic Credentials (optional)</label>
                <input type="text" name="title" placeholder="e.g. CA, FCPA, ACMA"
                    class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Faculty / School</label>
                <input type="text" name="institution" placeholder="e.g. School of Business Economics"
                    class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">University / Organization</label>
                <input type="text" name="university" placeholder="e.g. Nagasaki University"
                    class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Country & Flag Emoji</label>
                <div class="flex gap-2">
                    <input type="text" name="country" placeholder="Japan" class="flex-1 px-3 py-2 rounded-xl border border-slate-200">
                    <input type="text" name="flag" placeholder="🇯🇵" class="w-16 px-3 py-2 rounded-xl border border-slate-200 text-center">
                </div>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Topic / Research Focus</label>
                <input type="text" name="topic" placeholder="e.g. ESG Reporting & Sustainable Governance"
                    class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Status & Order</label>
                <div class="grid grid-cols-2 gap-2">
                    <select name="status" class="w-full px-3 py-2 rounded-xl border border-slate-200 bg-white">
                        <option value="Confirmed">Confirmed</option>
                        <option value="In Confirmation">In Confirmation</option>
                    </select>
                    <input type="number" name="order" value="{{ $speakers->count() + 1 }}" class="w-full px-3 py-2 rounded-xl border border-slate-200">
                </div>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Speaker Photo (Foto Pembicara)</label>
                <input type="file" name="image" accept="image/*" class="w-full px-2 py-1.5 rounded-xl border border-slate-200 bg-white text-slate-700 file:mr-2 file:py-1 file:px-2.5 file:rounded-lg file:border-0 file:text-[11px] file:font-bold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
            </div>

            <div class="sm:col-span-3 pt-2 text-right">
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold transition-colors">
                    Save Speaker
                </button>
            </div>
        </form>
    </div>

    <!-- Current Speakers Table -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-5 border-b border-slate-100 flex items-center justify-between">
            <h3 class="text-sm font-bold text-slate-900">Current Speakers List</h3>
            <span class="text-xs text-slate-500 font-semibold">{{ $speakers->count() }} active speakers</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 text-slate-500 uppercase font-bold text-[10px]">
                    <tr>
                        <th class="px-5 py-3">Order</th>
                        <th class="px-5 py-3">Photo</th>
                        <th class="px-5 py-3">Speaker</th>
                        <th class="px-5 py-3">Affiliation / Country</th>
                        <th class="px-5 py-3">Topic</th>
                        <th class="px-5 py-3">Status</th>
                        <th class="px-5 py-3 text-right">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($speakers as $spk)
                    <tr class="hover:bg-slate-50/80 transition-colors">
                        <td class="px-5 py-3.5 font-bold text-slate-400">
                            #{{ $spk->order }}
                        </td>
                        <td class="px-5 py-3.5">
                            <div class="w-10 h-10 rounded-xl overflow-hidden bg-emerald-50 border border-slate-200 flex items-center justify-center font-bold text-emerald-800 text-xs">
                                @if($spk->image)
                                    <img src="{{ asset('storage/' . $spk->image) }}" alt="{{ $spk->name }}" class="w-full h-full object-cover">
                                @else
                                    {{ strtoupper(substr($spk->name, 0, 2)) }}
                                @endif
                            </div>
                        </td>
                        <td class="px-5 py-3.5">
                            <span class="font-bold text-slate-900 block">{{ $spk->name }}</span>
                            <span class="text-[11px] text-emerald-700 font-semibold">{{ $spk->role }}</span>
                        </td>
                        <td class="px-5 py-3.5">
                            <span class="text-slate-800 font-semibold block">{{ $spk->university }}</span>
                            <span class="text-[11px] text-slate-500">{{ $spk->country }} {{ $spk->flag }}</span>
                        </td>
                        <td class="px-5 py-3.5 text-slate-600">
                            {{ $spk->topic ?? '-' }}
                        </td>
                        <td class="px-5 py-3.5">
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold 
                                @if($spk->status == 'Confirmed') bg-emerald-100 text-emerald-800
                                @else bg-amber-100 text-amber-800
                                @endif">
                                {{ $spk->status }}
                            </span>
                        </td>
                        <td class="px-5 py-3.5 text-right whitespace-nowrap">
                            <div class="flex items-center justify-end gap-1.5">
                                <button type="button" 
                                        @click="openEditModal({{ json_encode($spk) }})" 
                                        class="p-1.5 rounded-lg text-slate-400 hover:text-emerald-600 hover:bg-emerald-50 transition-colors" 
                                        title="Edit Speaker">
                                    <i data-lucide="edit-3" class="w-4 h-4"></i>
                                </button>
                                <form action="{{ route('admin.speakers.delete', $spk->id) }}" method="POST" onsubmit="return confirm('Delete this speaker?');" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-1.5 rounded-lg text-slate-400 hover:text-rose-600 hover:bg-rose-50 transition-colors" title="Delete">
                                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Edit Speaker Modal -->
    <div x-show="editOpen" 
         x-cloak 
         class="fixed inset-0 z-50 overflow-y-auto bg-slate-900/60 backdrop-blur-sm flex items-center justify-center p-4"
         @keydown.escape.window="editOpen = false">
        
        <div class="bg-white w-full max-w-2xl rounded-2xl shadow-2xl border border-slate-200 overflow-hidden" 
             @click.away="editOpen = false">
            
            <div class="p-5 border-b border-slate-100 flex items-center justify-between bg-slate-50">
                <div class="flex items-center gap-2">
                    <i data-lucide="edit-3" class="w-4 h-4 text-emerald-600"></i>
                    <h3 class="text-sm font-bold text-slate-900">Edit Speaker Information</h3>
                </div>
                <button type="button" @click="editOpen = false" class="p-1.5 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-200/60 transition-colors">
                    <i data-lucide="x" class="w-4 h-4"></i>
                </button>
            </div>

            <form :action="'{{ url('/admin/speakers') }}/' + editData.id" method="POST" enctype="multipart/form-data" class="p-6 space-y-4 text-xs">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Speaker Role</label>
                        <select name="role" x-model="editData.role" required class="w-full px-3 py-2 rounded-xl border border-slate-200 bg-white">
                            <option value="Invited Speaker">Invited Speaker</option>
                            <option value="Keynote Speaker (Honorary)">Keynote Speaker (Honorary)</option>
                            <option value="Plenary Speaker">Plenary Speaker</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Full Name & Title</label>
                        <input type="text" name="name" x-model="editData.name" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Academic Credentials (optional)</label>
                        <input type="text" name="title" x-model="editData.title" class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Faculty / School</label>
                        <input type="text" name="institution" x-model="editData.institution" class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">University / Organization</label>
                        <input type="text" name="university" x-model="editData.university" class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Country & Flag Emoji</label>
                        <div class="flex gap-2">
                            <input type="text" name="country" x-model="editData.country" class="flex-1 px-3 py-2 rounded-xl border border-slate-200">
                            <input type="text" name="flag" x-model="editData.flag" class="w-16 px-3 py-2 rounded-xl border border-slate-200 text-center">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block font-bold text-slate-700 mb-1">Topic / Research Focus</label>
                        <input type="text" name="topic" x-model="editData.topic" class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Status</label>
                        <select name="status" x-model="editData.status" class="w-full px-3 py-2 rounded-xl border border-slate-200 bg-white">
                            <option value="Confirmed">Confirmed</option>
                            <option value="In Confirmation">In Confirmation</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Display Order</label>
                        <input type="number" name="order" x-model="editData.order" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block font-bold text-slate-700 mb-1">Update Photo (Optional)</label>
                        <div class="flex items-center gap-4 p-3 bg-slate-50 rounded-xl border border-slate-200">
                            <template x-if="editData.image">
                                <div class="w-12 h-12 rounded-lg overflow-hidden bg-white border border-slate-200 shrink-0">
                                    <img :src="'{{ asset('storage') }}/' + editData.image" class="w-full h-full object-cover">
                                </div>
                            </template>
                            <div class="flex-1">
                                <input type="file" name="image" accept="image/*" class="w-full text-[11px] text-slate-700 file:mr-2 file:py-1 file:px-2.5 file:rounded-lg file:border-0 file:text-[11px] file:font-bold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
                                <template x-if="editData.image">
                                    <label class="mt-2 flex items-center gap-1.5 cursor-pointer text-[11px] text-rose-600 font-semibold">
                                        <input type="checkbox" name="remove_image" value="1" class="rounded text-rose-600 focus:ring-rose-500">
                                        <span>Remove current photo</span>
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
