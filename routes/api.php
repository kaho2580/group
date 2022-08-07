<?php

use Illuminate\Http\Request;
use App\Http\Controllers\MapController;
use App\Http\Controllers\HomeController;

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

Route::get('/map', 'MapController@index');
Route::get('/home', 'HomeController@index');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
