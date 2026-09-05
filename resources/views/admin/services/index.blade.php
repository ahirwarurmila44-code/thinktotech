@extends('admin.layouts.app')

@section('title', 'Services')

@section('page-title', 'Services')

@section('content')

    <div class="space-y-6">

        @if(session('success'))

            <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-semibold text-emerald-700">
                {{ session('success') }}
            </div>

        @endif


        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

            <div>

                <h2 class="text-2xl font-black text-slate-950">
                    Services
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Manage the services displayed on your ThinkToTech website.
                </p>

            </div>

            <a
                href="{{ route('admin.services.create') }}"
                class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-5 py-3 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700"
            >
                + Add Service
            </a>

        </div>


        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

            <div class="overflow-x-auto">

                <table class="min-w-full text-left">

                    <thead class="border-b border-slate-100 bg-slate-50">

                        <tr>

                            <th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500">
                                Service
                            </th>

                            <th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500">
                                Status
                            </th>

                            <th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500">
                                Featured
                            </th>

                            <th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500">
                                Order
                            </th>

                            <th class="px-6 py-4 text-right text-xs font-black uppercase tracking-wider text-slate-500">
                                Actions
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-slate-100">

                        @forelse($services as $service)

                            <tr class="transition hover:bg-slate-50">

                                <td class="px-6 py-5">

                                    <div class="flex items-center gap-4">

                                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 font-black text-blue-600">
                                            {{ strtoupper(substr($service->name, 0, 1)) }}
                                        </div>

                                        <div>

                                            <a
                                                href="{{ route('admin.services.show', $service) }}"
                                                class="font-bold text-slate-900 hover:text-blue-600"
                                            >
                                                {{ $service->name }}
                                            </a>

                                            <p class="mt-1 text-xs text-slate-400">
                                                /services/{{ $service->slug }}
                                            </p>

                                        </div>

                                    </div>

                                </td>


                                <td class="px-6 py-5">

                                    @if($service->status === 'published')

                                        <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-bold text-emerald-700">
                                            Published
                                        </span>

                                    @else

                                        <span class="rounded-full bg-amber-50 px-3 py-1 text-xs font-bold text-amber-700">
                                            Draft
                                        </span>

                                    @endif

                                </td>


                                <td class="px-6 py-5">

                                    @if($service->is_featured)

                                        <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-bold text-blue-700">
                                            Featured
                                        </span>

                                    @else

                                        <span class="text-xs font-semibold text-slate-400">
                                            No
                                        </span>

                                    @endif

                                </td>


                                <td class="px-6 py-5 text-sm font-bold text-slate-600">
                                    {{ $service->sort_order }}
                                </td>


                                <td class="px-6 py-5">

                                    <div class="flex justify-end gap-2">

                                        <a
                                            href="{{ route('admin.services.show', $service) }}"
                                            class="rounded-lg border border-slate-200 px-3 py-2 text-xs font-bold text-slate-600 hover:bg-slate-50"
                                        >
                                            View
                                        </a>

                                        <a
                                            href="{{ route('admin.services.edit', $service) }}"
                                            class="rounded-lg bg-blue-50 px-3 py-2 text-xs font-bold text-blue-700 hover:bg-blue-100"
                                        >
                                            Edit
                                        </a>

                                        <form
                                            method="POST"
                                            action="{{ route('admin.services.destroy', $service) }}"
                                            onsubmit="return confirm('Are you sure you want to delete this service?')"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="rounded-lg bg-red-50 px-3 py-2 text-xs font-bold text-red-700 hover:bg-red-100"
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
                                    class="px-6 py-16 text-center"
                                >

                                    <div class="text-4xl">
                                        🧩
                                    </div>

                                    <h3 class="mt-4 text-lg font-black text-slate-900">
                                        No services found
                                    </h3>

                                    <p class="mt-2 text-sm text-slate-500">
                                        Add your first service to get started.
                                    </p>

                                    <a
                                        href="{{ route('admin.services.create') }}"
                                        class="mt-5 inline-flex rounded-xl bg-blue-600 px-5 py-3 text-sm font-bold text-white hover:bg-blue-700"
                                    >
                                        Add Service
                                    </a>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            @if($services->hasPages())

                <div class="border-t border-slate-100 px-6 py-4">
                    {{ $services->links() }}
                </div>

            @endif

        </div>

    </div>

@endsection