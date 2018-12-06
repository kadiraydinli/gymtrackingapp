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
Route::get('logout', 'Api\Auth\LoginController@logout');

Route::group(['namespace' => 'Api\Mobile', 'prefix' => 'mobile', 'middleware' => ['auth']], function () {
    Route::get('user', 'UserController@index');
    Route::get('dates', 'UserController@dates');
});//attım linki tmm indiriyom bunu bi herokuya yükle yada sunucudan link al da at onu bana
//link alma alıyom da çalışmamıştı tekrar deneyeyim tmm attım
//bende bi deneyeyim mobilden

Route::group(['namespace' => 'Api\Desktop', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::prefix('users')->group(function () {
        Route::get('/', 'UserController@users');
        Route::post('ekle', 'UserController@ekle');
        Route::post('guncelle/{id}', 'UserController@guncelle');
        Route::get('sil/{id}', 'UserController@sil');
    });

    Route::prefix('diet')->group(function () {
        Route::get('', 'DietController@index');
        Route::post('ekle', 'DietController@ekle');
        Route::post('guncelle/{id}', 'DietController@guncelle');
        Route::get('sil/{id}', 'DietController@sil');
    });

    Route::prefix('egzersiz')->group(function () {
        Route::get('', 'ExerciseController@index');
        Route::post('ekle', 'ExerciseController@ekle');
        Route::post('guncelle/{id}', 'ExerciseController@guncelle');
        Route::get('sil/{id}', 'ExerciseController@sil');
    });
});
