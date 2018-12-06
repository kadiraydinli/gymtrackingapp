<?php
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

Route::post('login', 'Api\Auth\LoginController@login');
Route::post('passwordReset', 'Api\Auth\PasswordController@resetPost');
Route::post('refresh', 'Api\Auth\LoginController@refresh');



Route::group(['middleware' => ['auth:api']], function () {
    Route::post('ekle', 'UserController@ekle');
    Route::get('user', 'UserController@index');
    Route::get('users', 'UserController@users');
    Route::get('dates', 'UserController@dates');
    Route::get('logout', 'Api\Auth\LoginController@logout');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    //Route::post('ekle', 'UserController@ekle');
    Route::post('diyetEkle', 'DietController@ekle');
    Route::post('egzersizEkle', 'ExerciseController@ekle');
});
