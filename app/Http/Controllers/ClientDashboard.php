<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientDashboard extends Controller
{
    function show()
    {
        return view('client.dashboard');
    }
}
