<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display all published projects.
     */
    public function index()
    {
        $projects = Project::query()
            ->where('status', 'published')
            ->latest()
            ->paginate(9);

        return view('projects', compact('projects'));
    }


    /**
     * Display a single project.
     */
    public function show(string $slug)
    {
        $project = Project::query()
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('project-detail', compact('project'));
    }
}