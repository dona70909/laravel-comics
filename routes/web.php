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
    $header_nav_links = [ "links" => $nav_links];

    $comics_cards = config("comics");
    $cards = ["comics" => $comics_cards];

    $main_logos_dc = config("logos_dc");
    $dc_logos = ["logos" => $main_logos_dc];

    return view('app',$header_nav_links,$cards,$dc_logos);
});
