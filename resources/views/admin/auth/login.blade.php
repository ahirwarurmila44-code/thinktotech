<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Admin Login — ThinkToTech</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="min-h-screen bg-slate-950">

    <div class="flex min-h-screen items-center justify-center px-6 py-12">

        <div class="w-full max-w-md">

            {{-- Logo --}}
            <div class="mb-8 text-center">

                <a
                    href="{{ route('home') }}"
                    class="inline-flex items-center gap-3"
                >

                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-600 text-xl font-black text-white shadow-lg shadow-blue-600/30">
                        T
                    </div>

                    <span class="text-2xl font-black text-white">
                        ThinkToTech
                    </span>

                </a>

                <p class="mt-3 text-sm text-slate-400">
                    Admin Panel
                </p>

            </div>


            {{-- Login Card --}}
            <div class="rounded-3xl border border-white/10 bg-white p-8 shadow-2xl">

                <div class="mb-8">

                    <h1 class="text-2xl font-black text-slate-950">
                        Welcome back
                    </h1>

                    <p class="mt-2 text-sm text-slate-500">
                        Sign in to manage your ThinkToTech website.
                    </p>

                </div>


                {{-- Errors --}}
                @if ($errors->any())

                    <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 p-4">

                        <ul class="space-y-1 text-sm text-red-700">

                            @foreach ($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                @endif


                <form
                    method="POST"
                    action="{{ route('admin.login.store') }}"
                    class="space-y-6"
                >

                    @csrf


                    {{-- Email --}}
                    <div>

                        <label
                            for="email"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Email Address
                        </label>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="email"
                            class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10"
                            placeholder="admin@thinktotech.com"
                        >

                    </div>


                    {{-- Password --}}
                    <div>

                        <label
                            for="password"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Password
                        </label>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10"
                            placeholder="••••••••"
                        >

                    </div>


                    {{-- Remember --}}
                    <label class="flex items-center gap-3 text-sm text-slate-600">

                        <input
                            type="checkbox"
                            name="remember"
                            value="1"
                            class="h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                        >

                        Remember me

                    </label>


                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="w-full rounded-xl bg-blue-600 px-5 py-3.5 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700 hover:shadow-xl"
                    >
                        Sign In
                    </button>

                </form>


                <div class="mt-8 border-t border-slate-100 pt-6 text-center">

                    <a
                        href="{{ route('home') }}"
                        class="text-sm font-semibold text-slate-500 transition hover:text-blue-600"
                    >
                        ← Back to website
                    </a>

                </div>

            </div>

        </div>

    </div>

</body>
</html>