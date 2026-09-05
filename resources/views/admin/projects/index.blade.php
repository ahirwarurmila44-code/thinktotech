@extends('admin.layouts.app')

@section('title', 'Projects')

@section('page-title', 'Projects')

@section('content')

    <div class="space-y-6">

        {{-- Header --}}
        <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-center">

            <div>
                <p class="text-sm text-slate-500">
                    Portfolio Management
                </p>

                <h2 class="mt-1 text-2xl font-black text-slate-950">
                    Projects
                </h2>
            </div>

            <a
                href="{{ route('admin.projects.create') }}"
                class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-5 py-3 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700"
            >
                + Add Project
            </a>

        </div>


        {{-- Success --}}
        @if(session('success'))

            <div class="rounded-xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-semibold text-emerald-700">
                {{ session('success') }}
            </div>

        @endif


        {{-- Table --}}
        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

            <div class="overflow-x-auto">

                <table class="w-full min-w-[900px]">

                    <thead class="border-b border-slate-200 bg-slate-50">

                        <tr>

                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-wider text-slate-500">
                                Project
                            </th>

                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-wider text-slate-500">
                                Category
                            </th>

                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-wider text-slate-500">
                                Status
                            </th>

                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-wider text-slate-500">
                                Featured
                            </th>

                            <th class="px-6 py-4 text-right text-xs font-bold uppercase tracking-wider text-slate-500">
                                Actions
                            </th>

                        </tr>

                    </thead>

                    <tbody class="divide-y divide-slate-100">

                        @forelse($projects as $project)

                            <tr class="transition hover:bg-slate-50">

                                <td class="px-6 py-5">

                                    <div class="font-bold text-slate-950">
                                        {{ $project->title }}
                                    </div>

                                    <div class="mt-1 text-xs text-slate-400">
                                        /{{ $project->slug }}
                                    </div>

                                </td>


                                <td class="px-6 py-5 text-sm text-slate-600">
                                    {{ $project->category ?: '—' }}
                                </td>


                                <td class="px-6 py-5">

                                    @if($project->status === 'published')

                                        <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-700">
                                            Published
                                        </span>

                                    @else

                                        <span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-bold text-amber-700">
                                            Draft
                                        </span>

                                    @endif

                                </td>


                                <td class="px-6 py-5">

                                    @if($project->is_featured)

                                        <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-700">
                                            Featured
                                        </span>

                                    @else

                                        <span class="text-sm text-slate-400">
                                            No
                                        </span>

                                    @endif

                                </td>


                                <td class="px-6 py-5">

                                    <div class="flex justify-end gap-2">

                                        <a
                                            href="{{ route('admin.projects.show', $project) }}"
                                            class="rounded-lg border border-slate-200 px-3 py-2 text-xs font-bold text-slate-600 hover:border-blue-200 hover:text-blue-600"
                                        >
                                            View
                                        </a>

                                        <a
                                            href="{{ route('admin.projects.edit', $project) }}"
                                            class="rounded-lg bg-blue-50 px-3 py-2 text-xs font-bold text-blue-600 hover:bg-blue-100"
                                        >
                                            Edit
                                        </a>

                                        <form
                                            method="POST"
                                            action="{{ route('admin.projects.destroy', $project) }}"
                                            onsubmit="return confirm('Delete this project?');"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="rounded-lg bg-red-50 px-3 py-2 text-xs font-bold text-red-600 hover:bg-red-100"
                                            >
                                                Delete
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="5"
                                    class="px-6 py-12 text-center text-sm text-slate-500"
                                >
                                    No projects found.

                                    <a
                                        href="{{ route('admin.projects.create') }}"
                                        class="font-bold text-blue-600"
                                    >
                                        Create your first project.
                                    </a>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            @if($projects->hasPages())

                <div class="border-t border-slate-200 px-6 py-4">
                    {{ $projects->links() }}
                </div>

            @endif

        </div>

    </div>

@endsection