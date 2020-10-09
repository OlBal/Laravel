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

Route::get('/home', "Home@index"); 

//Owner Routes

Route::group(["prefix" => "owners"], function(){
    Route::group(["middlware" => "auth"], function(){
    Route::get('/', "Owners@index");
    Route::get('create', "Owners@create");
    Route::post('create', "Owners@createOwner");
    Route::get('{owner}', "Owners@show");
    Route::post('{owner}', "Owners@createAnimal");
     Route::get('/{owner}/animal', 'Animals@show');
    // Route::group(["prefix" => "edit"], function(){
            Route::get('edit/{owner}', "Owners@edit");   
            Route::post('edit/{owner}', "Owners@editOwner");

            // });
    });
});


Route::get('/about', function () {
    return view('about');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', function ()
{ auth()->logout();
Session()->flush();

 return Redirect::to('/home');
})->name('logout');

