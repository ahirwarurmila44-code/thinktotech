@extends('layouts.app')

@section('title', 'Our Projects — ThinkToTech')

@section('description', 'Explore software, websites and digital solutions built by ThinkToTech.')

@section('content')

<section class="bg-slate-950 py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="max-w-3xl">

            <span class="text-sm font-bold uppercase tracking-widest text-blue-400">
                Our Work
            </span>

            <h1 class="mt-4 text-5xl font-black tracking-tight text-white sm:text-6xl">
                Projects we've built.
            </h1>

            <p class="mt-6 text-lg leading-8 text-slate-400">
                Explore some of the websites and software solutions
                we've designed and developed.
            </p>

        </div>

    </div>

</section>


<section class="bg-slate-50 py-20">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        @if($projects->count())

            <div class="grid gap-7 md:grid-cols-2 lg:grid-cols-3">

                @foreach($projects as $project)

                    <article
                        class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl"
                    >

                        {{-- Project image placeholder --}}
                        <div class="flex h-56 items-center justify-center bg-gradient-to-br from-blue-600 via-indigo-600 to-violet-600">

                            @if($project->image)

                                <img
                                    src="{{ asset('storage/' . $project->image) }}"
                                    alt="{{ $project->title }}"
                                    class="h-full w-full object-cover"
                                >

                            @else

                                <div class="text-center">

                                    <div class="text-6xl font-black text-white/20">
                                        T
                                    </div>

                                    <div class="mt-2 text-xs font-bold uppercase tracking-widest text-white/50">
                                        ThinkToTech
                                    </div>

                                </div>

                            @endif

                        </div>


                        <div class="p-7">

                            @if($project->category)

                                <span class="text-xs font-bold uppercase tracking-widest text-blue-600">
                                    {{ $project->category }}
                                </span>

                            @endif


                            <h2 class="mt-3 text-2xl font-bold text-slate-950">
                                {{ $project->title }}
                            </h2>


                            <p class="mt-3 leading-7 text-slate-600">
                                {{ $project->short_description }}
                            </p>


                            @if($project->technologies)

                                <div class="mt-5 flex flex-wrap gap-2">

                                    @foreach(array_slice($project->technologies, 0, 3) as $technology)

                                        <span class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-semibold text-slate-600">
                                            {{ $technology }}
                                        </span>

                                    @endforeach

                                </div>

                            @endif


                            <a
                                href="{{ route('projects.show', $project->slug) }}"
                                class="mt-7 inline-flex items-center gap-2 text-sm font-bold text-blue-600 transition group-hover:gap-3"
                            >
                                View Project

                                <span>→</span>
                            </a>

                        </div>

                    </article>

                @endforeach

            </div>


            {{-- Pagination --}}
            <div class="mt-12">
                {{ $projects->links() }}
            </div>

        @else

            <div class="rounded-2xl border border-slate-200 bg-white p-12 text-center">

                <h2 class="text-2xl font-bold text-slate-950">
                    Projects coming soon.
                </h2>

                <p class="mt-3 text-slate-600">
                    We're currently preparing our project portfolio.
                </p>

            </div>

        @endif

    </div>

</section>

@endsection