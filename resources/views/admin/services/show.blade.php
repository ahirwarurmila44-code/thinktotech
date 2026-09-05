@extends('admin.layouts.app')

@section('title', $service->name)

@section('page-title', 'Service Details')

@section('content')

    <div class="mx-auto max-w-5xl space-y-6">

        <div class="flex items-center justify-between">

            <a
                href="{{ route('admin.services.index') }}"
                class="text-sm font-semibold text-slate-500 hover:text-blue-600"
            >
                ← Back to Services
            </a>

            <a
                href="{{ route('admin.services.edit', $service) }}"
                class="rounded-xl bg-blue-600 px-5 py-3 text-sm font-bold text-white hover:bg-blue-700"
            >
                Edit Service
            </a>

        </div>


        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

            <div class="bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950 p-8 text-white sm:p-10">

                <div class="flex flex-col gap-6 sm:flex-row sm:items-center">

                    <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-2xl bg-white/10 text-3xl font-black backdrop-blur">
                        {{ strtoupper(substr($service->name, 0, 1)) }}
                    </div>

                    <div>

                        <div class="mb-3 flex flex-wrap gap-2">

                            @if($service->status === 'published')

                                <span class="rounded-full bg-emerald-400/10 px-3 py-1 text-xs font-bold text-emerald-300">
                                    Published
                                </span>

                            @else

                                <span class="rounded-full bg-amber-400/10 px-3 py-1 text-xs font-bold text-amber-300">
                                    Draft
                                </span>

                            @endif

                            @if($service->is_featured)

                                <span class="rounded-full bg-blue-400/10 px-3 py-1 text-xs font-bold text-blue-300">
                                    Featured
                                </span>

                            @endif

                        </div>

                        <h1 class="text-3xl font-black sm:text-4xl">
                            {{ $service->name }}
                        </h1>

                        <p class="mt-2 text-slate-300">
                            {{ $service->short_description }}
                        </p>

                    </div>

                </div>

            </div>


            <div class="space-y-8 p-8">

                <div>

                    <h2 class="text-lg font-black text-slate-950">
                        Description
                    </h2>

                    <div class="mt-3 whitespace-pre-line text-sm leading-7 text-slate-600">
                        {{ $service->description }}
                    </div>

                </div>


                @if(!empty($service->features))

                    <div>

                        <h2 class="text-lg font-black text-slate-950">
                            Features
                        </h2>

                        <div class="mt-4 grid gap-3 sm:grid-cols-2">

                            @foreach($service->features as $feature)

                                <div class="rounded-xl border border-slate-100 bg-slate-50 px-4 py-3 text-sm font-semibold text-slate-700">
                                    ✓ {{ $feature }}
                                </div>

                            @endforeach

                        </div>

                    </div>

                @endif


                @if(!empty($service->technologies))

                    <div>

                        <h2 class="text-lg font-black text-slate-950">
                            Technologies
                        </h2>

                        <div class="mt-4 flex flex-wrap gap-2">

                            @foreach($service->technologies as $technology)

                                <span class="rounded-full bg-blue-50 px-4 py-2 text-xs font-bold text-blue-700">
                                    {{ $technology }}
                                </span>

                            @endforeach

                        </div>

                    </div>

                @endif


                <div class="grid gap-4 border-t border-slate-100 pt-6 sm:grid-cols-3">

                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                            Slug
                        </p>

                        <p class="mt-1 text-sm font-semibold text-slate-700">
                            {{ $service->slug }}
                        </p>
                    </div>

                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                            Sort Order
                        </p>

                        <p class="mt-1 text-sm font-semibold text-slate-700">
                            {{ $service->sort_order }}
                        </p>
                    </div>

                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                            Created
                        </p>

                        <p class="mt-1 text-sm font-semibold text-slate-700">
                            {{ $service->created_at->format('d M Y') }}
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
