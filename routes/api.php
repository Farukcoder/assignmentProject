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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', 'Api\LoginController@loginApi');

Route::middleware('auth:api')->group(function () {

    // employee
    Route::prefix('/customer')->group(function () {
        Route::get('/', 'Api\EmployeeController@index');
        Route::post('/store', 'Api\EmployeeController@store');
        Route::get('/list_data', 'Api\EmployeeController@list_data');
        Route::post('/update', 'Api\EmployeeController@update');
        Route::post('/delete', 'Api\EmployeeController@destroy');
    });
});
