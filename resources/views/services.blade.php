@extends('layouts.app')

@section('content')

<section class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

    <h1 class="text-4xl font-bold text-slate-900">
        {{ ucfirst(basename(request()->path())) }}
    </h1>

    <p class="mt-4 text-slate-600">
        ThinkToTech page coming soon.
    </p>

</section>

@endsection