<div class="grid gap-6 md:grid-cols-2">

    {{-- Service Name --}}
    <div>
        <label class="mb-2 block text-sm font-bold text-slate-700">
            Service Name *
        </label>

        <input
            type="text"
            name="name"
            value="{{ old('name', $service->name ?? '') }}"
            placeholder="Website Development"
            class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
            required
        >
    </div>


    {{-- Slug --}}
    <div>
        <label class="mb-2 block text-sm font-bold text-slate-700">
            Slug
        </label>

        <input
            type="text"
            name="slug"
            value="{{ old('slug', $service->slug ?? '') }}"
            placeholder="website-development"
            class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
        >

        <p class="mt-2 text-xs text-slate-400">
            Leave empty to generate automatically.
        </p>
    </div>


    {{-- Short Description --}}
    <div class="md:col-span-2">
        <label class="mb-2 block text-sm font-bold text-slate-700">
            Short Description
        </label>

        <textarea
            name="short_description"
            rows="3"
            placeholder="A short description of this service..."
            class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
        >{{ old('short_description', $service->short_description ?? '') }}</textarea>
    </div>


    {{-- Full Description --}}
    <div class="md:col-span-2">
        <label class="mb-2 block text-sm font-bold text-slate-700">
            Full Description *
        </label>

        <textarea
            name="description"
            rows="7"
            placeholder="Explain the service in detail..."
            class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
            required
        >{{ old('description', $service->description ?? '') }}</textarea>
    </div>


    {{-- Icon --}}
    <div>
        <label class="mb-2 block text-sm font-bold text-slate-700">
            Icon
        </label>

        <input
            type="text"
            name="icon"
            value="{{ old('icon', $service->icon ?? '') }}"
            placeholder="globe"
            class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
        >

        <p class="mt-2 text-xs text-slate-400">
            Example: globe, code, database, api
        </p>
    </div>


    {{-- Sort Order --}}
    <div>
        <label class="mb-2 block text-sm font-bold text-slate-700">
            Sort Order
        </label>

        <input
            type="number"
            name="sort_order"
            min="0"
            value="{{ old('sort_order', $service->sort_order ?? 0) }}"
            class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
        >
    </div>


    {{-- Features --}}
    <div>
        <label class="mb-2 block text-sm font-bold text-slate-700">
            Features
        </label>

        <textarea
            name="features"
            rows="7"
            placeholder="Responsive design&#10;SEO friendly&#10;Admin panel&#10;Contact forms"
            class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
        >{{ old(
            'features',
            isset($service)
                ? implode("\n", $service->features ?? [])
                : ''
        ) }}</textarea>

        <p class="mt-2 text-xs text-slate-400">
            Enter one feature per line.
        </p>
    </div>


    {{-- Technologies --}}
    <div>
        <label class="mb-2 block text-sm font-bold text-slate-700">
            Technologies
        </label>

        <textarea
            name="technologies"
            rows="7"
            placeholder="Laravel&#10;Blade&#10;Tailwind CSS&#10;MySQL"
            class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
        >{{ old(
            'technologies',
            isset($service)
                ? implode("\n", $service->technologies ?? [])
                : ''
        ) }}</textarea>

        <p class="mt-2 text-xs text-slate-400">
            Enter one technology per line.
        </p>
    </div>


    {{-- Status --}}
    <div>
        <label class="mb-2 block text-sm font-bold text-slate-700">
            Status *
        </label>

        <select
            name="status"
            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
            required
        >
            <option value="published"
                @selected(old('status', $service->status ?? 'published') === 'published')>
                Published
            </option>

            <option value="draft"
                @selected(old('status', $service->status ?? '') === 'draft')>
                Draft
            </option>
        </select>
    </div>


    {{-- Featured --}}
    <div class="flex items-center">

        <label class="flex cursor-pointer items-center gap-3">

            <input
                type="checkbox"
                name="is_featured"
                value="1"
                @checked(old('is_featured', $service->is_featured ?? false))
                class="h-5 w-5 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
            >

            <span>
                <span class="block text-sm font-bold text-slate-700">
                    Featured Service
                </span>

                <span class="block text-xs text-slate-400">
                    Show this service on the homepage.
                </span>
            </span>

        </label>

    </div>

</div>