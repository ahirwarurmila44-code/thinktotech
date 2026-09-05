<footer class="border-t border-slate-200 bg-white">

    <div class="mx-auto max-w-7xl px-6 py-14 lg:px-8">

        <div class="grid gap-10 md:grid-cols-4">

            {{-- Company --}}
            <div class="md:col-span-2">

                <div class="mb-4 flex items-center gap-3">

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 font-bold text-white">
                        T
                    </div>

                    <span class="text-xl font-bold text-slate-900">
                        Think<span class="text-blue-600">To</span>Tech
                    </span>

                </div>

                <p class="max-w-md text-sm leading-7 text-slate-500">
                    We build modern websites and powerful software solutions
                    that help businesses work smarter and grow digitally.
                </p>

            </div>

            {{-- Company Links --}}
            <div>

                <h3 class="mb-4 text-sm font-semibold text-slate-900">
                    Company
                </h3>

                <div class="space-y-3 text-sm text-slate-500">

                    <a href="{{ route('about') }}" class="block hover:text-blue-600">
                        About
                    </a>

                    <a href="{{ route('services') }}" class="block hover:text-blue-600">
                        Services
                    </a>

                    <a href="{{ route('projects') }}" class="block hover:text-blue-600">
                        Projects
                    </a>

                    <a href="{{ route('contact') }}" class="block hover:text-blue-600">
                        Contact
                    </a>

                </div>

            </div>

            {{-- Services --}}
            <div>

                <h3 class="mb-4 text-sm font-semibold text-slate-900">
                    Services
                </h3>

                <div class="space-y-3 text-sm text-slate-500">

                    <p>Web Development</p>
                    <p>Custom Software</p>
                    <p>REST APIs</p>
                    <p>Maintenance & Support</p>

                </div>

            </div>

        </div>

        <div class="mt-12 flex flex-col gap-4 border-t border-slate-200 pt-8 text-sm text-slate-500 md:flex-row md:items-center md:justify-between">

            <p>
                © {{ date('Y') }} ThinkToTech. All rights reserved.
            </p>

            <p>
                Modern Websites. Powerful Software.
            </p>

        </div>

    </div>

</footer>