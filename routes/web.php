<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RsvpController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('/rsvp-entry', [RsvpController::class, 'entry'])->name('rsvp-entry.post');
Route::get('/rsvp-confirm/{id}', [RsvpController::class, 'confirmName'])->name('rsvp-confirm.post');

Route::post('/rsvp', [RsvpController::class, 'confirmRsvp']);