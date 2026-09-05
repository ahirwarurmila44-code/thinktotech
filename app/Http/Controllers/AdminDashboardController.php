<?php

namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use App\Models\Project;
use App\Models\QuoteRequest;
use App\Models\Service;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'projects' => Project::count(),

            'services' => Service::count(),

            'new_inquiries' => ContactInquiry::where(
                'status',
                'new'
            )->count(),

            'new_quotes' => QuoteRequest::where(
                'status',
                'new'
            )->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}