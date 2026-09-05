<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactInquiry;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        ContactInquiry::create($request->validated());

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you! Your message has been received. We will contact you soon.');
    }
}