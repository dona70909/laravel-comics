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

    $nav_links = config("header_nav");
    
    $comics_cards = config("comics");
    
    $main_logos_dc = config("logos_dc");

    $footer_nav_links = config("footer_nav");

    $footer_social = config("social_nav");
    return view('app', ["links" => $nav_links,"comics" => $comics_cards,"logos_dc_main" => $main_logos_dc, "nav_links" => $footer_nav_links,"footer_social_imgs" => $footer_social]);
});


Route::get('/characters', function () {
    return view('characters');
})->name("characters");

