@extends('admin.layout')

@section('title', 'Manage Speakers | ICSET 2027 Admin')
@section('header_title', 'Keynote & Invited Speakers Management')

@section('content')
<div class="space-y-6">

    <!-- Add Speaker Accordion / Card -->
    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm">
        <h3 class="text-sm font-bold text-slate-900 mb-4 pb-2 border-b border-slate-100 flex items-center gap-2">
            <i data-lucide="user-plus" class="w-4 h-4 text-emerald-600"></i>
            <span>Add New Speaker</span>
        </h3>

        <form action="{{ route('admin.speakers.store') }}" method="POST" class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
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

            <div class="sm:col-span-2">
                <label class="block font-bold text-slate-700 mb-1">Topic / Research Focus</label>
                <input type="text" name="topic" placeholder="e.g. ESG Reporting & Sustainable Governance"
                    class="w-full px-3 py-2 rounded-xl border border-slate-200">
            </div>

            <div class="grid grid-cols-2 gap-2">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Status</label>
                    <select name="status" class="w-full px-3 py-2 rounded-xl border border-slate-200 bg-white">
                        <option value="Confirmed">Confirmed</option>
                        <option value="In Confirmation">In Confirmation</option>
                    </select>
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Display Order</label>
                    <input type="number" name="order" value="10" class="w-full px-3 py-2 rounded-xl border border-slate-200">
                </div>
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
                        <td class="px-5 py-3.5 text-right">
                            <form action="{{ route('admin.speakers.delete', $spk->id) }}" method="POST" onsubmit="return confirm('Delete this speaker?');" class="inline-block">
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
