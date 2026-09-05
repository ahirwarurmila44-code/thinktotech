@extends('layouts.app')

@section('title', $service->name . ' — ThinkToTech')

@section('description', $service->short_description)

@section('content')

<section class="bg-slate-950 py-24">

    <div class="mx-auto max-w-5xl px-6 lg:px-8">

        <a
            href="{{ route('services') }}"
            class="text-sm font-semibold text-blue-400 hover:text-blue-300"
        >
            ← Back to Services
        </a>


        <div class="mt-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-600 text-2xl font-black text-white">
            {{ strtoupper(substr($service->name, 0, 1)) }}
        </div>


        <h1 class="mt-8 text-5xl font-black tracking-tight text-white sm:text-6xl">
            {{ $service->name }}
        </h1>


        <p class="mt-6 max-w-3xl text-xl leading-9 text-slate-400">
            {{ $service->short_description }}
        </p>

    </div>

</section>


<section class="bg-white py-20">

    <div class="mx-auto max-w-5xl px-6 lg:px-8">

        <div class="grid gap-16 lg:grid-cols-3">

            {{-- Main content --}}
            <div class="lg:col-span-2">

                <h2 class="text-3xl font-black text-slate-950">
                    What We Provide
                </h2>

                <p class="mt-6 text-lg leading-8 text-slate-600">
                    {{ $service->description }}
                </p>


                @if($service->features)

                    <h2 class="mt-14 text-3xl font-black text-slate-950">
                        What's Included
                    </h2>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2">

                        @foreach($service->features as $feature)

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

                @endif

            </div>


            {{-- Sidebar --}}
            <aside>

                <div class="sticky top-24 rounded-2xl border border-slate-200 bg-slate-50 p-7">

                    <h3 class="text-lg font-bold text-slate-950">
                        Technologies
                    </h3>


                    @if($service->technologies)

                        <div class="mt-5 flex flex-wrap gap-2">

                            @foreach($service->technologies as $technology)

                                <span class="rounded-lg bg-white px-3 py-2 text-xs font-semibold text-slate-600 shadow-sm ring-1 ring-slate-200">
                                    {{ $technology }}
                                </span>

                            @endforeach

                        </div>

                    @endif


                    <div class="my-7 border-t border-slate-200"></div>


                    <h3 class="text-lg font-bold text-slate-950">
                        Need this service?
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-slate-600">
                        Tell us about your requirements and
                        we'll discuss the best approach.
                    </p>


                    <a
                        href="{{ route('contact') }}"
                        class="mt-6 block rounded-xl bg-blue-600 px-5 py-3.5 text-center text-sm font-bold text-white transition hover:bg-blue-700"
                    >
                        Request a Quote
                    </a>

                </div>

            </aside>

        </div>

    </div>

</section>

@endsection