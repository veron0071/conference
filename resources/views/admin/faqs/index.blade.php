@extends('admin.layout')

@section('title', 'Manage FAQs | ICSET 2027 Admin')
@section('header_title', 'Frequently Asked Questions (FAQ) Management')

@section('content')
<div class="space-y-6">

    <!-- Add FAQ Form -->
    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm">
        <h3 class="text-sm font-bold text-slate-900 mb-4 pb-2 border-b border-slate-100 flex items-center gap-2">
            <i data-lucide="plus-circle" class="w-4 h-4 text-emerald-600"></i>
            <span>Add New FAQ Item</span>
        </h3>

        <form action="{{ route('admin.faqs.store') }}" method="POST" class="grid grid-cols-1 sm:grid-cols-4 gap-4 text-xs">
            @csrf

            <div class="sm:col-span-3">
                <label class="block font-bold text-slate-700 mb-1">Question</label>
                <input type="text" name="question" required placeholder="e.g. What language must submitted manuscripts be written in?" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Category</label>
                <select name="category" class="w-full px-3 py-2 rounded-xl border border-slate-200 bg-white">
                    <option value="Submission">Submission</option>
                    <option value="Presentation">Presentation</option>
                    <option value="Review">Review</option>
                    <option value="Registration">Registration</option>
                    <option value="Ethics">Ethics</option>
                    <option value="General">General</option>
                </select>
            </div>

            <div class="sm:col-span-3">
                <label class="block font-bold text-slate-700 mb-1">Answer</label>
                <textarea name="answer" required rows="3" placeholder="Detailed answer provided to conference delegates..." class="w-full px-3 py-2 rounded-xl border border-slate-200"></textarea>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Display Order</label>
                <input type="number" name="order" value="{{ $faqs->count() + 1 }}" class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div class="sm:col-span-4 text-right">
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold transition-colors">
                    Add FAQ
                </button>
            </div>
        </form>
    </div>

    <!-- FAQs Table -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-5 border-b border-slate-100 flex items-center justify-between">
            <h3 class="text-sm font-bold text-slate-900">Current FAQ Accordion Items</h3>
            <span class="text-xs text-slate-500 font-semibold">{{ $faqs->count() }} active items</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 text-slate-500 font-bold uppercase tracking-wider border-b border-slate-100">
                    <tr>
                        <th class="py-3 px-4">Order</th>
                        <th class="py-3 px-4">Category</th>
                        <th class="py-3 px-4">Question & Answer</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($faqs as $faq)
                    <tr class="hover:bg-slate-50/80 transition-colors">
                        <td class="py-3 px-4 font-bold text-slate-700">
                            {{ $faq->order }}
                        </td>
                        <td class="py-3 px-4">
                            <span class="px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-bold border border-emerald-200">
                                {{ $faq->category }}
                            </span>
                        </td>
                        <td class="py-3 px-4 max-w-xl">
                            <div class="font-extrabold text-slate-900 text-sm mb-1">{{ $faq->question }}</div>
                            <div class="text-slate-600 leading-relaxed">{{ $faq->answer }}</div>
                        </td>
                        <td class="py-3 px-4 text-right whitespace-nowrap">
                            <form action="{{ route('admin.faqs.delete', $faq->id) }}" method="POST" onsubmit="return confirm('Delete this FAQ item?');" class="inline">
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
                        <td colspan="4" class="p-8 text-center text-slate-400">
                            No FAQ items configured yet.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
