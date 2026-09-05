@extends('layouts.app')

@section('title', $project->title . ' — ThinkToTech')

@section('description', $project->short_description)

@section('content')

{{-- Hero --}}
<section class="bg-slate-950 py-24">

    <div class="mx-auto max-w-5xl px-6 lg:px-8">

        <a
            href="{{ route('projects') }}"
            class="text-sm font-semibold text-blue-400 hover:text-blue-300"
        >
            ← Back to Projects
        </a>


        @if($project->category)

            <div class="mt-10 text-sm font-bold uppercase tracking-widest text-blue-400">
                {{ $project->category }}
            </div>

        @endif


        <h1 class="mt-4 text-5xl font-black tracking-tight text-white sm:text-6xl">
            {{ $project->title }}
        </h1>


        <p class="mt-6 max-w-3xl text-xl leading-9 text-slate-400">
            {{ $project->short_description }}
        </p>


        @if($project->technologies)

            <div class="mt-8 flex flex-wrap gap-3">

                @foreach($project->technologies as $technology)

                    <span class="rounded-lg border border-slate-700 bg-slate-900 px-4 py-2 text-sm font-semibold text-slate-300">
                        {{ $technology }}
                    </span>

                @endforeach

            </div>

        @endif

    </div>

</section>


{{-- Project content --}}
<section class="bg-white py-20">

    <div class="mx-auto max-w-5xl px-6 lg:px-8">

        {{-- Image --}}
        <div class="flex min-h-80 items-center justify-center overflow-hidden rounded-3xl bg-gradient-to-br from-blue-600 via-indigo-600 to-violet-600 shadow-2xl">

            @if($project->image)

                <img
                    src="{{ asset('storage/' . $project->image) }}"
                    alt="{{ $project->title }}"
                    class="h-full max-h-[500px] w-full object-cover"
                >

            @else

                <div class="text-center">

                    <div class="text-8xl font-black text-white/20">
                        T
                    </div>

                    <p class="mt-3 text-sm font-bold uppercase tracking-widest text-white/50">
                        ThinkToTech
                    </p>

                </div>

            @endif

        </div>


        {{-- Description --}}
        <div class="mt-16">

            <h2 class="text-3xl font-black text-slate-950">
                About the Project
            </h2>

            <div class="mt-6 text-lg leading-8 text-slate-600">
                {{ $project->description }}
            </div>

        </div>


        {{-- Features --}}
        @if($project->features)

            <div class="mt-16">

                <h2 class="text-3xl font-black text-slate-950">
                    Key Features
                </h2>


                <div class="mt-8 grid gap-4 sm:grid-cols-2">

                    @foreach($project->features as $feature)

                        <div class="flex items-center gap-3 rounded-xl border border-slate-200 bg-slate-50 p-5">

                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-100 font-bold text-blue-600">
                                ✓
                            </span>

                            <span class="font-semibold text-slate-700">
                                {{ $feature }}
                            </span>

                        </div>

                    @endforeach

                </div>

            </div>

        @endif


        {{-- Links --}}
        @if($project->project_url || $project->github_url)

            <div class="mt-16 flex flex-wrap gap-4">

                @if($project->project_url)

                    <a
                        href="{{ $project->project_url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="rounded-xl bg-blue-600 px-6 py-3.5 text-sm font-bold text-white hover:bg-blue-700"
                    >
                        Visit Project
                    </a>

                @endif


                @if($project->github_url)

                    <a
                        href="{{ $project->github_url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="rounded-xl border border-slate-200 px-6 py-3.5 text-sm font-bold text-slate-700 hover:border-slate-300"
                    >
                        View GitHub
                    </a>

                @endif

            </div>

        @endif

    </div>

</section>


{{-- CTA --}}
<section class="bg-slate-950 py-20">

    <div class="mx-auto max-w-4xl px-6 text-center lg:px-8">

        <h2 class="text-4xl font-black text-white">
            Have a similar project?
        </h2>

        <p class="mt-5 text-lg text-slate-400">
            Let's discuss how ThinkToTech can build it for your business.
        </p>

        <a
            href="{{ route('contact') }}"
            class="mt-8 inline-flex rounded-xl bg-blue-600 px-7 py-4 text-sm font-bold text-white hover:bg-blue-700"
        >
            Start a Project
        </a>

    </div>

</section>

@endsection