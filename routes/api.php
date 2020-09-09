<?php

use Illuminate\Http\Request;

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


    Route::get('/products','API\ProductController@index');
    Route::get('/products/{product}','API\ProductController@show');
    Route::post('/products/add','API\ProductController@store');
    Route::put('/products/update/{product}','API\ProductController@update');
