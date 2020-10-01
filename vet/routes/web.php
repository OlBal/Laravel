<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Owners;
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

//Owner Routes

Route::group(["prefix" => "owners"], function(){
    Route::group(["middlware" => "auth"], function(){
    Route::get('/', "Owners@index");
    Route::get('create', "Owners@create");
    Route::post('create', "Owners@createOwner");
    Route::get('{owner}', "Owners@show");
    Route::post('{owner}', "Owners@createAnimal");
    Route::group(["prefix" => "edit"], function(){
            Route::get('{owner}', "Owners@edit");   
            Route::post('{owner}', "Owners@editOwner");

            });
    });
});

//Animal Routes

Route::group(["prefix" => "owners"], function(){
    Route::get('/{owner}/animal', 'Animals@show');
  
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes(['register' => false]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
