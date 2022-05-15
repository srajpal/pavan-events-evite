<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    private $validation_rules = [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|max:255',
        'guests' => 'required|numeric',
    ];

    function show()
    {
        return view('client.guests', [
            'guests' => Auth::user()->guests
        ]);
    }

    function create()
    {
        $guestsOptions = [];
        for ($i = 0; $i < 10; $i++) {
            $guestsOptions[]  = ['id' => $i, 'val' => $i];
        }
        return view('client.guests-form', [
            'guest' => new Guest(),
            'guestsOptions' => $guestsOptions,
            'edit' => false,
        ]);
    }

    function store(Request $request)
    {
        $validated = $request->validate($this->validation_rules);

        User::find(Auth::user()->id)->guests()->create($validated);

        return redirect('/client/guests')->with('success', 'Your guest has been created.');
    }

    function edit(Guest $guest)
    {
        $guestsOptions = [];
        for ($i = 0; $i < 10; $i++) {
            $guestsOptions[]  = ['id' => $i, 'val' => $i];
        }
        return view('client.guests-form', [
            'guest' => $guest,
            'guestsOptions' => $guestsOptions,
            'edit' => true,
        ]);
    }

    function update(Request $request, Guest $guest)
    {
        $validated = $request->validate($this->validation_rules);

        $guest->fill($validated);
        $guest->save();

        return redirect('/client/guests')->with('success', 'The guest was updated.');
    }
}
