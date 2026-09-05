@extends('admin.layouts.app')

@section('title', $project->title)

@section('page-title', 'Project Details')

@section('content')

    <div class="mx-auto max-w-5xl">

        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">

            <a
                href="{{ route('admin.projects.index') }}"
                class="text-sm font-semibold text-slate-500 hover:text-blue-600"
            >
                ← Back to Projects
            </a>

            <a
                href="{{ route('admin.projects.edit', $project) }}"
                class="rounded-xl bg-blue-600 px-5 py-3 text-center text-sm font-bold text-white hover:bg-blue-700"
            >
                Edit Project
            </a>

        </div>


        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

            <div class="bg-gradient-to-br from-slate-950 to-slate-800 p-8 text-white sm:p-10">

                <div class="text-sm font-bold text-blue-300">
                    {{ $project->category ?: 'Project' }}
                </div>

                <h2 class="mt-3 text-3xl font-black">
                    {{ $project->title }}
                </h2>

                <p class="mt-3 text-slate-300">
                    /{{ $project->slug }}
                </p>

            </div>


            <div class="grid gap-8 p-8 lg:grid-cols-3">

                <div class="lg:col-span-2">

                    <h3 class="text-lg font-black text-slate-950">
                        Description
                    </h3>

                    <p class="mt-4 whitespace-pre-line leading-8 text-slate-600">
                        {{ $project->description }}
                    </p>

                </div>


                <div>

                    <h3 class="text-lg font-black text-slate-950">
                        Project Status
                    </h3>

                    <div class="mt-4">

                        @if($project->status === 'published')

                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-700">
                                Published
                            </span>

                        @else

                            <span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-bold text-amber-700">
                                Draft
                            </span>

                        @endif

                    </div>

                </div>

            </div>


            <div class="border-t border-slate-100 p-8">

                <h3 class="text-lg font-black text-slate-950">
                    Technologies
                </h3>

                <div class="mt-4 flex flex-wrap gap-2">

                    @foreach($project->technologies ?? [] as $technology)

                        <span class="rounded-full bg-blue-50 px-4 py-2 text-sm font-semibold text-blue-700">
                            {{ $technology }}
                        </span>

                    @endforeach

                </div>

            </div>


            <div class="border-t border-slate-100 p-8">

                <h3 class="text-lg font-black text-slate-950">
                    Features
                </h3>

                <div class="mt-4 grid gap-3 sm:grid-cols-2">

                    @foreach($project->features ?? [] as $feature)

                        <div class="rounded-xl bg-slate-50 px-4 py-3 text-sm font-semibold text-slate-700">
                            ✓ {{ $feature }}
                        </div>

                    @endforeach

                </div>

            </div>


            <div class="border-t border-slate-100 p-8">

                <h3 class="text-lg font-black text-slate-950">
                    Links
                </h3>

                <div class="mt-4 flex flex-wrap gap-3">

                    @if($project->project_url)

                        <a
                            href="{{ $project->project_url }}"
                            target="_blank"
                            class="rounded-xl bg-blue-600 px-5 py-3 text-sm font-bold text-white hover:bg-blue-700"
                        >
                            Live Project ↗
                        </a>

                    @endif

                    @if($project->github_url)

                        <a
                            href="{{ $project->github_url }}"
                            target="_blank"
                            class="rounded-xl border border-slate-200 px-5 py-3 text-sm font-bold text-slate-700 hover:border-blue-200 hover:text-blue-600"
                        >
                            GitHub ↗
                        </a>

                    @endif

                </div>

            </div>

        </div>

    </div>

@endsection