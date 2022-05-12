<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    function dashboard()
    {
        return view('client.dashboard');
    }
}
