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
    return '<h1>-- web.php - Hi, willkommen auf der Startseite</h1>';
    // return view('welcome');
});

Route::get('/about', function () {
    return '<h1>-- web.php - Mit neuer URL Route bzw. Segment "about"</h1>';
    // return view('welcome');
});