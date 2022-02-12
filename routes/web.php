<?php

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
    return view('guest.home', ["comics" => config("comics")]);
})->name("homepage");

Route::get('/superman', function () {
    return view('guest.superman', ["comics" => config("comics"), "comicTitle" => "Action Comics #1000: The Deluxe Edition"]);
})->name("Action Comics #1000: The Deluxe Edition");

Route::get('/vampire', function () {
    return view('guest.batman', ["comics" => config("comics"), "comicTitle" => "American Vampire 1976 #1"]);
})->name("American Vampire 1976 #1");

Route::get('/batman', function () {
    return view('guest.batman', ["comics" => config("comics"), "comicTitle" => "Batman #56"]);
})->name("Batman #56");

Route::get('/aquaman', function () {
    return view('guest.aquaman', ["comics" => config("comics"), "comicTitle" => "Aquaman Vol. 4: Underworld"]);
})->name("Aquaman Vol. 4: Underworld");

Route::get('/batgirl', function () {
    return view('guest.batgirl', ["comics" => config("comics"), "comicTitle" => "Batgirl #1"]);
})->name("Batgirl #1");

Route::get('/batmanbyd', function () {
    return view('guest.batmanbyd', ["comics" => config("comics"), "comicTitle" => "Batman Beyond #1"]);
})->name("Batman Beyond #1");

Route::get('/batman-superman', function () {
    return view('guest.batman-superman', ["comics" => config("comics"), "comicTitle" => "Batman/Superman #1"]);
})->name("Batman/Superman #1");

Route::get('/batman-superman-annual', function () {
    return view('guest.batman-superman-annual', ["comics" => config("comics"), "comicTitle" => "Batman/Superman Annual #1"]);
})->name("Batman/Superman Annual #1");

Route::get('/joker', function () {
    return view('guest.joker', ["comics" => config("comics"), "comicTitle" => "Batman: The Joker War Zone #1"]);
})->name("Batman: The Joker War Zone #1");

Route::get('/joker3', function () {
    return view('guest.joker3', ["comics" => config("comics"), "comicTitle" => "Batman: Three Jokers #1"]);
})->name("Batman: Three Jokers #1");

Route::get('/harley', function () {
    return view('guest.harley', ["comics" => config("comics"), "comicTitle" => "Batman: White Knight Presents: Harley Quinn #1"]);
})->name("Batman: White Knight Presents: Harley Quinn #1");

Route::get('/catwoman', function () {
    return view('guest.catwoman', ["comics" => config("comics"), "comicTitle" => "Catwoman Vol. 1: Copycats"]);
})->name("Catwoman Vol. 1: Copycats");

// Route::get('/vampire', function () {
//     return view('guest.batman', ["comics" => config("comics"), "comicTitle" => ""]);
// })->name("");