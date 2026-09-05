@extends('admin.layouts.app')

@section('title', 'Contact Inquiries')

@section('page-title', 'Contact Inquiries')

@section('content')

    <div class="space-y-6">

        @if(session('success'))

            <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-semibold text-emerald-700">
                {{ session('success') }}
            </div>

        @endif


        <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">

            <div>

                <h2 class="text-2xl font-black text-slate-950">
                    Contact Inquiries
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Manage messages submitted through your website.
                </p>

            </div>


            <form
                method="GET"
                action="{{ route('admin.inquiries.index') }}"
                class="flex flex-col gap-3 sm:flex-row"
            >

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search leads..."
                    class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                >

                <select
                    name="status"
                    onchange="this.form.submit()"
                    class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none focus:border-blue-500"
                >

                    <option value="">
                        All Status
                    </option>

                    <option
                        value="new"
                        @selected(request('status') === 'new')
                    >
                        New
                    </option>

                    <option
                        value="contacted"
                        @selected(request('status') === 'contacted')
                    >
                        Contacted
                    </option>

                    <option
                        value="converted"
                        @selected(request('status') === 'converted')
                    >
                        Converted
                    </option>

                    <option
                        value="closed"
                        @selected(request('status') === 'closed')
                    >
                        Closed
                    </option>

                </select>

                <button
                    type="submit"
                    class="rounded-xl bg-blue-600 px-5 py-3 text-sm font-bold text-white hover:bg-blue-700"
                >
                    Search
                </button>

            </form>

        </div>


        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

            <div class="overflow-x-auto">

                <table class="min-w-full text-left">

                    <thead class="border-b border-slate-100 bg-slate-50">

                        <tr>

                            <th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500">
                                Contact
                            </th>

                            <th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500">
                                Company
                            </th>

                            <th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500">
                                Subject
                            </th>

                            <th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500">
                                Status
                            </th>

                            <th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500">
                                Date
                            </th>

                            <th class="px-6 py-4 text-right text-xs font-black uppercase tracking-wider text-slate-500">
                                Action
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-slate-100">

                        @forelse($inquiries as $inquiry)

                            <tr class="transition hover:bg-slate-50">

                                <td class="px-6 py-5">

                                    <div class="font-bold text-slate-900">
                                        {{ $inquiry->name }}
                                    </div>

                                    <div class="mt-1 text-xs text-slate-500">
                                        {{ $inquiry->email }}
                                    </div>

                                    @if($inquiry->phone)

                                        <div class="mt-1 text-xs text-slate-400">
                                            {{ $inquiry->phone }}
                                        </div>

                                    @endif

                                </td>


                                <td class="px-6 py-5 text-sm text-slate-600">
                                    {{ $inquiry->company ?: '—' }}
                                </td>


                                <td class="max-w-xs px-6 py-5">

                                    <div class="truncate text-sm font-semibold text-slate-700">
                                        {{ $inquiry->subject ?: 'General Inquiry' }}
                                    </div>

                                </td>


                                <td class="px-6 py-5">

                                    @php
                                        $statusClasses = [
                                            'new' => 'bg-blue-50 text-blue-700',
                                            'contacted' => 'bg-amber-50 text-amber-700',
                                            'converted' => 'bg-emerald-50 text-emerald-700',
                                            'closed' => 'bg-slate-100 text-slate-600',
                                        ];
                                    @endphp

                                    <span class="rounded-full px-3 py-1 text-xs font-bold {{ $statusClasses[$inquiry->status] ?? 'bg-slate-100 text-slate-600' }}">
                                        {{ ucfirst($inquiry->status) }}
                                    </span>

                                </td>


                                <td class="px-6 py-5 text-sm text-slate-500">
                                    {{ $inquiry->created_at->format('d M Y') }}
                                </td>


                                <td class="px-6 py-5">

                                    <div class="flex justify-end gap-2">

                                        <a
                                            href="{{ route('admin.inquiries.show', $inquiry) }}"
                                            class="rounded-lg bg-blue-50 px-3 py-2 text-xs font-bold text-blue-700 hover:bg-blue-100"
                                        >
                                            View
                                        </a>

                                        <form
                                            method="POST"
                                            action="{{ route('admin.inquiries.destroy', $inquiry) }}"
                                            onsubmit="return confirm('Delete this inquiry?')"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="rounded-lg bg-red-50 px-3 py-2 text-xs font-bold text-red-700 hover:bg-red-100"
                                            >
                                                Delete
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="6"
                                    class="px-6 py-16 text-center"
                                >

                                    <div class="text-4xl">
                                        ✉️
                                    </div>

                                    <h3 class="mt-4 text-lg font-black text-slate-900">
                                        No inquiries found
                                    </h3>

                                    <p class="mt-2 text-sm text-slate-500">
                                        New contact messages will appear here.
                                    </p>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            @if($inquiries->hasPages())

                <div class="border-t border-slate-100 px-6 py-4">
                    {{ $inquiries->links() }}
                </div>

            @endif

        </div>

    </div>

@endsection