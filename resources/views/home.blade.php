@extends('layouts.app')

@section('title', 'ThinkToTech — Modern Websites. Powerful Software.')

@section('content')

<section class="relative overflow-hidden">

    <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8 lg:py-32">

        <div class="max-w-4xl">

            <div class="mb-6 inline-flex items-center rounded-full border border-blue-100 bg-blue-50 px-4 py-2 text-sm font-semibold text-blue-700">
                Software Development Company
            </div>

            <h1 class="text-5xl font-bold tracking-tight text-slate-950 sm:text-6xl lg:text-7xl">
                Modern Websites.
                <span class="block bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                    Powerful Software.
                </span>
            </h1>

            <p class="mt-7 max-w-2xl text-lg leading-8 text-slate-600">
                ThinkToTech builds modern websites and custom software
                solutions that help businesses work smarter, serve customers
                better, and grow digitally.
            </p>

            <div class="mt-10 flex flex-wrap gap-4">

                <a
                    href="{{ route('contact') }}"
                    class="rounded-xl bg-blue-600 px-6 py-3.5 text-sm font-semibold text-white shadow-xl shadow-blue-600/20 transition hover:-translate-y-0.5 hover:bg-blue-700"
                >
                    Start a Project
                </a>

                <a
                    href="{{ route('projects') }}"
                    class="rounded-xl border border-slate-200 bg-white px-6 py-3.5 text-sm font-semibold text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:border-blue-200 hover:text-blue-600"
                >
                    View Our Work
                </a>

            </div>

        </div>

    </div>

</section>

@endsection