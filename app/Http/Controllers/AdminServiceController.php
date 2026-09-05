<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminServiceController extends Controller
{
    public function index()
    {
        $services = Service::query()
            ->orderBy('sort_order')
            ->latest()
            ->paginate(10);

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],

            'slug' => [
                'nullable',
                'string',
                'max:255',
                'unique:services,slug',
            ],

            'short_description' => [
                'nullable',
                'string',
                'max:500',
            ],

            'description' => [
                'required',
                'string',
            ],

            'icon' => [
                'nullable',
                'string',
                'max:100',
            ],

            'features' => [
                'nullable',
                'string',
            ],

            'technologies' => [
                'nullable',
                'string',
            ],

            'is_featured' => [
                'nullable',
                'boolean',
            ],

            'status' => [
                'required',
                'in:draft,published',
            ],

            'sort_order' => [
                'nullable',
                'integer',
                'min:0',
            ],
        ]);

        $validated['slug'] = $validated['slug']
            ?: Str::slug($validated['name']);

        $validated['features'] = $this->convertToArray(
            $validated['features'] ?? null
        );

        $validated['technologies'] = $this->convertToArray(
            $validated['technologies'] ?? null
        );

        $validated['is_featured'] = $request->boolean('is_featured');

        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        Service::create($validated);

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Service created successfully.');
    }

    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],

            'slug' => [
                'nullable',
                'string',
                'max:255',
                'unique:services,slug,' . $service->id,
            ],

            'short_description' => [
                'nullable',
                'string',
                'max:500',
            ],

            'description' => [
                'required',
                'string',
            ],

            'icon' => [
                'nullable',
                'string',
                'max:100',
            ],

            'features' => [
                'nullable',
                'string',
            ],

            'technologies' => [
                'nullable',
                'string',
            ],

            'is_featured' => [
                'nullable',
                'boolean',
            ],

            'status' => [
                'required',
                'in:draft,published',
            ],

            'sort_order' => [
                'nullable',
                'integer',
                'min:0',
            ],
        ]);

        $validated['slug'] = $validated['slug']
            ?: Str::slug($validated['name']);

        $validated['features'] = $this->convertToArray(
            $validated['features'] ?? null
        );

        $validated['technologies'] = $this->convertToArray(
            $validated['technologies'] ?? null
        );

        $validated['is_featured'] = $request->boolean('is_featured');

        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        $service->update($validated);

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Service deleted successfully.');
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