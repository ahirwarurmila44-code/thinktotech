@extends('layouts.app')
@section('title', 'About ThinkToTech — Software Development Company')

@section(
    'meta_description',
    'Learn about ThinkToTech, a software development company building modern websites, custom Laravel applications and business software.'
)

@section(
    'meta_keywords',
    'about ThinkToTech, software development company, Laravel developers, web development'
)
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