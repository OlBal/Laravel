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

//Owner Routes

Route::group(["prefix" => "owners"], function(){
    
    Route::get('/', "Owners@index");
    Route::group(["middlware" => "auth"], function(){
    Route::get('create', "Owners@create");
    Route::post('create', "Owners@createOwner");
    Route::get('{owner}', "Owners@show");
    Route::post('{owner}', "Owners@createAnimal");
    Route::get('/{owner}/animal', 'Animals@show');
    Route::post('delete/{owner}',"Owners@destroy");

            Route::get('edit/{owner}', "Owners@edit");   
            Route::post('edit/{owner}', "Owners@editOwner");

    });
});

Route::group(["prefix" => "animals"], function () {
    Route::get('/', "Animals@index");
    Route::get('/{animal}', "Animals@show");
    Route::get('edit/{animal}', "Animals@edit");   
     Route::post('edit/{animal}', "Animals@editAnimal");
     Route::post('delete/{animal}', "Animals@destroy");
});


Auth::routes(['register' => true]);
Route::get('/home', "Home@index"); 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', function ()
{ auth()->logout();
Session()->flush();
 return Redirect::to('/home');
})->name('logout');

