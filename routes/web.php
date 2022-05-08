<?php

use App\Http\Controllers\ClientDashboard;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/client/dashboard', [ClientDashboard::class, 'show']);
Route::get('/client/events', [EventController::class, 'show']);
Route::get('/client/event/create', [EventController::class, 'create']);
Route::post('/client/event/insert', [EventController::class, 'insert']);
Route::get('/client/guests', [GuestController::class, 'show']);
