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

Route::get('cars', 'CarController@index');

Route::post('car/add', 'CarController@add');
Route::get('car/edit/{id}', 'CarController@edit');
Route::post('car/update/{id}', 'CarController@update');
Route::delete('car/delete/{id}', 'CarController@delete');