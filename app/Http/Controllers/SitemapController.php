<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;

class SitemapController extends Controller
{
    public function index()
    {
        $projects = Project::query()
            ->where('status', 'published')
            ->get();

        $services = Service::query()
            ->where('status', 'published')
            ->get();

        return response()
            ->view('sitemap', compact(
                'projects',
                'services'
            ))
            ->header('Content-Type', 'application/xml');
    }
}