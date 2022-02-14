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

Route::get('comics/{id}', function ($id) {

    $collection = collect(config("comics"));
    
    $comic = $collection->where("id", $id);
    // dd($comic);

    $singleComic = '';
    foreach ($comic as $value) {
        $singleComic = $value;
    }

    return view('guest.comic_base', ["comic" => $singleComic]);
})->name("comic");

