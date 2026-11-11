@extends('admin.layout')

@section('title', 'Manage Organizing Committee | ICSET 2027 Admin')
@section('header_title', 'Organizing & Scientific Committee Management')

@section('content')
<div class="space-y-6" x-data="{ 
    editOpen: false, 
    editData: {}, 
    openEditModal(comm) { 
        this.editData = Object.assign({}, comm); 
        this.editOpen = true; 
    } 
}">

    <!-- Add Committee Member Form -->
    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm">
        <h3 class="text-sm font-bold text-slate-900 mb-4 pb-2 border-b border-slate-100 flex items-center gap-2">
            <i data-lucide="user-plus" class="w-4 h-4 text-emerald-600"></i>
            <span>Add Committee Member</span>
        </h3>

        <form action="{{ route('admin.committees.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 sm:grid-cols-4 gap-4 text-xs">
            @csrf

            <div class="sm:col-span-2">
                <label class="block font-bold text-slate-700 mb-1">Full Name & Academic Title</label>
                <input type="text" name="name" required placeholder="e.g. Prof. Dr. H. Hasan / Atieq Amjadallah Alfie, SE., M.Si" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div class="sm:col-span-2">
                <label class="block font-bold text-slate-700 mb-1">Conference Role / Responsibility</label>
                <input type="text" name="role" required placeholder="e.g. General Chair / Scientific Committee Chair" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Committee Division</label>
                <select name="division" required class="w-full px-3 py-2 rounded-xl border border-slate-200 bg-white">
                    <option value="patron">Advisory Board & Patron (Pelindung / Pengarah)</option>
                    <option value="leadership" selected>Conference Executive Committee (Pimpinan / Organizing)</option>
                    <option value="academic_head">Academic Department Heads (Ketua Program Studi)</option>
                    <option value="member">Scientific Reviewer / Committee Member</option>
                </select>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Institutional Affiliation</label>
                <input type="text" name="affiliation" value="Universitas Wahid Hasyim" placeholder="e.g. Universitas Wahid Hasyim" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Display Order</label>
                <input type="number" name="order" value="{{ $committees->count() + 1 }}" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Member Photo (Optional)</label>
                <input type="file" name="image" accept="image/*" class="w-full px-2 py-1.5 rounded-xl border border-slate-200 bg-white text-slate-700 file:mr-2 file:py-1 file:px-2.5 file:rounded-lg file:border-0 file:text-[11px] file:font-bold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
            </div>

            <div class="sm:col-span-4 text-right">
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold transition-colors shadow">
                    Add Member
                </button>
            </div>
        </form>
    </div>

    <!-- Committees Table -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-5 border-b border-slate-100 flex items-center justify-between">
            <h3 class="text-sm font-bold text-slate-900">Current Committee Directory</h3>
            <span class="text-xs text-slate-500 font-semibold">{{ $committees->count() }} active members</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 text-slate-500 font-bold uppercase tracking-wider border-b border-slate-100">
                    <tr>
                        <th class="py-3 px-4">Order</th>
                        <th class="py-3 px-4">Photo</th>
                        <th class="py-3 px-4">Name</th>
                        <th class="py-3 px-4">Role & Affiliation</th>
                        <th class="py-3 px-4">Division</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($committees as $comm)
                    <tr class="hover:bg-slate-50/80 transition-colors">
                        <td class="py-3 px-4 font-bold text-slate-700">
                            {{ $comm->order }}
                        </td>
                        <td class="py-3 px-4">
                            <div class="w-10 h-10 rounded-xl overflow-hidden bg-slate-100 border border-slate-200 flex items-center justify-center font-bold text-slate-700">
                                @if($comm->image)
                                    <img src="{{ asset('storage/' . $comm->image) }}" alt="{{ $comm->name }}" class="w-full h-full object-cover">
                                @else
                                    {{ strtoupper(substr($comm->name, 0, 2)) }}
                                @endif
                            </div>
                        </td>
                        <td class="py-3 px-4 font-bold text-slate-900 text-sm">
                            {{ $comm->name }}
                        </td>
                        <td class="py-3 px-4">
                            <div class="font-bold text-emerald-800">{{ $comm->role }}</div>
                            <div class="text-[11px] text-slate-500">{{ $comm->affiliation ?? 'Universitas Wahid Hasyim' }}</div>
                        </td>
                        <td class="py-3 px-4">
                            <span class="px-2.5 py-0.5 rounded-full font-bold uppercase text-[10px]
                                @if($comm->division === 'patron') bg-purple-100 text-purple-800 border border-purple-200
                                @elseif($comm->division === 'leadership') bg-emerald-100 text-emerald-800 border border-emerald-200
                                @elseif($comm->division === 'academic_head') bg-sky-100 text-sky-800 border border-sky-200
                                @else bg-slate-100 text-slate-700 @endif">
                                {{ $comm->division }}
                            </span>
                        </td>
                        <td class="py-3 px-4 text-right whitespace-nowrap">
                            <div class="flex items-center justify-end gap-1.5">
                                <button type="button" 
                                        @click="openEditModal({{ json_encode($comm) }})" 
                                        class="p-1.5 rounded-lg text-slate-400 hover:text-emerald-600 hover:bg-emerald-50 transition-colors" 
                                        title="Edit Committee Member">
                                    <i data-lucide="edit-3" class="w-4 h-4"></i>
                                </button>
                                <form action="{{ route('admin.committees.delete', $comm->id) }}" method="POST" onsubmit="return confirm('Remove this committee member?');" class="inline">
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
                        <td colspan="6" class="p-8 text-center text-slate-400">
                            No committee members added yet.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Edit Committee Member Modal -->
    <div x-show="editOpen" 
         x-cloak 
         class="fixed inset-0 z-50 overflow-y-auto bg-slate-900/60 backdrop-blur-sm flex items-center justify-center p-4"
         @keydown.escape.window="editOpen = false">
        
        <div class="bg-white w-full max-w-xl rounded-2xl shadow-2xl border border-slate-200 overflow-hidden" 
             @click.away="editOpen = false">
            
            <div class="p-5 border-b border-slate-100 flex items-center justify-between bg-slate-50">
                <div class="flex items-center gap-2">
                    <i data-lucide="edit-3" class="w-4 h-4 text-emerald-600"></i>
                    <h3 class="text-sm font-bold text-slate-900">Edit Committee Member</h3>
                </div>
                <button type="button" @click="editOpen = false" class="p-1.5 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-200/60 transition-colors">
                    <i data-lucide="x" class="w-4 h-4"></i>
                </button>
            </div>

            <form :action="'{{ url('/admin/committees') }}/' + editData.id" method="POST" enctype="multipart/form-data" class="p-6 space-y-4 text-xs">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Full Name & Title</label>
                        <input type="text" name="name" x-model="editData.name" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Role / Position</label>
                        <input type="text" name="role" x-model="editData.role" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Division</label>
                        <select name="division" x-model="editData.division" required class="w-full px-3 py-2 rounded-xl border border-slate-200 bg-white">
                            <option value="patron">Patron / Pelindung</option>
                            <option value="leadership">Steering & Conference Chairs</option>
                            <option value="academic_head">Program & Academic Heads</option>
                            <option value="member">Secretariat & Organizing Staff</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Affiliation / Faculty</label>
                        <input type="text" name="affiliation" x-model="editData.affiliation" class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Display Order</label>
                        <input type="number" name="order" x-model="editData.order" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block font-bold text-slate-700 mb-1">Photo (Optional)</label>
                        <div class="flex items-center gap-4 p-3 bg-slate-50 rounded-xl border border-slate-200">
                            <template x-if="editData.image">
                                <div class="w-12 h-12 rounded-xl overflow-hidden bg-white border border-slate-200 shrink-0">
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
