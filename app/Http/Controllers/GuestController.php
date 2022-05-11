<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    function show()
    {
        return view('client.guests');
    }
}
