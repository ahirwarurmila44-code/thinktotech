<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::query()
            ->where('status', 'published')
            ->where('is_featured', true)
            ->orderBy('sort_order')
            ->take(3)
            ->get();

        $projects = Project::query()
            ->where('status', 'published')
            ->where('is_featured', true)
            ->latest()
            ->take(3)
            ->get();

        return view('home', compact(
            'services',
            'projects'
        ));
    }
}