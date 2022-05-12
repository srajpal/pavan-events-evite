<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
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

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/login', [LoginController::class, 'login']);

// routes for authenticated (logged in) user that is a client
Route::middleware(['auth', 'isClient'])->group(function () {

    Route::get('/client/dashboard', [ClientController::class, 'dashboard']);

    Route::get('/client/events', [EventController::class, 'show']);
    Route::get('/client/event/create', [EventController::class, 'create']);
    Route::post('/client/event/store', [EventController::class, 'store']);

    Route::get('/client/guests', [GuestController::class, 'show']);
});
