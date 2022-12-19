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

// Protected Routes 
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/data', function () {
        return 'user data';
    });


});

Route::get('/hello', function () {
    return 'user data';
});
