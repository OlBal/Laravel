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

Route::get('/', "Home@index"); 

Route::group(["prefix" => "owners"], function(){
    Route::get('/', "Owners@index");
    Route::get('create', "Owners@create");
    Route::post('create', "Owners@createOwner");
    Route::get("{owner}", "Owners@show");
    Route::get("{owner}/edit", "Owners@edit");
});

Route::get('/about', function () {
    return view('about');
});



