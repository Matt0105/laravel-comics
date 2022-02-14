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

Route::get('characters', function () {
    return view('guest.home', ["comics" => config("comics")]);
})->name("characters");

Route::get('movies', function () {
    return view('guest.home', ["comics" => config("comics")]);
})->name("movies");

Route::get('tv', function () {
    return view('guest.home', ["comics" => config("comics")]);
})->name("tv");

Route::get('games', function () {
    return view('guest.home', ["comics" => config("comics")]);
})->name("games");

Route::get('collectables', function () {
    return view('guest.home', ["comics" => config("comics")]);
})->name("collectables");

Route::get('videos', function () {
    return view('guest.home', ["comics" => config("comics")]);
})->name("videos");

Route::get('fans', function () {
    return view('guest.home', ["comics" => config("comics")]);
})->name("fans");

Route::get('news', function () {
    return view('guest.home', ["comics" => config("comics")]);
})->name("news");

Route::get('shop', function () {
    return view('guest.home', ["comics" => config("comics")]);
})->name("shop");


Route::get('comics/{id}', function ($id) {

    $collection = collect(config("comics"));
    
    $comic = $collection->where("id", $id);

    if($comic->count() === 0) {
        abort(404);
    }

    $singleComic = '';
    foreach ($comic as $value) {
        $singleComic = $value;
    }

    return view('guest.comic_base', ["comic" => $singleComic]);
})->name("comic");

