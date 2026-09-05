@extends('layouts.app')

@section('title', 'ThinkToTech — Modern Websites. Powerful Software.')

@section('description', 'ThinkToTech builds modern websites, custom software and business solutions for growing companies.')

@section('content')

{{-- =========================================================
     HERO SECTION
========================================================= --}}
<section class="relative overflow-hidden bg-white">

    {{-- Background decoration --}}
    <div class="absolute -left-32 -top-32 h-96 w-96 rounded-full bg-blue-100/60 blur-3xl"></div>
    <div class="absolute -right-32 top-20 h-96 w-96 rounded-full bg-indigo-100/60 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-6 py-24 lg:px-8 lg:py-32">

        <div class="grid items-center gap-16 lg:grid-cols-2">

            {{-- Hero content --}}
            <div>

                <div class="mb-7 inline-flex items-center gap-2 rounded-full border border-blue-100 bg-blue-50 px-4 py-2 text-sm font-semibold text-blue-700">
                    <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                    Software Development Company
                </div>

                <h1 class="text-5xl font-black leading-tight tracking-tight text-slate-950 sm:text-6xl lg:text-7xl">

                    We Build

                    <span class="block bg-gradient-to-r from-blue-600 via-indigo-600 to-violet-600 bg-clip-text text-transparent">
                        Digital Solutions
                    </span>

                    That Grow Businesses.

                </h1>

                <p class="mt-7 max-w-2xl text-lg leading-8 text-slate-600">
                    ThinkToTech helps businesses build modern websites,
                    powerful software and reliable digital products
                    designed for real-world growth.
                </p>

                <div class="mt-10 flex flex-wrap gap-4">

                    <a
                        href="{{ route('contact') }}"
                        class="group inline-flex items-center gap-2 rounded-xl bg-blue-600 px-6 py-3.5 text-sm font-bold text-white shadow-xl shadow-blue-600/20 transition duration-300 hover:-translate-y-1 hover:bg-blue-700"
                    >
                        Start a Project

                        <svg
                            class="h-5 w-5 transition-transform group-hover:translate-x-1"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"
                            />
                        </svg>
                    </a>

                    <a
                        href="{{ route('projects') }}"
                        class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-6 py-3.5 text-sm font-bold text-slate-700 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:text-blue-600"
                    >
                        View Our Work
                    </a>

                </div>

                {{-- Small trust points --}}
                <div class="mt-10 flex flex-wrap gap-x-8 gap-y-3 text-sm text-slate-500">

                    <div class="flex items-center gap-2">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-green-100 text-green-600">
                            ✓
                        </span>
                        Custom Solutions
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-green-100 text-green-600">
                            ✓
                        </span>
                        Scalable Technology
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-green-100 text-green-600">
                            ✓
                        </span>
                        Business Focused
                    </div>

                </div>

            </div>

            {{-- Hero visual --}}
            <div class="relative">

                <div class="absolute -inset-6 rounded-[2rem] bg-gradient-to-r from-blue-100 to-indigo-100 blur-2xl"></div>

                <div class="relative overflow-hidden rounded-[2rem] border border-slate-200 bg-slate-950 p-6 shadow-2xl">

                    {{-- Browser header --}}
                    <div class="mb-6 flex items-center gap-2">

                        <span class="h-3 w-3 rounded-full bg-red-400"></span>
                        <span class="h-3 w-3 rounded-full bg-yellow-400"></span>
                        <span class="h-3 w-3 rounded-full bg-green-400"></span>

                        <div class="ml-4 flex-1 rounded-lg bg-slate-800 px-4 py-2 text-xs text-slate-400">
                            thinktotech.com
                        </div>

                    </div>

                    {{-- Code-style visual --}}
                    <div class="space-y-4 font-mono text-sm">

                        <div class="text-blue-400">
                            &lt;ThinkToTech /&gt;
                        </div>

                        <div class="rounded-xl bg-slate-900 p-5">

                            <div class="text-slate-500">
                                // Build. Scale. Grow.
                            </div>

                            <div class="mt-4 text-purple-400">
                                const
                                <span class="text-white">solution</span>
                                =
                            </div>

                            <div class="ml-6 text-green-400">
                                "business-ready";
                            </div>

                            <div class="mt-4 text-purple-400">
                                const
                                <span class="text-white">technology</span>
                                =
                            </div>

                            <div class="ml-6 text-blue-400">
                                [
                                <span class="text-green-400">"Laravel"</span>,
                                <span class="text-green-400">"PHP"</span>,
                                <span class="text-green-400">"MySQL"</span>
                                ];
                            </div>

                        </div>

                        {{-- Mini cards --}}
                        <div class="grid grid-cols-3 gap-3">

                            <div class="rounded-xl border border-slate-800 bg-slate-900 p-4">
                                <div class="text-2xl font-bold text-white">01</div>
                                <div class="mt-1 text-xs text-slate-500">Plan</div>
                            </div>

                            <div class="rounded-xl border border-slate-800 bg-slate-900 p-4">
                                <div class="text-2xl font-bold text-white">02</div>
                                <div class="mt-1 text-xs text-slate-500">Build</div>
                            </div>

                            <div class="rounded-xl border border-slate-800 bg-slate-900 p-4">
                                <div class="text-2xl font-bold text-white">03</div>
                                <div class="mt-1 text-xs text-slate-500">Grow</div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     TECHNOLOGY STRIP
========================================================= --}}
<section class="border-y border-slate-200 bg-slate-50">

    <div class="mx-auto max-w-7xl px-6 py-10 lg:px-8">

        <div class="text-center">

            <p class="text-sm font-semibold uppercase tracking-widest text-slate-400">
                Technologies We Work With
            </p>

            <div class="mt-7 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-6">

                @foreach([
                    'Laravel',
                    'PHP',
                    'MySQL',
                    'JavaScript',
                    'Linux',
                    'Git & GitHub'
                ] as $technology)

                    <div class="rounded-xl border border-slate-200 bg-white px-4 py-4 text-sm font-bold text-slate-700 shadow-sm">
                        {{ $technology }}
                    </div>

                @endforeach

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     SERVICES
========================================================= --}}
<section class="bg-white py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="max-w-2xl">

            <span class="text-sm font-bold uppercase tracking-widest text-blue-600">
                What We Do
            </span>

            <h2 class="mt-3 text-4xl font-black tracking-tight text-slate-950 sm:text-5xl">
                Software that solves real business problems.
            </h2>

            <p class="mt-5 text-lg leading-8 text-slate-600">
                From business websites to custom applications,
                we create practical technology that helps your
                business operate and grow.
            </p>

        </div>


        <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            {{-- Service 1 --}}
            <div class="group rounded-2xl border border-slate-200 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-blue-200 hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-blue-600">

                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 5h18M3 5v14h18V5M7 9h10M7 13h4"
                        />
                    </svg>

                </div>

                <h3 class="mt-7 text-xl font-bold text-slate-950">
                    Website Development
                </h3>

                <p class="mt-3 leading-7 text-slate-600">
                    Fast, responsive and professional websites
                    designed to turn visitors into customers.
                </p>

                <a
                    href="{{ route('services') }}"
                    class="mt-6 inline-flex text-sm font-bold text-blue-600"
                >
                    Explore Service →
                </a>

            </div>


            {{-- Service 2 --}}
            <div class="group rounded-2xl border border-slate-200 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-indigo-200 hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-indigo-50 text-indigo-600">

                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M8 9l3 3-3 3m5 0h3M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"
                        />
                    </svg>

                </div>

                <h3 class="mt-7 text-xl font-bold text-slate-950">
                    Custom Software
                </h3>

                <p class="mt-3 leading-7 text-slate-600">
                    Business applications built around your
                    processes, workflows and requirements.
                </p>

                <a
                    href="{{ route('services') }}"
                    class="mt-6 inline-flex text-sm font-bold text-indigo-600"
                >
                    Explore Service →
                </a>

            </div>


            {{-- Service 3 --}}
            <div class="group rounded-2xl border border-slate-200 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-violet-200 hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-violet-50 text-violet-600">

                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 3v18m9-9H3m15.364-6.364L5.636 17.636m12.728 0L5.636 6.636"
                        />
                    </svg>

                </div>

                <h3 class="mt-7 text-xl font-bold text-slate-950">
                    API & Integrations
                </h3>

                <p class="mt-3 leading-7 text-slate-600">
                    Secure APIs and integrations that connect
                    your applications and business systems.
                </p>

                <a
                    href="{{ route('services') }}"
                    class="mt-6 inline-flex text-sm font-bold text-violet-600"
                >
                    Explore Service →
                </a>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     FEATURED PROJECTS
========================================================= --}}
<section class="bg-slate-950 py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">

            <div class="max-w-2xl">

                <span class="text-sm font-bold uppercase tracking-widest text-blue-400">
                    Our Work
                </span>

                <h2 class="mt-3 text-4xl font-black tracking-tight text-white sm:text-5xl">
                    Projects we're proud of.
                </h2>

                <p class="mt-5 text-lg leading-8 text-slate-400">
                    Real applications and digital solutions built
                    using modern technologies.
                </p>

            </div>

            <a
                href="{{ route('projects') }}"
                class="inline-flex items-center text-sm font-bold text-blue-400 hover:text-blue-300"
            >
                View All Projects →
            </a>

        </div>


        <div class="mt-14 grid gap-6 lg:grid-cols-3">

            @foreach([
                [
                    'title' => 'HRMS Platform',
                    'category' => 'Business Software',
                    'description' => 'A complete human resource management platform for employees, attendance, leave and payroll.',
                    'technology' => 'Laravel • React • MySQL'
                ],
                [
                    'title' => 'Business Management',
                    'category' => 'Custom Software',
                    'description' => 'A scalable business application designed to simplify operations and manage daily workflows.',
                    'technology' => 'Laravel • PHP • MySQL'
                ],
                [
                    'title' => 'Corporate Website',
                    'category' => 'Web Development',
                    'description' => 'A modern responsive company website focused on brand presentation and lead generation.',
                    'technology' => 'Laravel • Blade • Tailwind'
                ]
            ] as $project)

                <article class="group overflow-hidden rounded-2xl border border-slate-800 bg-slate-900">

                    <div class="flex h-52 items-center justify-center bg-gradient-to-br from-blue-600/20 via-indigo-600/10 to-violet-600/20">

                        <div class="text-center">

                            <div class="text-4xl font-black text-white/20">
                                T
                            </div>

                            <div class="mt-2 text-xs font-semibold uppercase tracking-widest text-slate-500">
                                ThinkToTech
                            </div>

                        </div>

                    </div>

                    <div class="p-7">

                        <span class="text-xs font-bold uppercase tracking-widest text-blue-400">
                            {{ $project['category'] }}
                        </span>

                        <h3 class="mt-3 text-2xl font-bold text-white">
                            {{ $project['title'] }}
                        </h3>

                        <p class="mt-3 leading-7 text-slate-400">
                            {{ $project['description'] }}
                        </p>

                        <div class="mt-6 border-t border-slate-800 pt-5 text-sm font-semibold text-slate-500">
                            {{ $project['technology'] }}
                        </div>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>


{{-- =========================================================
     WHY THINKTOTECH
========================================================= --}}
<section class="bg-white py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid gap-16 lg:grid-cols-2 lg:items-center">

            <div>

                <span class="text-sm font-bold uppercase tracking-widest text-blue-600">
                    Why ThinkToTech
                </span>

                <h2 class="mt-3 text-4xl font-black tracking-tight text-slate-950 sm:text-5xl">
                    Technology should make business easier.
                </h2>

                <p class="mt-6 text-lg leading-8 text-slate-600">
                    We don't build software just for the sake of technology.
                    We focus on understanding the business problem first,
                    then build a solution around it.
                </p>

                <div class="mt-10 space-y-6">

                    @foreach([
                        [
                            'title' => 'Business First',
                            'description' => 'We understand your requirements before writing code.'
                        ],
                        [
                            'title' => 'Clean & Scalable',
                            'description' => 'We build maintainable systems that can grow with your business.'
                        ],
                        [
                            'title' => 'Transparent Process',
                            'description' => 'Clear communication from planning through deployment.'
                        ],
                        [
                            'title' => 'Long-Term Support',
                            'description' => 'We can continue improving and supporting your product.'
                        ]
                    ] as $item)

                        <div class="flex gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 font-bold text-blue-600">
                                ✓
                            </div>

                            <div>
                                <h3 class="font-bold text-slate-950">
                                    {{ $item['title'] }}
                                </h3>

                                <p class="mt-1 text-sm leading-6 text-slate-600">
                                    {{ $item['description'] }}
                                </p>
                            </div>

                        </div>

                    @endforeach

                </div>

            </div>


            {{-- Stats card --}}
            <div class="relative">

                <div class="absolute -inset-5 rounded-[2rem] bg-gradient-to-r from-blue-100 to-indigo-100 blur-2xl"></div>

                <div class="relative rounded-[2rem] border border-slate-200 bg-white p-8 shadow-2xl">

                    <div class="grid grid-cols-2 gap-5">

                        <div class="rounded-2xl bg-blue-50 p-6">
                            <div class="text-4xl font-black text-blue-600">
                                3+
                            </div>
                            <p class="mt-2 text-sm font-semibold text-slate-600">
                                Projects Built
                            </p>
                        </div>

                        <div class="rounded-2xl bg-indigo-50 p-6">
                            <div class="text-4xl font-black text-indigo-600">
                                5+
                            </div>
                            <p class="mt-2 text-sm font-semibold text-slate-600">
                                Technologies
                            </p>
                        </div>

                        <div class="rounded-2xl bg-violet-50 p-6">
                            <div class="text-4xl font-black text-violet-600">
                                100%
                            </div>
                            <p class="mt-2 text-sm font-semibold text-slate-600">
                                Custom Built
                            </p>
                        </div>

                        <div class="rounded-2xl bg-slate-100 p-6">
                            <div class="text-4xl font-black text-slate-800">
                                24/7
                            </div>
                            <p class="mt-2 text-sm font-semibold text-slate-600">
                                Digital Possibilities
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     DEVELOPMENT PROCESS
========================================================= --}}
<section class="bg-slate-50 py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-2xl text-center">

            <span class="text-sm font-bold uppercase tracking-widest text-blue-600">
                Our Process
            </span>

            <h2 class="mt-3 text-4xl font-black tracking-tight text-slate-950 sm:text-5xl">
                From idea to production.
            </h2>

            <p class="mt-5 text-lg leading-8 text-slate-600">
                A simple and transparent process designed to
                turn your idea into a working product.
            </p>

        </div>


        <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-4">

            @foreach([
                [
                    'number' => '01',
                    'title' => 'Discover',
                    'description' => 'Understand your business, users and requirements.'
                ],
                [
                    'number' => '02',
                    'title' => 'Plan',
                    'description' => 'Define features, technology, architecture and timeline.'
                ],
                [
                    'number' => '03',
                    'title' => 'Build',
                    'description' => 'Develop, test and continuously improve the product.'
                ],
                [
                    'number' => '04',
                    'title' => 'Launch',
                    'description' => 'Deploy your product and provide ongoing support.'
                ]
            ] as $step)

                <div class="relative rounded-2xl border border-slate-200 bg-white p-7 shadow-sm">

                    <div class="text-5xl font-black text-blue-100">
                        {{ $step['number'] }}
                    </div>

                    <h3 class="mt-4 text-xl font-bold text-slate-950">
                        {{ $step['title'] }}
                    </h3>

                    <p class="mt-3 leading-7 text-slate-600">
                        {{ $step['description'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- =========================================================
     TECHNOLOGIES
========================================================= --}}
<section class="bg-white py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-2xl text-center">

            <span class="text-sm font-bold uppercase tracking-widest text-blue-600">
                Our Technology
            </span>

            <h2 class="mt-3 text-4xl font-black text-slate-950 sm:text-5xl">
                Built with modern tools.
            </h2>

            <p class="mt-5 text-lg leading-8 text-slate-600">
                We use reliable technologies to create secure,
                maintainable and scalable applications.
            </p>

        </div>


        <div class="mt-14 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-6">

            @foreach([
                'Laravel',
                'PHP',
                'MySQL',
                'JavaScript',
                'Tailwind CSS',
                'Linux',
                'Apache',
                'Git',
                'GitHub',
                'REST APIs',
                'HTML5',
                'CSS3'
            ] as $technology)

                <div class="group rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-lg">

                    <div class="text-lg font-bold text-slate-800 transition group-hover:text-blue-600">
                        {{ $technology }}
                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- =========================================================
     CTA
========================================================= --}}
<section class="relative overflow-hidden bg-slate-950">

    <div class="absolute -left-40 -top-40 h-96 w-96 rounded-full bg-blue-600/20 blur-3xl"></div>
    <div class="absolute -bottom-40 -right-40 h-96 w-96 rounded-full bg-indigo-600/20 blur-3xl"></div>

    <div class="relative mx-auto max-w-5xl px-6 py-24 text-center lg:px-8">

        <span class="text-sm font-bold uppercase tracking-widest text-blue-400">
            Have an Idea?
        </span>

        <h2 class="mt-4 text-4xl font-black tracking-tight text-white sm:text-5xl lg:text-6xl">
            Let's build something
            <span class="text-blue-400">great.</span>
        </h2>

        <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-slate-400">
            Tell us about your project, business problem or idea.
            We'll help you turn it into a practical digital solution.
        </p>

        <div class="mt-10 flex flex-wrap justify-center gap-4">

            <a
                href="{{ route('contact') }}"
                class="rounded-xl bg-blue-600 px-7 py-4 text-sm font-bold text-white shadow-xl shadow-blue-600/20 transition hover:-translate-y-1 hover:bg-blue-700"
            >
                Start Your Project
            </a>

            <a
                href="{{ route('projects') }}"
                class="rounded-xl border border-slate-700 px-7 py-4 text-sm font-bold text-white transition hover:-translate-y-1 hover:border-slate-500 hover:bg-slate-900"
            >
                Explore Our Work
            </a>

        </div>

    </div>

</section>

@endsection