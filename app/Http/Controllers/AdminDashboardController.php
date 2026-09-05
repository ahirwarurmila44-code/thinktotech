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

            'published_projects' => Project::where(
                'status',
                'published'
            )->count(),

            'services' => Service::count(),

            'published_services' => Service::where(
                'status',
                'published'
            )->count(),

            'new_inquiries' => ContactInquiry::where(
                'status',
                'new'
            )->count(),

            'total_inquiries' => ContactInquiry::count(),

            'new_quotes' => QuoteRequest::where(
                'status',
                'new'
            )->count(),

            'total_quotes' => QuoteRequest::count(),

            'won_quotes' => QuoteRequest::where(
                'status',
                'won'
            )->count(),

            'lost_quotes' => QuoteRequest::where(
                'status',
                'lost'
            )->count(),
        ];


        $inquiryPipeline = [
            'new' => ContactInquiry::where(
                'status',
                'new'
            )->count(),

            'contacted' => ContactInquiry::where(
                'status',
                'contacted'
            )->count(),

            'converted' => ContactInquiry::where(
                'status',
                'converted'
            )->count(),

            'closed' => ContactInquiry::where(
                'status',
                'closed'
            )->count(),
        ];


        $quotePipeline = [
            'new' => QuoteRequest::where(
                'status',
                'new'
            )->count(),

            'contacted' => QuoteRequest::where(
                'status',
                'contacted'
            )->count(),

            'proposal' => QuoteRequest::where(
                'status',
                'proposal'
            )->count(),

            'won' => QuoteRequest::where(
                'status',
                'won'
            )->count(),

            'lost' => QuoteRequest::where(
                'status',
                'lost'
            )->count(),
        ];


        $recentInquiries = ContactInquiry::query()
            ->latest()
            ->take(5)
            ->get();


        $recentQuotes = QuoteRequest::query()
            ->latest()
            ->take(5)
            ->get();


        $conversionRate = $stats['total_quotes'] > 0
            ? round(
                ($stats['won_quotes'] / $stats['total_quotes']) * 100,
                1
            )
            : 0;


        return view('admin.dashboard', compact(
            'stats',
            'inquiryPipeline',
            'quotePipeline',
            'recentInquiries',
            'recentQuotes',
            'conversionRate'
        ));
    }
}