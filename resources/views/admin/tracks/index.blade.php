@extends('admin.layout')

@section('title', 'Manage Tracks | ICSET 2027 Admin')
@section('header_title', 'Conference Tracks & Scope Management')

@section('content')
<div class="space-y-6">

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
                    <form action="{{ route('admin.tracks.delete', $tr->id) }}" method="POST" onsubmit="return confirm('Delete this track and its subtopics?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="p-1 rounded text-slate-400 hover:text-rose-600">
                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                        </button>
                    </form>
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

</div>
@endsection
