<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    private $validation_rules = [
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
    ];

    function show()
    {
        //$events = User::find(Auth::user()->id)->events();
        $upcomingEvents = User::find(Auth::user()->id)->events()->where('start_date_time', '>=', now())->get();
        $pastEvents = User::find(Auth::user()->id)->events()->where('start_date_time', '<', now())->get();
        return view('client.events', [
            //'events' => Auth::user()->events,
            'upcomingEvents' => $upcomingEvents,
            'pastEvents' => $pastEvents
        ]);
    }

    function create()
    {
        return view('client.events-form', [
            'eventTypes' => EventType::all(),
            'event' => new Event(),
            'edit' => false,
        ]);
    }

    function store(Request $request)
    {
        $validated = $request->validate($this->validation_rules);

        // the following line is giving an error in the ide where it cant find user()->events()
        // but it works when you run it
        // the problem is that the User Model extends Authenticatable and that does not have the
        // correct relationship, only the User Model has the correct relationship
        // So we have to initialize using the User Model
        //Auth::user()->events()->create($validated);

        // this works the same as above but does not give the intelephense error
        User::find(Auth::user()->id)->events()->create($validated);

        // the following also does the same thing
        //$validated['user_id'] = Auth::user()->id;
        //Event::create($validated);

        return redirect('/client/events')->with('success', 'Your event has been created.');
    }

    function edit(Event $event)
    {
        return view('client.events-form', [
            'eventTypes' => EventType::all(),
            'event' => $event,
            'edit' => true,
        ]);
    }

    function update(Request $request, Event $event)
    {
        $validated = $request->validate($this->validation_rules);

        $event->fill($validated);
        $event->save();

        return redirect('/client/events')->with('success', 'The event was updated.');
    }

    function invites(Event $event)
    {
        return view('client.invites', [
            'event' => $event,
            'guests' => Auth::user()->guests,
        ]);
    }
}
