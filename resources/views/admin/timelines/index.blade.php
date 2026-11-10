@extends('admin.layout')

@section('title', 'Manage Timeline | ICSET 2027 Admin')
@section('header_title', 'Timeline & Deadlines Management')

@section('content')
<div class="space-y-6">

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
                            <form action="{{ route('admin.timelines.delete', $tm->id) }}" method="POST" onsubmit="return confirm('Delete this milestone?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-1.5 rounded-lg text-slate-400 hover:text-rose-600 hover:bg-rose-50">
                                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
