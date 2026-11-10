@extends('admin.layout')

@section('title', 'Participant Registrations | ICSET 2027 Admin')
@section('header_title', 'Participant & Author Registrations')

@section('content')
<div class="space-y-6">

    <!-- Filters & Search Bar -->
    <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm">
        <form action="{{ route('admin.registrations') }}" method="GET" class="grid grid-cols-1 sm:grid-cols-4 gap-4">
            <div class="sm:col-span-2">
                <input type="text" name="search" value="{{ request('search') }}"
                    placeholder="Search by code, participant name, email, or institution..."
                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-emerald-500 outline-none">
            </div>

            <div>
                <select name="status" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-emerald-500 outline-none bg-white">
                    <option value="">-- All Statuses --</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="verified" {{ request('status') == 'verified' ? 'selected' : '' }}>Verified</option>
                    <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="flex-1 py-2.5 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-colors">
                    Filter
                </button>
                <a href="{{ route('admin.registrations') }}" class="py-2.5 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-600 text-xs font-bold">
                    Reset
                </a>
            </div>
        </form>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 text-slate-500 uppercase font-bold text-[10px]">
                    <tr>
                        <th class="px-5 py-3.5">Reg Code / Date</th>
                        <th class="px-5 py-3.5">Participant Details</th>
                        <th class="px-5 py-3.5">Category & Track</th>
                        <th class="px-5 py-3.5">Attendance</th>
                        <th class="px-5 py-3.5">Payment Status</th>
                        <th class="px-5 py-3.5 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($registrations as $reg)
                    <tr class="hover:bg-slate-50/80 transition-colors">
                        <td class="px-5 py-4 whitespace-nowrap">
                            <span class="font-mono font-extrabold text-emerald-700 block">{{ $reg->reg_number }}</span>
                            <span class="text-[11px] text-slate-400">{{ $reg->created_at->format('d M Y, H:i') }}</span>
                        </td>
                        <td class="px-5 py-4">
                            <span class="font-bold text-slate-900 block">{{ $reg->full_name }}</span>
                            <span class="text-slate-500 block">{{ $reg->email }} • {{ $reg->phone }}</span>
                            <span class="text-[11px] text-slate-400">{{ $reg->institution }} ({{ $reg->country }})</span>
                        </td>
                        <td class="px-5 py-4">
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-slate-100 text-slate-700 block w-max mb-1">
                                {{ $reg->category }}
                            </span>
                            @if($reg->track)
                                <span class="text-[11px] text-emerald-700 font-semibold">{{ $reg->track->code }}</span>
                            @else
                                <span class="text-[11px] text-slate-400">No Track</span>
                            @endif
                        </td>
                        <td class="px-5 py-4 whitespace-nowrap">
                            <span class="text-xs uppercase font-semibold text-slate-700">{{ $reg->attendance_type }}</span>
                        </td>
                        <td class="px-5 py-4 whitespace-nowrap">
                            <span class="px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase
                                @if($reg->payment_status == 'verified') bg-emerald-100 text-emerald-800
                                @elseif($reg->payment_status == 'rejected') bg-rose-100 text-rose-800
                                @else bg-amber-100 text-amber-800
                                @endif">
                                {{ $reg->payment_status }}
                            </span>
                        </td>
                        <td class="px-5 py-4 text-right whitespace-nowrap">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.registrations.show', $reg->id) }}" class="px-3 py-1.5 rounded-lg bg-emerald-50 hover:bg-emerald-100 text-emerald-700 font-bold text-xs">
                                    Review & Verify
                                </a>
                                <form action="{{ route('admin.registrations.delete', $reg->id) }}" method="POST" onsubmit="return confirm('Delete this registration record?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-1.5 rounded-lg text-slate-400 hover:text-rose-600 hover:bg-rose-50">
                                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-5 py-12 text-center text-slate-400">
                            No registrations found matching the filters.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="p-4 border-t border-slate-100">
            {{ $registrations->links() }}
        </div>
    </div>

</div>
@endsection
