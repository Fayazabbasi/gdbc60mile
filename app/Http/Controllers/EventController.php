<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display events.
     */
    public function index(Request $request)
    {
        $query = Event::where('status', true);

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $events = $query
            ->orderBy('event_date', 'asc')
            ->orderBy('start_time', 'asc')
            ->get();

            

        // Event categories with event counts
        $categories = Event::where('status', true)
            ->select('category')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('category')
            ->orderBy('category')
            ->get();

        return view('backend.events.create', compact(
            'events',
            'categories'
        ));
    }

    /**
     * Show the form for creating an event.
     */
    public function create()
    {
        return view('backend.events.create');
    }

    /**
     * Store a newly created event.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:100',
            'event_date'  => 'required|date',
            'start_time'  => 'nullable|date_format:H:i',
            'end_time'    => 'nullable|date_format:H:i',
            'location'    => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'link'        => 'nullable|string|max:255',
            'status'      => 'nullable|boolean',
        ]);

        Event::create($validated);

        return redirect()
            ->route('backend.events.index')
            ->with('success', 'Event created successfully.');
    }

    /**
     * Display a single event.
     */
    public function show(Event $event)
    {
        return view('frontend.events.show', compact('event'));
    }

    /**
     * Show the form for editing an event.
     */
    public function edit(Event $event)
    {
        return view('backend.events.edit', compact('event'));
    }

    /**
     * Update an event.
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:100',
            'event_date'  => 'required|date',
            'start_time'  => 'nullable|date_format:H:i',
            'end_time'    => 'nullable|date_format:H:i',
            'location'    => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'link'        => 'nullable|string|max:255',
            'status'      => 'nullable|boolean',
        ]);

        $event->update($validated);

        return redirect()
            ->route('backend.events.index')
            ->with('success', 'Event updated successfully.');
    }

    /**
     * Delete an event.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()
            ->route('backend.events.index')
            ->with('success', 'Event deleted successfully.');
    }
}