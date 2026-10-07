<?php

namespace App\Http\Controllers;

use App\Models\AdmissionInquiry;
use Illuminate\Http\Request;

class AdmissionInquiryController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:30',
        'program_id' => 'required|exists:programs,id',
        'message' => 'nullable|string',
    ]);

    try {
        AdmissionInquiry::create($validated);

        return back()->with(
            'success',
            'Your inquiry has been submitted successfully.'
        );

    } catch (\Exception $e) {

        return back()
            ->withInput()
            ->with('error', 'Something went wrong. Please try again.');
    }
}
}