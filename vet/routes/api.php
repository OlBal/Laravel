<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Routing for Owners

Route::group(["prefix" => "owners"], function(){

    //Animal Routes
    Route::get('{owner}/animal', 'API\Animals@show');
    Route::delete('{owner}/animal', 'API\Animals@destroy');
    Route::post('{owner}/animal', 'API\Animals@store');
    Route::put('{owner}/animal', 'API\Animals@store');
    Route::get('{owner}/owneranimal', 'API\Owners@animals');
    Route::get('animals', 'API\Animals@index');
    
    //Owner Routes
    Route::get('/', 'API\Owners@index');
    Route::post('/', 'API\Owners@store');
    Route::put('/', 'API\Owners@store');
    Route::get('{owner}', 'API\Owners@show');
    Route::delete('{owner}', 'API\Owners@destroy');
});

