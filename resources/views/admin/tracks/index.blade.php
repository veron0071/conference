@extends('admin.layout')

@section('title', 'Manage Tracks | ICSET 2027 Admin')
@section('header_title', 'Conference Tracks & Scope Management')

@section('content')
<div class="space-y-6" x-data="{ 
    editOpen: false, 
    editData: {}, 
    openEditModal(tr) { 
        this.editData = Object.assign({}, tr); 
        this.editOpen = true; 
    } 
}">

    <!-- Add Track Card -->
    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm">
        <h3 class="text-sm font-bold text-slate-900 mb-4 pb-2 border-b border-slate-100 flex items-center gap-2">
            <i data-lucide="plus-circle" class="w-4 h-4 text-emerald-600"></i>
            <span>Add New Track</span>
        </h3>

        <form action="{{ route('admin.tracks.store') }}" method="POST" class="grid grid-cols-1 sm:grid-cols-4 gap-4 text-xs">
            @csrf

            <div>
                <label class="block font-bold text-slate-700 mb-1">Track Code</label>
                <input type="text" name="code" required placeholder="TRACK-07"
                    class="w-full px-3 py-2 rounded-xl border border-slate-200 uppercase">
            </div>

            <div class="sm:col-span-2">
                <label class="block font-bold text-slate-700 mb-1">Track Title</label>
                <input type="text" name="title" required placeholder="e.g. Green Energy & Circular Technology"
                    class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Lucide Icon Name</label>
                <input type="text" name="icon" value="trending-up" required
                    class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <input type="hidden" name="order" value="{{ $tracks->count() + 1 }}">

            <div class="sm:col-span-4 text-right">
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold transition-colors">
                    Add Track
                </button>
            </div>
        </form>
    </div>

    <!-- Tracks List Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($tracks as $tr)
        <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-mono font-extrabold px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700">
                        {{ $tr->code }}
                    </span>
                    <div class="flex items-center gap-1">
                        <button type="button" 
                                @click="openEditModal({{ json_encode($tr->only(['id', 'code', 'title', 'icon', 'order'])) }})" 
                                class="p-1.5 rounded-lg text-slate-400 hover:text-emerald-600 hover:bg-emerald-50 transition-colors" 
                                title="Edit Track">
                            <i data-lucide="edit-3" class="w-4 h-4"></i>
                        </button>
                        <form action="{{ route('admin.tracks.delete', $tr->id) }}" method="POST" onsubmit="return confirm('Delete this track and its subtopics?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-1.5 rounded-lg text-slate-400 hover:text-rose-600 hover:bg-rose-50 transition-colors" title="Delete">
                                <i data-lucide="trash-2" class="w-4 h-4"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <h4 class="text-base font-bold text-slate-900 mb-3">{{ $tr->title }}</h4>

                <div class="space-y-1.5 pt-2 border-t border-slate-100 text-xs text-slate-600">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block mb-1">Subtopics ({{ $tr->topics->count() }}):</span>
                    @foreach($tr->topics as $topic)
                    <div class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                        <span>{{ $topic->name }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Edit Track Modal -->
    <div x-show="editOpen" 
         x-cloak 
         class="fixed inset-0 z-50 overflow-y-auto bg-slate-900/60 backdrop-blur-sm flex items-center justify-center p-4"
         @keydown.escape.window="editOpen = false">
        
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl border border-slate-200 overflow-hidden" 
             @click.away="editOpen = false">
            
            <div class="p-5 border-b border-slate-100 flex items-center justify-between bg-slate-50">
                <div class="flex items-center gap-2">
                    <i data-lucide="edit-3" class="w-4 h-4 text-emerald-600"></i>
                    <h3 class="text-sm font-bold text-slate-900">Edit Conference Track</h3>
                </div>
                <button type="button" @click="editOpen = false" class="p-1.5 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-200/60 transition-colors">
                    <i data-lucide="x" class="w-4 h-4"></i>
                </button>
            </div>

            <form :action="'{{ url('/admin/tracks') }}/' + editData.id" method="POST" class="p-6 space-y-4 text-xs">
                @csrf
                @method('PUT')

                <div>
                    <label class="block font-bold text-slate-700 mb-1">Track Code</label>
                    <input type="text" name="code" x-model="editData.code" required class="w-full px-3 py-2 rounded-xl border border-slate-200 uppercase font-mono">
                </div>

                <div>
                    <label class="block font-bold text-slate-700 mb-1">Track Title</label>
                    <input type="text" name="title" x-model="editData.title" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                </div>

                <div>
                    <label class="block font-bold text-slate-700 mb-1">Lucide Icon Name</label>
                    <input type="text" name="icon" x-model="editData.icon" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
                </div>

                <div>
                    <label class="block font-bold text-slate-700 mb-1">Display Order</label>
                    <input type="number" name="order" x-model="editData.order" required class="w-full px-3 py-2 rounded-xl border border-slate-200">
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
