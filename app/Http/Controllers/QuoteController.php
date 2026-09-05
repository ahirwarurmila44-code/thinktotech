<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequestForm;
use App\Models\QuoteRequest;

class QuoteController extends Controller
{
    public function index()
    {
        return view('quote');
    }

    public function store(QuoteRequestForm $request)
    {
        QuoteRequest::create($request->validated());

        return redirect()
            ->route('quote')
            ->with('success', 'Your quote request has been submitted. We will contact you soon.');
    }
}