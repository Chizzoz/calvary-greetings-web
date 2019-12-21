<?php

use App\DailyDevotion;

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

Auth::routes();

Route::get('/', function () {
    $data['devotions'] = DB::table('daily_devotions')->select('id','title','devotion_date','title_slug')->get();
    $data['calendar_head'] = true;
    return view('calendar', $data);
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Daily Devotion Routes
Route::get('/devotion/{daily_devotion}', function (DailyDevotion $daily_devotion) {
    $data['devotion'] = $daily_devotion;
    return view('devotion.view', $data);
})->name('devotion_view');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
