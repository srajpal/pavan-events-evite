<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventType;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    function show()
    {
        // $user = User::find(2);
        // $events = $user->events;
        // dd($events);
        return view('client.events', [
            'events' => User::find(2)->events
        ]);
    }

    function create()
    {
        return view('client.events-form', [
            'eventTypes' => EventType::all()
        ]);
    }

    function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'event_type' => 'required|exists:event_types,id',
            'start_date_time' => 'required|date',
            'end_date_time' => 'required|date|after:start_date_time',
            'host' => 'required|max:255',
            'message' => 'required|max:1000',
            'location_name' => 'required|max:255',
            'location_address' => 'required|max:255',
            'location_address2' => 'nullable|max:255',
            'location_city' => 'required|max:255',
            'location_state' => 'required|max:255',
            'location_zip' => 'required|digits:5',
            'location_phone' => 'nullable|max:255',
            'location_email' => 'nullable|email|max:255',
            'location_url' => 'nullable|url|max:255',
        ]);

        Event::create($validated);

        return view('client.events')->with('success', 'Your event has been created.');
    }
}
