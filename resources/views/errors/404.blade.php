@extends('layouts.app')

@section('title', 'Page Not Found — ThinkToTech')

@section('content')

    <section class="flex min-h-[70vh] items-center justify-center px-6 py-20">

        <div class="mx-auto max-w-xl text-center">

            <p class="text-7xl font-black text-blue-600">
                404
            </p>

            <h1 class="mt-6 text-3xl font-black text-slate-950 sm:text-4xl">
                Page not found
            </h1>

            <p class="mt-4 text-slate-500">
                The page you're looking for doesn't exist or may have
                been moved.
            </p>

            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">

                <a
                    href="{{ route('home') }}"
                    class="rounded-xl bg-blue-600 px-6 py-3 text-sm font-bold text-white hover:bg-blue-700"
                >
                    Back to Home
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="rounded-xl border border-slate-200 px-6 py-3 text-sm font-bold text-slate-700 hover:bg-slate-50"
                >
                    Contact Us
                </a>

            </div>

        </div>

    </section>

@endsection