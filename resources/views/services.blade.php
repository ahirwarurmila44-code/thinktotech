@extends('layouts.app')

@section('title', 'Software Development Services — ThinkToTech')

@section(
    'meta_description',
    'Explore ThinkToTech services including website development, custom Laravel software, business management systems, APIs and database development.'
)

@section(
    'meta_keywords',
    'website development, Laravel development, custom software, API development, database development'
)
@section('content')

<section class="bg-slate-950 py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <span class="text-sm font-bold uppercase tracking-widest text-blue-400">
            Our Services
        </span>

        <h1 class="mt-4 max-w-4xl text-5xl font-black tracking-tight text-white sm:text-6xl">
            Technology solutions built around your business.
        </h1>

        <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-400">
            From professional websites to custom business software,
            ThinkToTech helps businesses build, improve and maintain
            their digital products.
        </p>

    </div>

</section>


<section class="bg-slate-50 py-20">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        @if($services->count())

            <div class="grid gap-7 md:grid-cols-2 lg:grid-cols-3">

                @foreach($services as $service)

                    <article
                        class="group rounded-2xl border border-slate-200 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-blue-200 hover:shadow-xl"
                    >

                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-xl font-black text-blue-600">
                            {{ strtoupper(substr($service->name, 0, 1)) }}
                        </div>


                        <h2 class="mt-7 text-2xl font-bold text-slate-950">
                            {{ $service->name }}
                        </h2>


                        <p class="mt-4 leading-7 text-slate-600">
                            {{ $service->short_description }}
                        </p>


                        @if($service->features)

                            <ul class="mt-6 space-y-3">

                                @foreach(array_slice($service->features, 0, 4) as $feature)

                                    <li class="flex items-center gap-3 text-sm text-slate-600">

                                        <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-green-100 text-xs font-bold text-green-600">
                                            ✓
                                        </span>

                                        {{ $feature }}

                                    </li>

                                @endforeach

                            </ul>

                        @endif


                        <a
                            href="{{ route('services.show', $service->slug) }}"
                            class="mt-8 inline-flex items-center gap-2 text-sm font-bold text-blue-600 transition group-hover:gap-3"
                        >
                            Learn More
                            <span>→</span>
                        </a>

                    </article>

                @endforeach

            </div>

        @endif

    </div>

</section>


<section class="bg-white py-20">

    <div class="mx-auto max-w-4xl px-6 text-center lg:px-8">

        <h2 class="text-4xl font-black text-slate-950 sm:text-5xl">
            Not sure what you need?
        </h2>

        <p class="mt-5 text-lg leading-8 text-slate-600">
            Tell us about your business problem and we'll help
            you identify the right technology solution.
        </p>

        <a
            href="{{ route('contact') }}"
            class="mt-8 inline-flex rounded-xl bg-blue-600 px-7 py-4 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-1 hover:bg-blue-700"
        >
            Talk to ThinkToTech
        </a>

    </div>

</section>

@endsection