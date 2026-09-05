<div class="grid gap-6 lg:grid-cols-2">

    {{-- Title --}}
    <div class="lg:col-span-2">

        <label
            for="title"
            class="mb-2 block text-sm font-bold text-slate-700"
        >
            Project Title *
        </label>

        <input
            id="title"
            type="text"
            name="title"
            value="{{ old('title', $project->title ?? '') }}"
            required
            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
            placeholder="HRMS Platform"
        >

        @error('title')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

    </div>


    {{-- Slug --}}
    <div>

        <label
            for="slug"
            class="mb-2 block text-sm font-bold text-slate-700"
        >
            Slug
        </label>

        <input
            id="slug"
            type="text"
            name="slug"
            value="{{ old('slug', $project->slug ?? '') }}"
            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
            placeholder="hrms-platform"
        >

        <p class="mt-2 text-xs text-slate-400">
            Leave empty to generate automatically.
        </p>

        @error('slug')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

    </div>


    {{-- Category --}}
    <div>

        <label
            for="category"
            class="mb-2 block text-sm font-bold text-slate-700"
        >
            Category
        </label>

        <input
            id="category"
            type="text"
            name="category"
            value="{{ old('category', $project->category ?? '') }}"
            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
            placeholder="Business Software"
        >

        @error('category')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

    </div>


    {{-- Short Description --}}
    <div class="lg:col-span-2">

        <label
            for="short_description"
            class="mb-2 block text-sm font-bold text-slate-700"
        >
            Short Description
        </label>

        <textarea
            id="short_description"
            name="short_description"
            rows="3"
            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
            placeholder="A short summary of the project..."
        >{{ old('short_description', $project->short_description ?? '') }}</textarea>

        @error('short_description')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

    </div>


    {{-- Description --}}
    <div class="lg:col-span-2">

        <label
            for="description"
            class="mb-2 block text-sm font-bold text-slate-700"
        >
            Full Description *
        </label>

        <textarea
            id="description"
            name="description"
            rows="7"
            required
            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
            placeholder="Explain the project, business problem, solution and results..."
        >{{ old('description', $project->description ?? '') }}</textarea>

        @error('description')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

    </div>


    {{-- Image --}}
    <div class="lg:col-span-2">

        <label
            for="image"
            class="mb-2 block text-sm font-bold text-slate-700"
        >
            Image URL
        </label>

        <input
            id="image"
            type="text"
            name="image"
            value="{{ old('image', $project->image ?? '') }}"
            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
            placeholder="https://example.com/project-image.jpg"
        >

        <p class="mt-2 text-xs text-slate-400">
            We will build proper image upload later.
        </p>

        @error('image')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

    </div>


    {{-- Technologies --}}
    <div>

        <label
            for="technologies"
            class="mb-2 block text-sm font-bold text-slate-700"
        >
            Technologies
        </label>

        <textarea
            id="technologies"
            name="technologies"
            rows="6"
            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
            placeholder="Laravel&#10;PHP&#10;MySQL&#10;Tailwind CSS&#10;JavaScript"
        >{{ old('technologies', isset($project) && is_array($project->technologies) ? implode("\n", $project->technologies) : '') }}</textarea>

        <p class="mt-2 text-xs text-slate-400">
            One technology per line.
        </p>

    </div>


    {{-- Features --}}
    <div>

        <label
            for="features"
            class="mb-2 block text-sm font-bold text-slate-700"
        >
            Features
        </label>

        <textarea
            id="features"
            name="features"
            rows="6"
            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
            placeholder="Employee Management&#10;Attendance Management&#10;Payroll Management"
        >{{ old('features', isset($project) && is_array($project->features) ? implode("\n", $project->features) : '') }}</textarea>

        <p class="mt-2 text-xs text-slate-400">
            One feature per line.
        </p>

    </div>


    {{-- Project URL --}}
    <div>

        <label
            for="project_url"
            class="mb-2 block text-sm font-bold text-slate-700"
        >
            Live Project URL
        </label>

        <input
            id="project_url"
            type="url"
            name="project_url"
            value="{{ old('project_url', $project->project_url ?? '') }}"
            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
            placeholder="https://example.com"
        >

        @error('project_url')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

    </div>


    {{-- GitHub --}}
    <div>

        <label
            for="github_url"
            class="mb-2 block text-sm font-bold text-slate-700"
        >
            GitHub URL
        </label>

        <input
            id="github_url"
            type="url"
            name="github_url"
            value="{{ old('github_url', $project->github_url ?? '') }}"
            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
            placeholder="https://github.com/..."
        >

        @error('github_url')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

    </div>


    {{-- Status --}}
    <div>

        <label
            for="status"
            class="mb-2 block text-sm font-bold text-slate-700"
        >
            Status
        </label>

        <select
            id="status"
            name="status"
            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
        >

            <option
                value="published"
                @selected(old('status', $project->status ?? 'published') === 'published')
            >
                Published
            </option>

            <option
                value="draft"
                @selected(old('status', $project->status ?? '') === 'draft')
            >
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
                @checked(old('is_featured', $project->is_featured ?? false))
                class="h-5 w-5 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
            >

            <span>

                <span class="block text-sm font-bold text-slate-700">
                    Featured Project
                </span>

                <span class="block text-xs text-slate-400">
                    Show this project on the homepage.
                </span>

            </span>

        </label>

    </div>

</div>