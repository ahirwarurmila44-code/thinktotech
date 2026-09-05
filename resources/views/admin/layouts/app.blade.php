<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="ThinkToTech Admin Panel"
    >

    <title>
        @yield('title', 'Admin Dashboard') — ThinkToTech
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body class="min-h-screen bg-slate-100 text-slate-800">

    <div class="min-h-screen">

        {{-- Sidebar --}}
        <aside class="fixed inset-y-0 left-0 hidden w-72 border-r border-slate-800 bg-slate-950 lg:block">

            <div class="flex h-full flex-col">

                {{-- Logo --}}
                <div class="flex h-20 items-center border-b border-white/10 px-6">

                    <a
                        href="{{ route('admin.dashboard') }}"
                        class="flex items-center gap-3"
                    >

                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 font-black text-white">
                            T
                        </div>

                        <div>

                            <div class="font-black text-white">
                                ThinkToTech
                            </div>

                            <div class="text-xs text-slate-500">
                                Admin Panel
                            </div>

                        </div>

                    </a>

                </div>


                {{-- Navigation --}}
                <nav class="flex-1 space-y-2 p-4">

                    <a
                        href="{{ route('admin.dashboard') }}"
                        class="flex items-center gap-3 rounded-xl bg-blue-600 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-600/20"
                    >
                        <span>▦</span>
                        Dashboard
                    </a>


                    <div class="mt-6 px-4 text-xs font-bold uppercase tracking-wider text-slate-600">
                        Management
                    </div>


                    <div class="mt-2 space-y-1">

                        <a
    href="{{ route('admin.projects.index') }}"
    class="flex items-center justify-between rounded-xl px-4 py-3 text-sm font-semibold text-slate-400 transition hover:bg-white/5 hover:text-white"
>
    <span>Projects</span>

    <span class="text-xs">
        {{ \App\Models\Project::count() }}
    </span>
</a>

                        <a
    href="{{ route('admin.services.index') }}"
    class="flex items-center justify-between rounded-xl px-4 py-3 text-sm font-semibold text-slate-400 transition hover:bg-white/5 hover:text-white"
>
    <span>Services</span>

    <span class="text-xs">
        {{ \App\Models\Service::count() }}
    </span>
</a>

                        <a
    href="{{ route('admin.inquiries.index') }}"
    class="flex items-center justify-between rounded-xl px-4 py-3 text-sm font-semibold text-slate-400 transition hover:bg-white/5 hover:text-white"
>
    <span>Inquiries</span>

    <span class="text-xs">
        {{ \App\Models\ContactInquiry::where('status', 'new')->count() }}
    </span>
</a>

                       <a
    href="{{ route('admin.quote-requests.index') }}"
    class="flex items-center justify-between rounded-xl px-4 py-3 text-sm font-semibold text-slate-400 transition hover:bg-white/5 hover:text-white"
>
    <span>Quote Requests</span>

    <span class="text-xs">
        {{ \App\Models\QuoteRequest::where('status', 'new')->count() }}
    </span>
</a>

                    </div>

                </nav>


                {{-- User --}}
                <div class="border-t border-white/10 p-4">

                    <div class="mb-3 rounded-xl bg-white/5 p-3">

                        <div class="text-sm font-semibold text-white">
                            {{ auth()->user()->name }}
                        </div>

                        <div class="mt-1 truncate text-xs text-slate-500">
                            {{ auth()->user()->email }}
                        </div>

                    </div>


                    <form
                        method="POST"
                        action="{{ route('admin.logout') }}"
                    >

                        @csrf

                        <button
                            type="submit"
                            class="w-full rounded-xl px-4 py-3 text-left text-sm font-semibold text-slate-400 transition hover:bg-red-500/10 hover:text-red-400"
                        >
                            Sign Out
                        </button>

                    </form>

                </div>

            </div>

        </aside>


        {{-- Main --}}
        <main class="lg:pl-72">

            {{-- Topbar --}}
            <header class="sticky top-0 z-30 border-b border-slate-200 bg-white/90 backdrop-blur">

                <div class="flex h-20 items-center justify-between px-6 lg:px-8">

                    <div>

                        <p class="text-sm text-slate-500">
                            Admin Panel
                        </p>

                        <h1 class="text-xl font-black text-slate-950">
                            @yield('page-title', 'Dashboard')
                        </h1>

                    </div>


                    <a
                        href="{{ route('home') }}"
                        target="_blank"
                        class="rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:border-blue-200 hover:text-blue-600"
                    >
                        View Website ↗
                    </a>

                </div>

            </header>


            {{-- Content --}}
            <div class="p-6 lg:p-8">

                @yield('content')

            </div>

        </main>

    </div>

</body>

</html>