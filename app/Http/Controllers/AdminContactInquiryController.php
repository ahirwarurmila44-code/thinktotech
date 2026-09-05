<?php

namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use Illuminate\Http\Request;

class AdminContactInquiryController extends Controller
{
    public function index(Request $request)
    {
        $query = ContactInquiry::query()->latest();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('company', 'like', "%{$search}%")
                    ->orWhere('subject', 'like', "%{$search}%");
            });
        }

        $inquiries = $query
            ->paginate(15)
            ->withQueryString();

        return view(
            'admin.inquiries.index',
            compact('inquiries')
        );
    }

    public function show(ContactInquiry $inquiry)
    {
        return view(
            'admin.inquiries.show',
            compact('inquiry')
        );
    }

    public function update(Request $request, ContactInquiry $inquiry)
    {
        $validated = $request->validate([
            'status' => [
                'required',
                'in:new,contacted,converted,closed',
            ],
        ]);

        $inquiry->update($validated);

        return redirect()
            ->route('admin.inquiries.show', $inquiry)
            ->with('success', 'Inquiry status updated successfully.');
    }

    public function destroy(ContactInquiry $inquiry)
    {
        $inquiry->delete();

        return redirect()
            ->route('admin.inquiries.index')
            ->with('success', 'Inquiry deleted successfully.');
    }
}