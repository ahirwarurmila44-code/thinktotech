<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display all published services.
     */
    public function index()
    {
        $services = Service::query()
            ->where('status', 'published')
            ->orderBy('sort_order')
            ->get();

        return view('services', compact('services'));
    }


    /**
     * Display a single service.
     */
    public function show(string $slug)
    {
        $service = Service::query()
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('service-detail', compact('service'));
    }
}