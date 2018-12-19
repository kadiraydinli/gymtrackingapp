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
Route::post('passwordReset', 'Api\Auth\PasswordController@reset');
Route::post('refresh', 'Api\Auth\LoginController@refresh');


Route::group(['namespace' => 'Api\Auth', 'middleware' => ['auth:api']], function () {
    Route::post('passwordChange', 'PasswordController@change');
    Route::get('logout', 'LoginController@logout');
});

Route::group(['namespace' => 'Api\Mobile', 'prefix' => 'mobile', 'middleware' => ['auth:api']], function () {
    Route::get('user', 'UserController@index');
    Route::get('diets', 'DietController@index');
    Route::get('diets/{id}', 'DietController@control');
    Route::get('info', 'UserController@kalan');
    Route::get('exercises', 'ExerciseController@cek');
    Route::get('exercise/{id}/{day}', 'ExerciseController@control');
});

Route::group(['namespace' => 'Api\Desktop', 'prefix' => 'admin', 'middleware' => ['auth:api', 'admin']], function () {
    Route::prefix('users')->group(function () {
        Route::get('bilgilerim', 'UserController@index');
        Route::get('/', 'UserController@users');
        Route::post('ekle', 'UserController@ekle');
        Route::post('guncelle/{id}', 'UserController@guncelle');
        Route::get('sil/{id}', 'UserController@sil');
        Route::get('cek/{id}', 'UserController@cek');
    });

    Route::prefix('diet')->group(function () {
        Route::get('/{id}', 'DietController@index');
        Route::post('ekle', 'DietController@ekle');
        Route::post('guncelle/{id}', 'DietController@guncelle');
        Route::get('getType/{name}', 'DietController@getType');
        Route::get('sil/{id}', 'DietController@sil');
    });

    Route::prefix('exercise')->group(function () {
        Route::get('/{id}', 'ExerciseController@index');
        Route::get('bolgeCek/{id}', 'ExerciseController@bolgeCek');
        Route::get('hareketCek/{id}', 'ExerciseController@hareketCek');
        Route::post('ekle', 'ExerciseController@ekle');
        Route::post('guncelle/{id}', 'ExerciseController@guncelle');
        Route::get('sil/{id}', 'ExerciseController@sil');
    });
});
