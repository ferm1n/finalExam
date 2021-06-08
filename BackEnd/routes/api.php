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

Route::get('profiles', 'ProfileController@index');
Route::post('profile', 'ProfileController@store');
Route::put('profile/{id}', 'ProfileController@update');
Route::delete('profile/{id}', 'ProfileController@delete');
