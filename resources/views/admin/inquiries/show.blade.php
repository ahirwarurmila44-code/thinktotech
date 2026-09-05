@extends('admin.layouts.app')

@section('title', 'Inquiry Details')

@section('page-title', 'Inquiry Details')

@section('content')

    <div class="mx-auto max-w-4xl space-y-6">

        <div class="flex items-center justify-between">

            <a
                href="{{ route('admin.inquiries.index') }}"
                class="text-sm font-semibold text-slate-500 hover:text-blue-600"
            >
                ← Back to Inquiries
            </a>

        </div>


        @if(session('success'))

            <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-semibold text-emerald-700">
                {{ session('success') }}
            </div>

        @endif


        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

            <div class="bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950 p-8 text-white">

                <p class="text-sm font-semibold text-blue-300">
                    Contact Inquiry
                </p>

                <h1 class="mt-2 text-3xl font-black">
                    {{ $inquiry->name }}
                </h1>

                <p class="mt-2 text-slate-300">
                    {{ $inquiry->email }}
                </p>

            </div>


            <div class="space-y-8 p-8">

                <div class="grid gap-6 sm:grid-cols-2">

                    <div>

                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                            Name
                        </p>

                        <p class="mt-2 font-semibold text-slate-800">
                            {{ $inquiry->name }}
                        </p>

                    </div>


                    <div>

                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                            Email
                        </p>

                        <a
                            href="mailto:{{ $inquiry->email }}"
                            class="mt-2 block font-semibold text-blue-600 hover:text-blue-700"
                        >
                            {{ $inquiry->email }}
                        </a>

                    </div>


                    <div>

                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                            Phone
                        </p>

                        @if($inquiry->phone)

                            <a
                                href="tel:{{ $inquiry->phone }}"
                                class="mt-2 block font-semibold text-slate-800"
                            >
                                {{ $inquiry->phone }}
                            </a>

                        @else

                            <p class="mt-2 text-slate-400">
                                Not provided
                            </p>

                        @endif

                    </div>


                    <div>

                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                            Company
                        </p>

                        <p class="mt-2 font-semibold text-slate-800">
                            {{ $inquiry->company ?: 'Not provided' }}
                        </p>

                    </div>

                </div>


                <div class="border-t border-slate-100 pt-6">

                    <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                        Subject
                    </p>

                    <p class="mt-2 text-lg font-bold text-slate-900">
                        {{ $inquiry->subject ?: 'General Inquiry' }}
                    </p>

                </div>


                <div>

                    <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                        Message
                    </p>

                    <div class="mt-3 whitespace-pre-line rounded-2xl bg-slate-50 p-6 text-sm leading-7 text-slate-700">
                        {{ $inquiry->message }}
                    </div>

                </div>


                <div class="border-t border-slate-100 pt-6">

                    <h2 class="text-lg font-black text-slate-900">
                        Lead Status
                    </h2>

                    <form
                        method="POST"
                        action="{{ route('admin.inquiries.update', $inquiry) }}"
                        class="mt-4 flex flex-col gap-3 sm:flex-row"
                    >

                        @csrf
                        @method('PUT')

                        <select
                            name="status"
                            class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-blue-500"
                        >

                            <option
                                value="new"
                                @selected($inquiry->status === 'new')
                            >
                                New
                            </option>

                            <option
                                value="contacted"
                                @selected($inquiry->status === 'contacted')
                            >
                                Contacted
                            </option>

                            <option
                                value="converted"
                                @selected($inquiry->status === 'converted')
                            >
                                Converted
                            </option>

                            <option
                                value="closed"
                                @selected($inquiry->status === 'closed')
                            >
                                Closed
                            </option>

                        </select>

                        <button
                            type="submit"
                            class="rounded-xl bg-blue-600 px-5 py-3 text-sm font-bold text-white hover:bg-blue-700"
                        >
                            Update Status
                        </button>

                    </form>

                </div>


                <div class="border-t border-slate-100 pt-6">

                    <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                        Received
                    </p>

                    <p class="mt-2 text-sm font-semibold text-slate-700">
                        {{ $inquiry->created_at->format('d M Y, h:i A') }}
                    </p>

                </div>

            </div>

        </div>

    </div>

@endsection
