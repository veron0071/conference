@extends('admin.layout')

@section('title', 'Manage Programme Schedule | ICSET 2027 Admin')
@section('header_title', '2-Day Programme Schedule Management')

@section('content')
<div class="space-y-6" x-data="{ 
    editOpen: false, 
    editData: {}, 
    openEditModal(prog) { 
        this.editData = Object.assign({}, prog); 
        this.editOpen = true; 
    } 
}">

    <!-- Add Programme Session Form -->
    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm">
        <h3 class="text-sm font-bold text-slate-900 mb-4 pb-2 border-b border-slate-100 flex items-center gap-2">
            <i data-lucide="plus-circle" class="w-4 h-4 text-emerald-600"></i>
            <span>Add Programme Session</span>
        </h3>

        <form action="{{ route('admin.programmes.store') }}" method="POST" class="grid grid-cols-1 sm:grid-cols-4 gap-4 text-xs">
            @csrf

            <div>
                <label class="block font-bold text-slate-700 mb-1">Day</label>
                <select name="day" required class="w-full px-3 py-2 rounded-xl border border-slate-200 bg-white">
                    <option value="1">Day 1: Tuesday, 03 August 2027 (Plenary)</option>
                    <option value="2">Day 2: Wednesday, 04 August 2027 (Breakout)</option>
                </select>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Start Time</label>
                <input type="text" name="time_start" required placeholder="e.g. 09:00" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Time Label</label>
                <input type="text" name="time_label" required placeholder="e.g. 09:00 – 10:15 WIB" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Badge Tag</label>
                <input type="text" name="badge" required placeholder="e.g. National Keynote / Parallel" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div class="sm:col-span-2">
                <label class="block font-bold text-slate-700 mb-1">Session Title</label>
                <input type="text" name="title" required placeholder="e.g. Keynote Address on Sustainable Economy" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Location / Venue Room</label>
                <input type="text" name="location" placeholder="e.g. CBT Auditorium / FK Rooms" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Display Order</label>
                <input type="number" name="order" value="{{ $programmes->count() + 1 }}" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div class="sm:col-span-4">
                <label class="block font-bold text-slate-700 mb-1">Session Description / Speakers Note</label>
                <textarea name="description" rows="2" placeholder="Brief rundown or topic description" class="w-full px-3 py-2 rounded-xl border border-slate-200"></textarea>
            </div>

            <div class="sm:col-span-4 text-right">
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold transition-colors">
                    Add Session
                </button>
            </div>
        </form>
    </div>

    <!-- Programme Schedule List -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-5 border-b border-slate-100 flex items-center justify-between">
            <h3 class="text-sm font-bold text-slate-900">Configured Sessions (Day 1 & Day 2)</h3>
            <span class="text-xs text-slate-500 font-semibold">{{ $programmes->count() }} sessions active</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 text-slate-500 font-bold uppercase tracking-wider border-b border-slate-100">
                    <tr>
                        <th class="py-3 px-4">Day</th>
                        <th class="py-3 px-4">Time</th>
                        <th class="py-3 px-4">Badge</th>
                        <th class="py-3 px-4">Session Title & Location</th>
                        <th class="py-3 px-4">Order</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($programmes as $prog)
                    <tr class="hover:bg-slate-50/80 transition-colors">
                        <td class="py-3 px-4 font-bold text-slate-900">
                            <span class="px-2 py-0.5 rounded-md {{ $prog->day == 1 ? 'bg-emerald-100 text-emerald-800' : 'bg-sky-100 text-sky-800' }}">
                                Day {{ $prog->day }}
                            </span>
                        </td>
                        <td class="py-3 px-4 font-mono font-bold text-slate-800">
                            {{ $prog->time_label }}
                        </td>
                        <td class="py-3 px-4">
                            <span class="px-2 py-0.5 rounded-full bg-slate-100 text-slate-700 font-semibold">
                                {{ $prog->badge }}
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="font-bold text-slate-900">{{ $prog->title }}</div>
                            <div class="text-[11px] text-emerald-700 font-medium">{{ $prog->location }}</div>
                            @if($prog->description)
                            <div class="text-[11px] text-slate-500 truncate max-w-md">{{ $prog->description }}</div>
                            @endif
                        </td>
                        <td class="py-3 px-4 font-bold text-slate-600">
                            {{ $prog->order }}
                        </td>
                        <td class="py-3 px-4 text-right whitespace-nowrap">
                            <div class="flex items-center justify-end gap-1.5">
                                <button type="button" 
                                        @click="openEditModal({{ json_encode($prog) }})" 
                                        class="p-1.5 rounded-lg text-slate-400 hover:text-emerald-600 hover:bg-emerald-50 transition-colors" 
                                        title="Edit Session">
                                    <i data-lucide="edit-3" class="w-4 h-4"></i>
                                </button>
                                <form action="{{ route('admin.programmes.delete', $prog->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this session?');" class="inline">
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
                            No programme sessions created yet.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Edit Programme Modal -->
    <div x-show="editOpen" 
         x-cloak 
         class="fixed inset-0 z-50 overflow-y-auto bg-slate-900/60 backdrop-blur-sm flex items-center justify-center p-4"
         @keydown.escape.window="editOpen = false">
        
        <div class="bg-white w-full max-w-xl rounded-2xl shadow-2xl border border-slate-200 overflow-hidden" 
             @click.away="editOpen = false">
            
            <div class="p-5 border-b border-slate-100 flex items-center justify-between bg-slate-50">
                <div class="flex items-center gap-2">
                    <i data-lucide="edit-3" class="w-4 h-4 text-emerald-600"></i>
                    <h3 class="text-sm font-bold text-slate-900">Edit Programme Session</h3>
                </div>
                <button type="button" @click="editOpen = false" class="p-1.5 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-200/60 transition-colors">
                    <i data-lucide="x" class="w-4 h-4"></i>
                </button>
            </div>

            <form :action="'{{ url('/admin/programmes') }}/' + editData.id" method="POST" class="p-6 space-y-4 text-xs">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Day</label>
                        <select name="day" x-model="editData.day" required class="w-full px-3 py-2 rounded-xl border border-slate-200 bg-white">
                            <option value="1">Day 1: Tuesday, 03 August 2027 (Plenary)</option>
                            <option value="2">Day 2: Wednesday, 04 August 2027 (Breakout)</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Start Time</label>
                        <input type="text" name="time_start" x-model="editData.time_start" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">End Time (optional)</label>
                        <input type="text" name="time_end" x-model="editData.time_end" class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Time Label</label>
                        <input type="text" name="time_label" x-model="editData.time_label" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Badge Tag</label>
                        <input type="text" name="badge" x-model="editData.badge" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Location / Room</label>
                        <input type="text" name="location" x-model="editData.location" class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block font-bold text-slate-700 mb-1">Session Title</label>
                        <input type="text" name="title" x-model="editData.title" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block font-bold text-slate-700 mb-1">Session Description / Moderator</label>
                        <textarea name="description" x-model="editData.description" rows="2" class="w-full px-3 py-2 rounded-xl border border-slate-200"></textarea>
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
