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


//Routing for API

 Route::group(["prefix" => "API"], function()
 {
    Route::get('/', 'API\Owners@index');
    Route::get('{owner}', 'API\Owners@show');
    Route::delete('{owner}', 'API\Owners@destroy');

    Route::post('owner', 'API\Owners@store');
 });