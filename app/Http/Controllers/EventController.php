<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventRegistration;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('is_active', true)
            ->where('event_date', '>=', now()->toDateString())
            ->orderBy('event_date')
            ->get();
        return view('web.events.index', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('web.events.show', compact('event'));
    }

    public function register($id)
    {
        $event = Event::findOrFail($id);

        // Check if event is full
        if ($event->is_full) {
            return redirect()->back()->with('error', 'Sorry, this event is already full.');
        }

        return view('web.events.event-register', compact('event'));
    }

    public function storeRegistration(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        // Check if event is full
        if ($event->is_full) {
            return redirect()->route('web.about.event-detail', $event->id)
                ->with('error', 'Sorry, this event is already full.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        $validated['event_id'] = $event->id;
        $validated['status'] = 'pending';

        EventRegistration::create($validated);

        return redirect()->route('web.events.show', $event->id)
            ->with('success', 'Your registration has been submitted successfully. We will contact you soon.');
    }
}
