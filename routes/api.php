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
//localhost:8080/api/admin/login
//localhost:8080/api/admin/logout

Route::prefix('admin/auth')->group(function(){
    Route::post('/login','AuthController@login');
});
