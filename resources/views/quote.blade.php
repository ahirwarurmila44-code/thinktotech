@extends('layouts.app')

@section('title', 'Request a Quote — ThinkToTech')

@section(
    'meta_description',
    'Request a quote from ThinkToTech for website development, custom Laravel software, business systems and API development.'
)

@section(
    'meta_keywords',
    'software development quote, website quote, Laravel development quote'
)
@section('description', 'Request a quote for your website or software project from ThinkToTech.')

@section('content')

<section class="bg-slate-950 py-24">

    <div class="mx-auto max-w-4xl px-6 text-center lg:px-8">

        <span class="text-sm font-bold uppercase tracking-widest text-blue-400">
            Start a Project
        </span>

        <h1 class="mt-4 text-5xl font-black tracking-tight text-white sm:text-6xl">
            Tell us what you want to build.
        </h1>

        <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-slate-400">
            Share your requirements and we'll review your project
            and get back to you.
        </p>

    </div>

</section>


<section class="bg-slate-50 py-20">

    <div class="mx-auto max-w-3xl px-6 lg:px-8">

        @if(session('success'))

            <div class="mb-6 rounded-xl border border-green-200 bg-green-50 p-4 text-sm font-semibold text-green-700">
                {{ session('success') }}
            </div>

        @endif


        @if($errors->any())

            <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-5">

                <ul class="space-y-1 text-sm text-red-600">

                    @foreach($errors->all() as $error)

                        <li>• {{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form
            method="POST"
            action="{{ route('quote.store') }}"
            class="rounded-3xl border border-slate-200 bg-white p-8 shadow-xl sm:p-10"
        >

            @csrf

            <div class="grid gap-6 sm:grid-cols-2">

                <div>
                    <label class="text-sm font-bold text-slate-700">
                        Name *
                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                        placeholder="Your name"
                    >
                </div>


                <div>
                    <label class="text-sm font-bold text-slate-700">
                        Email *
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                        placeholder="you@example.com"
                    >
                </div>


                <div>
                    <label class="text-sm font-bold text-slate-700">
                        Phone *
                    </label>

                    <input
                        type="text"
                        name="phone"
                        value="{{ old('phone') }}"
                        required
                        class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                        placeholder="+91..."
                    >
                </div>


                <div>
                    <label class="text-sm font-bold text-slate-700">
                        Company
                    </label>

                    <input
                        type="text"
                        name="company"
                        value="{{ old('company') }}"
                        class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                        placeholder="Company name"
                    >
                </div>


                <div>
                    <label class="text-sm font-bold text-slate-700">
                        Service *
                    </label>

                    <select
                        name="service"
                        required
                        class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                    >

                        <option value="">
                            Select a service
                        </option>

                        <option value="Website Development">
                            Website Development
                        </option>

                        <option value="Custom Laravel Software">
                            Custom Laravel Software
                        </option>

                        <option value="Business Management System">
                            Business Management System
                        </option>

                        <option value="API Development">
                            API Development
                        </option>

                        <option value="Database Development">
                            Database Development
                        </option>

                        <option value="Maintenance & Support">
                            Maintenance & Support
                        </option>

                    </select>

                </div>


                <div>
                    <label class="text-sm font-bold text-slate-700">
                        Budget
                    </label>

                    <select
                        name="budget"
                        class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                    >

                        <option value="">
                            Select budget
                        </option>

                        <option value="Under ₹50,000">
                            Under ₹50,000
                        </option>

                        <option value="₹50,000 - ₹1,00,000">
                            ₹50,000 - ₹1,00,000
                        </option>

                        <option value="₹1,00,000 - ₹3,00,000">
                            ₹1,00,000 - ₹3,00,000
                        </option>

                        <option value="₹3,00,000+">
                            ₹3,00,000+
                        </option>

                        <option value="Not sure">
                            Not sure
                        </option>

                    </select>

                </div>


                <div class="sm:col-span-2">

                    <label class="text-sm font-bold text-slate-700">
                        Project Details *
                    </label>

                    <textarea
                        name="message"
                        rows="7"
                        required
                        class="mt-2 w-full resize-none rounded-xl border border-slate-200 px-4 py-3 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                        placeholder="Describe your project, requirements, expected features, timeline, etc."
                    >{{ old('message') }}</textarea>

                </div>

            </div>


            <button
                type="submit"
                class="mt-7 w-full rounded-xl bg-blue-600 px-7 py-4 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700"
            >
                Request a Quote
            </button>

        </form>

    </div>

</section>

@endsection