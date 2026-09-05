<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProjectController extends Controller
{
    public function index()
    {
        $projects = Project::query()
            ->latest()
            ->paginate(10);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:projects,slug'],
            'category' => ['nullable', 'string', 'max:100'],
            'short_description' => ['nullable', 'string', 'max:500'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'string', 'max:500'],
            'technologies' => ['nullable', 'string'],
            'features' => ['nullable', 'string'],
            'project_url' => ['nullable', 'url', 'max:500'],
            'github_url' => ['nullable', 'url', 'max:500'],
            'is_featured' => ['nullable', 'boolean'],
            'status' => ['required', 'in:draft,published'],
        ]);

        $validated['slug'] = $validated['slug']
            ?: Str::slug($validated['title']);

        $validated['technologies'] = $this->convertToArray(
            $validated['technologies'] ?? null
        );

        $validated['features'] = $this->convertToArray(
            $validated['features'] ?? null
        );

        $validated['is_featured'] = $request->boolean('is_featured');

        Project::create($validated);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => [
                'nullable',
                'string',
                'max:255',
                'unique:projects,slug,' . $project->id,
            ],
            'category' => ['nullable', 'string', 'max:100'],
            'short_description' => ['nullable', 'string', 'max:500'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'string', 'max:500'],
            'technologies' => ['nullable', 'string'],
            'features' => ['nullable', 'string'],
            'project_url' => ['nullable', 'url', 'max:500'],
            'github_url' => ['nullable', 'url', 'max:500'],
            'is_featured' => ['nullable', 'boolean'],
            'status' => ['required', 'in:draft,published'],
        ]);

        $validated['slug'] = $validated['slug']
            ?: Str::slug($validated['title']);

        $validated['technologies'] = $this->convertToArray(
            $validated['technologies'] ?? null
        );

        $validated['features'] = $this->convertToArray(
            $validated['features'] ?? null
        );

        $validated['is_featured'] = $request->boolean('is_featured');

        $project->update($validated);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project deleted successfully.');
    }

    private function convertToArray(?string $value): ?array
    {
        if (!$value) {
            return null;
        }

        return collect(
            preg_split('/[\r\n,]+/', $value)
        )
            ->map(fn ($item) => trim($item))
            ->filter()
            ->values()
            ->toArray();
    }
}