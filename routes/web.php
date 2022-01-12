<?php

use Illuminate\Support\Facades\Route; //Route biblioteka

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



//<form action="kelias.php" method="POST">
//</form action="/kelias" method="GET">

// jeigu puslapis galimai perduos informacija i controller - GET
// jeigu puslapis tikrai perduos informacija i controller - POST

Route::get('/about', function () { // slug /about
    return view('about');
});

Route::get('/', function () { // slug /about
    return view('welcome');
});

Route::get('/contact', function () { // slug /about
    return view('contact');
});