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
    $comics_cards = config("comics");
    $main_logos_dc = config("logos_dc");
    return view('guest.cards',["comics" => $comics_cards,"logos_dc_main" => $main_logos_dc]);
})->name("cards");


Route::get('/home', function () {

    $nav_links = config("header_nav");
    
    $comics_cards = config("comics");
    
    $main_logos_dc = config("logos_dc");


    return view('guest.home', ["links" => $nav_links,"comics" => $comics_cards,"logos_dc_main" => $main_logos_dc]);
});


Route::get('/characters', function () {
    return view('guest.characters');
})->name("characters");



Route::get('/cards/{index}', function ($index) {
    $comics_cards = config("comics");
    if( is_numeric($index) && $index >= 0 && $index < count($comics_cards)){
        return view('guest.card',["comic" => $comics_cards[$index]]);
    } 
})->name("card");



