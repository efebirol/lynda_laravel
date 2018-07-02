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

Route::get('/home', function () {
    //assoziatives Array
    $data = [];
    $data['version'] = "0.0.2";
    //übergebe hier 2 Parameter. 2te Parameter kann nun in der View verwendet werden über {{}}.
    return view('welcome', $data);
});

//Facade - DB Funktionen
Route::get('/facades/db', function () {
    return DB::select('select * from users');
});

//Facade - Verschlüsselung
Route::get('/facades/encrypt', function () {
    return Crypt::encrypt('123456789');
});

//Facade - Entschlüsselung
Route::get('/facades/decrypt', function () {
    //soll nun wieder entschlüsseln
    return Crypt::decrypt('eyJpdiI6IjlRb3l4M2VqVFM0K1RPMDVzeFwvUEFRPT0iLCJ2YWx1ZSI6InpiOVBEenliaHJ3UUkwSDgrQnlOUzViZVhRUGRBdW5iS1MrZmg1Qys5eG89IiwibWFjIjoiMzZiZGZkMjgxYzY1ZmMxYWQwZjI1MGNmOTg5YWIwYjA1OTU3ZDVlOWE3MjI5YWFmNzJmNGU3NTQ3MmI0OGZhNyJ9
    ');
});
