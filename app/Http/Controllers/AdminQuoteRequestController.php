<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use Illuminate\Http\Request;

class AdminQuoteRequestController extends Controller
{
    public function index(Request $request)
    {
        $query = QuoteRequest::query()->latest();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('company', 'like', "%{$search}%")
                    ->orWhere('service', 'like', "%{$search}%");
            });
        }

        $quoteRequests = $query
            ->paginate(15)
            ->withQueryString();

        return view(
            'admin.quote-requests.index',
            compact('quoteRequests')
        );
    }

    public function show(QuoteRequest $quoteRequest)
    {
        return view(
            'admin.quote-requests.show',
            compact('quoteRequest')
        );
    }

    public function update(
        Request $request,
        QuoteRequest $quoteRequest
    ) {
        $validated = $request->validate([
            'status' => [
                'required',
                'in:new,contacted,proposal,won,lost',
            ],
        ]);

        $quoteRequest->update($validated);

        return redirect()
            ->route(
                'admin.quote-requests.show',
                $quoteRequest
            )
            ->with(
                'success',
                'Quote request status updated successfully.'
            );
    }

    public function destroy(QuoteRequest $quoteRequest)
    {
        $quoteRequest->delete();

        return redirect()
            ->route('admin.quote-requests.index')
            ->with(
                'success',
                'Quote request deleted successfully.'
            );
    }
}