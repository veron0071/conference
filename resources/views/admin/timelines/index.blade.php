@extends('admin.layout')

@section('title', 'Manage Timeline | ICSET 2027 Admin')
@section('header_title', 'Timeline & Deadlines Management')

@section('content')
<div class="space-y-6" x-data="{ 
    editOpen: false, 
    editData: {}, 
    openEditModal(tm) { 
        this.editData = Object.assign({}, tm); 
        this.editOpen = true; 
    } 
}">

    <!-- Add Milestone Form -->
    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm">
        <h3 class="text-sm font-bold text-slate-900 mb-4 pb-2 border-b border-slate-100 flex items-center gap-2">
            <i data-lucide="plus-circle" class="w-4 h-4 text-emerald-600"></i>
            <span>Add Timeline Milestone</span>
        </h3>

        <form action="{{ route('admin.timelines.store') }}" method="POST" class="grid grid-cols-1 sm:grid-cols-4 gap-4 text-xs">
            @csrf

            <div>
                <label class="block font-bold text-slate-700 mb-1">Date String</label>
                <input type="text" name="date_string" required placeholder="e.g. 01 December 2026"
                    class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div class="sm:col-span-2">
                <label class="block font-bold text-slate-700 mb-1">Milestone Title</label>
                <input type="text" name="title" required placeholder="e.g. Full Paper Submission Deadline"
                    class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Badge Tag</label>
                <select name="badge" class="w-full px-3 py-2 rounded-xl border border-slate-200 bg-white">
                    <option value="Kickoff">Kickoff</option>
                    <option value="Deadline">Deadline</option>
                    <option value="Review">Review</option>
                    <option value="Payment">Payment</option>
                    <option value="Final Prep">Final Prep</option>
                    <option value="Main Event">Main Event</option>
                </select>
            </div>

            <div class="sm:col-span-3">
                <label class="block font-bold text-slate-700 mb-1">Description</label>
                <input type="text" name="description" placeholder="Brief explanation of this milestone"
                    class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Display Order</label>
                <input type="number" name="order" value="{{ $timelines->count() + 1 }}"
                    class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div class="sm:col-span-4 text-right">
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold transition-colors">
                    Add Milestone
                </button>
            </div>
        </form>
    </div>

    <!-- Timelines Table -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-5 border-b border-slate-100 flex items-center justify-between">
            <h3 class="text-sm font-bold text-slate-900">Current Timeline Roadmap</h3>
            <span class="text-xs text-slate-500 font-semibold">{{ $timelines->count() }} milestones scheduled</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 text-slate-500 uppercase font-bold text-[10px]">
                    <tr>
                        <th class="px-5 py-3">Order</th>
                        <th class="px-5 py-3">Date</th>
                        <th class="px-5 py-3">Milestone Title & Description</th>
                        <th class="px-5 py-3">Badge</th>
                        <th class="px-5 py-3 text-right">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($timelines as $tm)
                    <tr class="hover:bg-slate-50/80 transition-colors">
                        <td class="px-5 py-3.5 font-bold text-slate-400">#{{ $tm->order }}</td>
                        <td class="px-5 py-3.5 font-bold text-brand-600 whitespace-nowrap">{{ $tm->date_string }}</td>
                        <td class="px-5 py-3.5">
                            <span class="font-bold text-slate-900 block">{{ $tm->title }}</span>
                            <span class="text-[11px] text-slate-500">{{ $tm->description }}</span>
                        </td>
                        <td class="px-5 py-3.5 whitespace-nowrap">
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-slate-100 text-slate-700">
                                {{ $tm->badge }}
                            </span>
                        </td>
                        <td class="px-5 py-3.5 text-right whitespace-nowrap">
                            <div class="flex items-center justify-end gap-1.5">
                                <button type="button" 
                                        @click="openEditModal({{ json_encode($tm) }})" 
                                        class="p-1.5 rounded-lg text-slate-400 hover:text-emerald-600 hover:bg-emerald-50 transition-colors" 
                                        title="Edit Milestone">
                                    <i data-lucide="edit-3" class="w-4 h-4"></i>
                                </button>
                                <form action="{{ route('admin.timelines.delete', $tm->id) }}" method="POST" onsubmit="return confirm('Delete this milestone?');" class="inline-block">
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

    <!-- Edit Timeline Modal -->
    <div x-show="editOpen" 
         x-cloak 
         class="fixed inset-0 z-50 overflow-y-auto bg-slate-900/60 backdrop-blur-sm flex items-center justify-center p-4"
         @keydown.escape.window="editOpen = false">
        
        <div class="bg-white w-full max-w-xl rounded-2xl shadow-2xl border border-slate-200 overflow-hidden" 
             @click.away="editOpen = false">
            
            <div class="p-5 border-b border-slate-100 flex items-center justify-between bg-slate-50">
                <div class="flex items-center gap-2">
                    <i data-lucide="edit-3" class="w-4 h-4 text-emerald-600"></i>
                    <h3 class="text-sm font-bold text-slate-900">Edit Timeline Milestone</h3>
                </div>
                <button type="button" @click="editOpen = false" class="p-1.5 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-200/60 transition-colors">
                    <i data-lucide="x" class="w-4 h-4"></i>
                </button>
            </div>

            <form :action="'{{ url('/admin/timelines') }}/' + editData.id" method="POST" class="p-6 space-y-4 text-xs">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Date String</label>
                        <input type="text" name="date_string" x-model="editData.date_string" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Badge Tag</label>
                        <select name="badge" x-model="editData.badge" class="w-full px-3 py-2 rounded-xl border border-slate-200 bg-white">
                            <option value="Kickoff">Kickoff</option>
                            <option value="Deadline">Deadline</option>
                            <option value="Review">Review</option>
                            <option value="Payment">Payment</option>
                            <option value="Final Prep">Final Prep</option>
                            <option value="Main Event">Main Event</option>
                        </select>
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block font-bold text-slate-700 mb-1">Milestone Title</label>
                        <input type="text" name="title" x-model="editData.title" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block font-bold text-slate-700 mb-1">Description</label>
                        <input type="text" name="description" x-model="editData.description" class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Display Order</label>
                        <input type="number" name="order" x-model="editData.order" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
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
