@extends('layouts.app')

@section('title', 'Contact ThinkToTech')

@section('description', 'Contact ThinkToTech about your website, software or digital project.')

@section('content')

<section class="bg-slate-950 py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <span class="text-sm font-bold uppercase tracking-widest text-blue-400">
            Contact Us
        </span>

        <h1 class="mt-4 max-w-4xl text-5xl font-black tracking-tight text-white sm:text-6xl">
            Let's talk about your project.
        </h1>

        <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-400">
            Have an idea, business problem or project requirement?
            Send us a message and let's discuss it.
        </p>

    </div>

</section>


<section class="bg-slate-50 py-20">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid gap-12 lg:grid-cols-3">

            {{-- Contact information --}}
            <div>

                <h2 class="text-2xl font-black text-slate-950">
                    Let's build something useful.
                </h2>

                <p class="mt-4 leading-7 text-slate-600">
                    Tell us what you're trying to build, improve or automate.
                    We'll get back to you with the next steps.
                </p>


                <div class="mt-10 space-y-6">

                    <div>
                        <div class="text-sm font-bold text-slate-950">
                            Email
                        </div>

                        <div class="mt-1 text-slate-600">
                            hello@thinktotech.com
                        </div>
                    </div>


                    <div>
                        <div class="text-sm font-bold text-slate-950">
                            Services
                        </div>

                        <div class="mt-1 text-slate-600">
                            Websites, Laravel Software, APIs & Business Systems
                        </div>
                    </div>

                </div>

            </div>


            {{-- Form --}}
            <div class="lg:col-span-2">

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
                    action="{{ route('contact.store') }}"
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
                                class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
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
                                class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                placeholder="you@example.com"
                            >
                        </div>


                        <div>
                            <label class="text-sm font-bold text-slate-700">
                                Phone
                            </label>

                            <input
                                type="text"
                                name="phone"
                                value="{{ old('phone') }}"
                                class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
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
                                class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                placeholder="Company name"
                            >
                        </div>


                        <div class="sm:col-span-2">

                            <label class="text-sm font-bold text-slate-700">
                                Subject
                            </label>

                            <input
                                type="text"
                                name="subject"
                                value="{{ old('subject') }}"
                                class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                placeholder="How can we help?"
                            >

                        </div>


                        <div class="sm:col-span-2">

                            <label class="text-sm font-bold text-slate-700">
                                Message *
                            </label>

                            <textarea
                                name="message"
                                rows="6"
                                required
                                class="mt-2 w-full resize-none rounded-xl border border-slate-200 px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                placeholder="Tell us about your project..."
                            >{{ old('message') }}</textarea>

                        </div>

                    </div>


                    <button
                        type="submit"
                        class="mt-7 inline-flex rounded-xl bg-blue-600 px-7 py-3.5 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-1 hover:bg-blue-700"
                    >
                        Send Message →
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection