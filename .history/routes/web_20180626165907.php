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

//Info: Array wird in eine JSON konvertiert von Laravel
Route::get('/about', function () {
    // return '<h1>-- web.php - Mit neuer URL Route bzw. Segment "about"</h1>';
    $response_arr = [];
    $response_arr['author'] = "testauthor";
    $response_arr['version'] = "0.0.1";
    return $response_arr;
});

Route::get('/', function () {
    //assoziatives Array
    $data = [];
    $data['version'] = "0.0.2";
    return view('welcome');
});