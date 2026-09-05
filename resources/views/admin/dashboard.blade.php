@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('content')

    <div class="space-y-8">


        {{-- Welcome --}}
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950 p-8 text-white shadow-xl">

            <div class="relative z-10">

                <p class="text-sm font-semibold text-blue-300">
                    ThinkToTech Admin
                </p>

                <h1 class="mt-2 text-3xl font-black sm:text-4xl">
                    Welcome back 👋
                </h1>

                <p class="mt-3 max-w-2xl text-sm leading-6 text-slate-300">
                    Manage your website, services, projects and incoming
                    client leads from one place.
                </p>

                <div class="mt-6 flex flex-wrap gap-3">

                    <a
                        href="{{ route('admin.projects.create') }}"
                        class="rounded-xl bg-white px-5 py-3 text-sm font-bold text-slate-900 transition hover:bg-slate-100"
                    >
                        + Add Project
                    </a>

                    <a
                        href="{{ route('admin.services.create') }}"
                        class="rounded-xl border border-white/20 bg-white/10 px-5 py-3 text-sm font-bold text-white backdrop-blur transition hover:bg-white/20"
                    >
                        + Add Service
                    </a>

                </div>

            </div>


            <div class="absolute -right-20 -top-20 h-64 w-64 rounded-full bg-blue-500/20 blur-3xl"></div>

            <div class="absolute -bottom-20 right-20 h-52 w-52 rounded-full bg-violet-500/20 blur-3xl"></div>

        </div>


        {{-- Main Stats --}}
        <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-4">


            {{-- Projects --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                <div class="flex items-start justify-between">

                    <div>

                        <p class="text-sm font-semibold text-slate-500">
                            Projects
                        </p>

                        <h2 class="mt-2 text-3xl font-black text-slate-950">
                            {{ $stats['projects'] }}
                        </h2>

                    </div>

                    <div class="rounded-xl bg-blue-50 p-3 text-xl">
                        💼
                    </div>

                </div>

                <p class="mt-4 text-xs font-semibold text-slate-400">
                    {{ $stats['published_projects'] }} published
                </p>

            </div>


            {{-- Services --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                <div class="flex items-start justify-between">

                    <div>

                        <p class="text-sm font-semibold text-slate-500">
                            Services
                        </p>

                        <h2 class="mt-2 text-3xl font-black text-slate-950">
                            {{ $stats['services'] }}
                        </h2>

                    </div>

                    <div class="rounded-xl bg-violet-50 p-3 text-xl">
                        🧩
                    </div>

                </div>

                <p class="mt-4 text-xs font-semibold text-slate-400">
                    {{ $stats['published_services'] }} published
                </p>

            </div>


            {{-- Inquiries --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                <div class="flex items-start justify-between">

                    <div>

                        <p class="text-sm font-semibold text-slate-500">
                            New Inquiries
                        </p>

                        <h2 class="mt-2 text-3xl font-black text-slate-950">
                            {{ $stats['new_inquiries'] }}
                        </h2>

                    </div>

                    <div class="rounded-xl bg-amber-50 p-3 text-xl">
                        ✉️
                    </div>

                </div>

                <a
                    href="{{ route('admin.inquiries.index') }}"
                    class="mt-4 inline-block text-xs font-bold text-blue-600 hover:text-blue-700"
                >
                    View inquiries →
                </a>

            </div>


            {{-- Quotes --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                <div class="flex items-start justify-between">

                    <div>

                        <p class="text-sm font-semibold text-slate-500">
                            New Quote Requests
                        </p>

                        <h2 class="mt-2 text-3xl font-black text-slate-950">
                            {{ $stats['new_quotes'] }}
                        </h2>

                    </div>

                    <div class="rounded-xl bg-emerald-50 p-3 text-xl">
                        💰
                    </div>

                </div>

                <a
                    href="{{ route('admin.quote-requests.index') }}"
                    class="mt-4 inline-block text-xs font-bold text-blue-600 hover:text-blue-700"
                >
                    View quote requests →
                </a>

            </div>

        </div>


        {{-- Sales Overview --}}
        <div class="grid gap-6 lg:grid-cols-3">


            {{-- Quote Conversion --}}
            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-sm font-semibold text-slate-500">
                            Quote Conversion
                        </p>

                        <h2 class="mt-2 text-4xl font-black text-slate-950">
                            {{ $conversionRate }}%
                        </h2>

                    </div>

                    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50 text-lg font-black text-emerald-600">
                        {{ $conversionRate }}%
                    </div>

                </div>


                <div class="mt-6 h-3 overflow-hidden rounded-full bg-slate-100">

                    <div
                        class="h-full rounded-full bg-emerald-500 transition-all"
                        style="width: {{ min($conversionRate, 100) }}%"
                    ></div>

                </div>


                <div class="mt-4 flex justify-between text-xs">

                    <span class="font-semibold text-slate-500">
                        Won: {{ $stats['won_quotes'] }}
                    </span>

                    <span class="font-semibold text-slate-500">
                        Lost: {{ $stats['lost_quotes'] }}
                    </span>

                </div>

            </div>


            {{-- Inquiry Pipeline --}}
            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm lg:col-span-2">

                <div class="flex items-center justify-between">

                    <div>

                        <h2 class="text-lg font-black text-slate-950">
                            Inquiry Pipeline
                        </h2>

                        <p class="mt-1 text-sm text-slate-500">
                            Track your incoming client inquiries.
                        </p>

                    </div>

                    <a
                        href="{{ route('admin.inquiries.index') }}"
                        class="text-sm font-bold text-blue-600 hover:text-blue-700"
                    >
                        View all →
                    </a>

                </div>


                <div class="mt-6 grid gap-4 sm:grid-cols-4">

                    <div class="rounded-2xl bg-blue-50 p-5">

                        <p class="text-xs font-bold uppercase text-blue-600">
                            New
                        </p>

                        <p class="mt-2 text-3xl font-black text-blue-900">
                            {{ $inquiryPipeline['new'] }}
                        </p>

                    </div>


                    <div class="rounded-2xl bg-amber-50 p-5">

                        <p class="text-xs font-bold uppercase text-amber-600">
                            Contacted
                        </p>

                        <p class="mt-2 text-3xl font-black text-amber-900">
                            {{ $inquiryPipeline['contacted'] }}
                        </p>

                    </div>


                    <div class="rounded-2xl bg-emerald-50 p-5">

                        <p class="text-xs font-bold uppercase text-emerald-600">
                            Converted
                        </p>

                        <p class="mt-2 text-3xl font-black text-emerald-900">
                            {{ $inquiryPipeline['converted'] }}
                        </p>

                    </div>


                    <div class="rounded-2xl bg-slate-100 p-5">

                        <p class="text-xs font-bold uppercase text-slate-500">
                            Closed
                        </p>

                        <p class="mt-2 text-3xl font-black text-slate-800">
                            {{ $inquiryPipeline['closed'] }}
                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- Quote Pipeline --}}
        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">

            <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">

                <div>

                    <h2 class="text-lg font-black text-slate-950">
                        Quote Sales Pipeline
                    </h2>

                    <p class="mt-1 text-sm text-slate-500">
                        Track quote requests from first contact to conversion.
                    </p>

                </div>

                <a
                    href="{{ route('admin.quote-requests.index') }}"
                    class="text-sm font-bold text-blue-600 hover:text-blue-700"
                >
                    Manage quotes →
                </a>

            </div>


            <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-5">

                <div class="rounded-2xl border border-blue-100 bg-blue-50 p-5">

                    <p class="text-xs font-bold uppercase text-blue-600">
                        New
                    </p>

                    <p class="mt-2 text-3xl font-black text-blue-900">
                        {{ $quotePipeline['new'] }}
                    </p>

                </div>


                <div class="rounded-2xl border border-amber-100 bg-amber-50 p-5">

                    <p class="text-xs font-bold uppercase text-amber-600">
                        Contacted
                    </p>

                    <p class="mt-2 text-3xl font-black text-amber-900">
                        {{ $quotePipeline['contacted'] }}
                    </p>

                </div>


                <div class="rounded-2xl border border-violet-100 bg-violet-50 p-5">

                    <p class="text-xs font-bold uppercase text-violet-600">
                        Proposal
                    </p>

                    <p class="mt-2 text-3xl font-black text-violet-900">
                        {{ $quotePipeline['proposal'] }}
                    </p>

                </div>


                <div class="rounded-2xl border border-emerald-100 bg-emerald-50 p-5">

                    <p class="text-xs font-bold uppercase text-emerald-600">
                        Won
                    </p>

                    <p class="mt-2 text-3xl font-black text-emerald-900">
                        {{ $quotePipeline['won'] }}
                    </p>

                </div>


                <div class="rounded-2xl border border-red-100 bg-red-50 p-5">

                    <p class="text-xs font-bold uppercase text-red-600">
                        Lost
                    </p>

                    <p class="mt-2 text-3xl font-black text-red-900">
                        {{ $quotePipeline['lost'] }}
                    </p>

                </div>

            </div>

        </div>


        {{-- Recent Activity --}}
        <div class="grid gap-6 xl:grid-cols-2">


            {{-- Recent Inquiries --}}
            <div class="rounded-3xl border border-slate-200 bg-white shadow-sm">

                <div class="flex items-center justify-between border-b border-slate-100 px-6 py-5">

                    <div>

                        <h2 class="font-black text-slate-950">
                            Recent Inquiries
                        </h2>

                        <p class="mt-1 text-xs text-slate-500">
                            Latest website messages
                        </p>

                    </div>

                    <a
                        href="{{ route('admin.inquiries.index') }}"
                        class="text-xs font-bold text-blue-600"
                    >
                        View all
                    </a>

                </div>


                <div class="divide-y divide-slate-100">

                    @forelse($recentInquiries as $inquiry)

                        <a
                            href="{{ route('admin.inquiries.show', $inquiry) }}"
                            class="block px-6 py-5 transition hover:bg-slate-50"
                        >

                            <div class="flex items-start justify-between gap-4">

                                <div class="min-w-0">

                                    <p class="truncate text-sm font-bold text-slate-900">
                                        {{ $inquiry->name }}
                                    </p>

                                    <p class="mt-1 truncate text-xs text-slate-500">
                                        {{ $inquiry->subject ?: 'General Inquiry' }}
                                    </p>

                                </div>


                                <span class="shrink-0 rounded-full bg-blue-50 px-3 py-1 text-xs font-bold text-blue-700">
                                    {{ ucfirst($inquiry->status) }}
                                </span>

                            </div>


                            <p class="mt-2 text-xs text-slate-400">
                                {{ $inquiry->created_at->format('d M Y, h:i A') }}
                            </p>

                        </a>

                    @empty

                        <div class="px-6 py-12 text-center">

                            <div class="text-3xl">
                                ✉️
                            </div>

                            <p class="mt-3 text-sm font-semibold text-slate-500">
                                No inquiries yet.
                            </p>

                        </div>

                    @endforelse

                </div>

            </div>


            {{-- Recent Quotes --}}
            <div class="rounded-3xl border border-slate-200 bg-white shadow-sm">

                <div class="flex items-center justify-between border-b border-slate-100 px-6 py-5">

                    <div>

                        <h2 class="font-black text-slate-950">
                            Recent Quote Requests
                        </h2>

                        <p class="mt-1 text-xs text-slate-500">
                            Latest potential projects
                        </p>

                    </div>

                    <a
                        href="{{ route('admin.quote-requests.index') }}"
                        class="text-xs font-bold text-blue-600"
                    >
                        View all
                    </a>

                </div>


                <div class="divide-y divide-slate-100">

                    @forelse($recentQuotes as $quote)

                        <a
                            href="{{ route('admin.quote-requests.show', $quote) }}"
                            class="block px-6 py-5 transition hover:bg-slate-50"
                        >

                            <div class="flex items-start justify-between gap-4">

                                <div class="min-w-0">

                                    <p class="truncate text-sm font-bold text-slate-900">
                                        {{ $quote->name }}
                                    </p>

                                    <p class="mt-1 truncate text-xs text-slate-500">
                                        {{ $quote->service }}
                                    </p>

                                </div>


                                <span class="shrink-0 rounded-full bg-emerald-50 px-3 py-1 text-xs font-bold text-emerald-700">
                                    {{ ucfirst($quote->status) }}
                                </span>

                            </div>


                            <div class="mt-2 flex justify-between">

                                <p class="text-xs text-slate-400">
                                    {{ $quote->created_at->format('d M Y, h:i A') }}
                                </p>

                                @if($quote->budget)

                                    <p class="text-xs font-bold text-slate-600">
                                        {{ $quote->budget }}
                                    </p>

                                @endif

                            </div>

                        </a>

                    @empty

                        <div class="px-6 py-12 text-center">

                            <div class="text-3xl">
                                💰
                            </div>

                            <p class="mt-3 text-sm font-semibold text-slate-500">
                                No quote requests yet.
                            </p>

                        </div>

                    @endforelse

                </div>

            </div>

        </div>


    </div>

@endsection