<?php

namespace App\Http\Controllers;

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

    function insert(Request $request)
    {
        dd($request);
    }
}
