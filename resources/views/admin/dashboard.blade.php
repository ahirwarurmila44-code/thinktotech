@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('content')

    {{-- Welcome --}}
    <div class="mb-8">

        <div class="overflow-hidden rounded-3xl bg-gradient-to-br from-blue-700 via-blue-600 to-indigo-700 p-8 text-white shadow-xl">

            <div class="max-w-3xl">

                <p class="text-sm font-semibold uppercase tracking-wider text-blue-100">
                    ThinkToTech Admin
                </p>

                <h2 class="mt-3 text-3xl font-black tracking-tight">
                    Welcome back, {{ auth()->user()->name }} 👋
                </h2>

                <p class="mt-3 max-w-2xl leading-7 text-blue-100">
                    Manage your website content, projects, services and
                    incoming business leads from one place.
                </p>

            </div>

        </div>

    </div>


    {{-- Stats --}}
    <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-4">


        {{-- Projects --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

            <div class="flex items-center justify-between">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-xl text-blue-600">
                    ◆
                </div>

                <span class="text-xs font-semibold text-slate-400">
                    Portfolio
                </span>

            </div>

            <div class="mt-6">

                <div class="text-3xl font-black text-slate-950">
                    {{ $stats['projects'] }}
                </div>

                <p class="mt-1 text-sm text-slate-500">
                    Total Projects
                </p>

            </div>

        </div>


        {{-- Services --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

            <div class="flex items-center justify-between">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-violet-50 text-xl text-violet-600">
                    ✦
                </div>

                <span class="text-xs font-semibold text-slate-400">
                    Business
                </span>

            </div>

            <div class="mt-6">

                <div class="text-3xl font-black text-slate-950">
                    {{ $stats['services'] }}
                </div>

                <p class="mt-1 text-sm text-slate-500">
                    Total Services
                </p>

            </div>

        </div>


        {{-- Inquiries --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

            <div class="flex items-center justify-between">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-50 text-xl text-emerald-600">
                    ✓
                </div>

                <span class="text-xs font-semibold text-emerald-600">
                    New
                </span>

            </div>

            <div class="mt-6">

                <div class="text-3xl font-black text-slate-950">
                    {{ $stats['new_inquiries'] }}
                </div>

                <p class="mt-1 text-sm text-slate-500">
                    New Inquiries
                </p>

            </div>

        </div>


        {{-- Quotes --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

            <div class="flex items-center justify-between">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-50 text-xl text-amber-600">
                    ₹
                </div>

                <span class="text-xs font-semibold text-amber-600">
                    Leads
                </span>

            </div>

            <div class="mt-6">

                <div class="text-3xl font-black text-slate-950">
                    {{ $stats['new_quotes'] }}
                </div>

                <p class="mt-1 text-sm text-slate-500">
                    New Quote Requests
                </p>

            </div>

        </div>

    </div>


    {{-- Quick Actions --}}
    <div class="mt-8 grid gap-6 lg:grid-cols-2">


        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

            <h3 class="text-lg font-black text-slate-950">
                Website Management
            </h3>

            <p class="mt-2 text-sm leading-6 text-slate-500">
                The next stage will allow you to manage projects and
                services directly from this dashboard.
            </p>

            <div class="mt-6 space-y-3">

                <div class="flex items-center justify-between rounded-xl bg-slate-50 p-4">

                    <span class="text-sm font-semibold text-slate-700">
                        Project Management
                    </span>

                    <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-700">
                        Coming Next
                    </span>

                </div>

                <div class="flex items-center justify-between rounded-xl bg-slate-50 p-4">

                    <span class="text-sm font-semibold text-slate-700">
                        Service Management
                    </span>

                    <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-700">
                        Coming Next
                    </span>

                </div>

            </div>

        </div>


        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

            <h3 class="text-lg font-black text-slate-950">
                Lead Management
            </h3>

            <p class="mt-2 text-sm leading-6 text-slate-500">
                Contact inquiries and quote requests are already being
                stored in MySQL.
            </p>

            <div class="mt-6 space-y-3">

                <div class="flex items-center justify-between rounded-xl bg-slate-50 p-4">

                    <span class="text-sm font-semibold text-slate-700">
                        Contact Inquiries
                    </span>

                    <span class="font-black text-slate-950">
                        {{ $stats['new_inquiries'] }}
                    </span>

                </div>

                <div class="flex items-center justify-between rounded-xl bg-slate-50 p-4">

                    <span class="text-sm font-semibold text-slate-700">
                        Quote Requests
                    </span>

                    <span class="font-black text-slate-950">
                        {{ $stats['new_quotes'] }}
                    </span>

                </div>

            </div>

        </div>

    </div>

@endsection