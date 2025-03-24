<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventRegistration;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Storage;


class AdminEventController extends Controller
{


    public function index()
    {
        $events = Event::latest()->get();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'event_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'location' => 'required|string|max:255',
            'capacity' => 'nullable|integer|min:1',
            'is_active' => 'sometimes|boolean',
        ]);
        $data = $request->except("image");

        if ($request->hasFile('image')) {
            $image = $request->file('image')->storeOnCloudinary("events");
            $data['image_url'] = $image->getSecurePath();
            $data['image_public_id'] = $image->getPublicId();
        }

        $data['is_active'] = $request->has('is_active');

        Event::create($data);

        return redirect()->route('admin.events.index')
            ->with('success', 'Event created successfully');
    }

    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'event_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'location' => 'required|string|max:255',
            'capacity' => 'nullable|integer|min:1',
            'is_active' => 'sometimes|boolean',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($event->image_public_id) {
                Cloudinary::destroy($event->image_public_id);
            }

            $imagePath = $request->file('image')->storeOnCloudinary("events");
            $validated['image_url'] = $imagePath->getSecurePath();
            $validated['image_public_id'] = $imagePath->getPublicId();
        }

        $validated['is_active'] = $request->has('is_active');

        $event->update($validated);

        return redirect()->route('admin.events.index')
            ->with('success', 'Event updated successfully');
    }

    public function destroy(Event $event)
    {
        // Delete image if exists
        if ($event->image_public_id) {
            Cloudinary::destroy($event->image_public_id);
        }

        $event->delete();

        return redirect()->route('admin.events.index')
            ->with('success', 'Event deleted successfully');
    }

    public function registrations(Event $event)
    {
        $registrations = $event->registrations()->latest()->get();
        return view('admin.events.registrations', compact('event', 'registrations'));
    }

    public function updateRegistrationStatus(Request $request, EventRegistration $registration)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,approved,declined',
            'notes' => 'nullable|string',
        ]);

        $registration->update($validated);

        return redirect()->back()->with('success', 'Registration status updated');
    }
}
