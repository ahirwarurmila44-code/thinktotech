<header class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/90 backdrop-blur-xl">

    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">

        {{-- Logo --}}
        <a
            href="{{ route('home') }}"
            class="group flex items-center gap-3"
        >
            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 text-lg font-bold text-white shadow-lg shadow-blue-600/20">
                T
            </div>

            <div>
                <div class="text-lg font-bold tracking-tight text-slate-900">
                    Think<span class="text-blue-600">To</span>Tech
                </div>

                <div class="text-[10px] font-medium uppercase tracking-[0.2em] text-slate-400">
                    Software Solutions
                </div>
            </div>
        </a>

        {{-- Desktop Navigation --}}
        <div class="hidden items-center gap-8 md:flex">

            <a
                href="{{ route('home') }}"
                class="text-sm font-medium text-slate-600 transition hover:text-blue-600"
            >
                Home
            </a>

            <a
                href="{{ route('about') }}"
                class="text-sm font-medium text-slate-600 transition hover:text-blue-600"
            >
                About
            </a>

            <a
                href="{{ route('services') }}"
                class="text-sm font-medium text-slate-600 transition hover:text-blue-600"
            >
                Services
            </a>

            <a
                href="{{ route('projects') }}"
                class="text-sm font-medium text-slate-600 transition hover:text-blue-600"
            >
                Projects
            </a>

            <a
                href="{{ route('technologies') }}"
                class="text-sm font-medium text-slate-600 transition hover:text-blue-600"
            >
                Technologies
            </a>

            <a
                href="{{ route('contact') }}"
                class="text-sm font-medium text-slate-600 transition hover:text-blue-600"
            >
                Contact
            </a>

        </div>

        {{-- CTA --}}
        <a
            href="{{ route('contact') }}"
            class="hidden rounded-xl bg-slate-900 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-slate-900/10 transition hover:-translate-y-0.5 hover:bg-blue-600 md:inline-flex"
        >
            Start a Project
        </a>

        {{-- Mobile button --}}
        <button
            type="button"
            id="mobile-menu-button"
            class="rounded-lg p-2 text-slate-700 hover:bg-slate-100 md:hidden"
        >
            <svg
                class="h-6 w-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>
        </button>

    </nav>

    {{-- Mobile menu --}}
    <div
        id="mobile-menu"
        class="hidden border-t border-slate-200 bg-white md:hidden"
    >
        <div class="space-y-1 px-6 py-4">

            <a href="{{ route('home') }}" class="block rounded-lg px-4 py-3 text-sm font-medium hover:bg-slate-50">
                Home
            </a>

            <a href="{{ route('about') }}" class="block rounded-lg px-4 py-3 text-sm font-medium hover:bg-slate-50">
                About
            </a>

            <a href="{{ route('services') }}" class="block rounded-lg px-4 py-3 text-sm font-medium hover:bg-slate-50">
                Services
            </a>

            <a href="{{ route('projects') }}" class="block rounded-lg px-4 py-3 text-sm font-medium hover:bg-slate-50">
                Projects
            </a>

            <a href="{{ route('technologies') }}" class="block rounded-lg px-4 py-3 text-sm font-medium hover:bg-slate-50">
                Technologies
            </a>

            <a href="{{ route('contact') }}" class="block rounded-lg px-4 py-3 text-sm font-medium hover:bg-slate-50">
                Contact
            </a>

        </div>
    </div>

</header>