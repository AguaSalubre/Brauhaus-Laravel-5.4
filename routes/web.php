<?php

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
    return view('brauhaus');
});

Route::get('/gaststaette', function () {
    return view('gaststaette');
});

Route::get('/veranstaltungen', function () {
    return view('veranstaltungen');
});

Route::get('/stammtische', function () {
    return view('stammtische');
});

Route::get('/mediathek', function () {
    return view('mediathek');
});

Route::get('/shop', function () {
    return view('shop');
});






