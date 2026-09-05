@extends('admin.layouts.app')

@section('title', 'Edit Service')

@section('page-title', 'Edit Service')

@section('content')

    <div class="mx-auto max-w-5xl">

        <div class="mb-6 flex items-center justify-between">

            <a
                href="{{ route('admin.services.index') }}"
                class="text-sm font-semibold text-slate-500 hover:text-blue-600"
            >
                ← Back to Services
            </a>

            <a
                href="{{ route('admin.services.show', $service) }}"
                class="text-sm font-semibold text-blue-600 hover:text-blue-700"
            >
                View Service →
            </a>

        </div>


        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">

            <div class="mb-8">

                <h2 class="text-2xl font-black text-slate-950">
                    Edit Service
                </h2>

                <p class="mt-2 text-sm text-slate-500">
                    Update {{ $service->name }}.
                </p>

            </div>


            @if($errors->any())

                <div class="mb-8 rounded-xl border border-red-200 bg-red-50 p-5">

                    <ul class="space-y-1 text-sm text-red-700">

                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>

                </div>

            @endif


            <form
                method="POST"
                action="{{ route('admin.services.update', $service) }}"
                class="space-y-8"
            >

                @csrf
                @method('PUT')

                @include('admin.services._form')

                <div class="flex flex-col-reverse gap-3 border-t border-slate-100 pt-6 sm:flex-row sm:justify-end">

                    <a
                        href="{{ route('admin.services.index') }}"
                        class="rounded-xl border border-slate-200 px-6 py-3 text-center text-sm font-bold text-slate-600 hover:bg-slate-50"
                    >
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="rounded-xl bg-blue-600 px-6 py-3 text-sm font-bold text-white shadow-lg shadow-blue-600/20 hover:bg-blue-700"
                    >
                        Update Service
                    </button>

                </div>

            </form>

        </div>

    </div>

@endsection