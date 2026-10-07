<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Notice;
use Illuminate\Http\Request;


class NoticeController extends Controller
{
    /**
     * Display a listing of notices.
     */
    public function index()
    {
        $notices = Notice::latest()->paginate(10);

        return view('backend.notices.index', compact('notices'));
    }

    /**
     * Show the form for creating a new notice.
     */
    public function create()
    {
        return view('notices.create');
    }

    /**
     * Store a newly created notice.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
             'category' => 'required|in:admission,notice,announcement,other',
            'attachment' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
            'notice_date' => 'required|date',
            'expiry_date' => 'nullable|date|after_or_equal:notice_date',
            'is_published' => 'nullable|boolean',
            'is_important' => 'nullable|boolean',
        ]);

        if ($request->hasFile('attachment')) {
            $validated['attachment'] = $request
                ->file('attachment')
                ->store('notices', 'public');
        }

        $validated['is_published'] = $request->boolean('is_published');
        $validated['is_important'] = $request->boolean('is_important');

        Notice::create($validated);

        return redirect()
            ->route('notices.index')
            ->with('success', 'Notice created successfully.');
    }

    /**
     * Display the specified notice.
     */
    public function show(Notice $notice)
    {
        return view('notices.show', compact('notice'));
    }

    /**
     * Show the form for editing the specified notice.
     */
    public function edit(Notice $notice)
    {
        return view('notices.edit', compact('notice'));
    }

    /**
     * Update the specified notice.
     */
    public function update(Request $request, Notice $notice)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
             'category' => 'required|in:admission,notice,announcement,other',
            'attachment' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
            'notice_date' => 'required|date',
            'expiry_date' => 'nullable|date|after_or_equal:notice_date',
            'is_published' => 'nullable|boolean',
            'is_important' => 'nullable|boolean',
        ]);

        if ($request->hasFile('attachment')) {

            // Delete old attachment
            if ($notice->attachment) {
                Storage::disk('public')->delete($notice->attachment);
            }

            $validated['attachment'] = $request
                ->file('attachment')
                ->store('notices', 'public');
        }

        $validated['is_published'] = $request->boolean('is_published');
        $validated['is_important'] = $request->boolean('is_important');

        $notice->update($validated);

        return redirect()
            ->route('notices.index')
            ->with('success', 'Notice updated successfully.');
    }

    /**
     * Remove the specified notice.
     */
    public function destroy(Notice $notice)
    {
        if ($notice->attachment) {
            Storage::disk('public')->delete($notice->attachment);
        }

        $notice->delete();

        return redirect()
            ->route('notices.index')
            ->with('success', 'Notice deleted successfully.');
    }

    public function viewPdf($id)
{
     $notice = Notice::findOrFail($id);

    $file = storage_path('app/public/' . $notice->attachment);

    if (!file_exists($file)) {
        abort(404, 'PDF not found');
    }

    return response()->file($file, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="' . basename($file) . '"',
    ]);
}

}