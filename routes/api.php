<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Jasonette Routes
Route::get('/calendar', function () {
    return response(view('jasonette.calendar'),200, ['Content-Type' => 'application/json']);
})->name('jasonette_calendar');

Route::get('/about', function () {
    return response(view('jasonette.about'),200, ['Content-Type' => 'application/json']);
})->name('jasonette_about');
