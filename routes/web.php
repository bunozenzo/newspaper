<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'category'], function () {
        Route::get('list',['as'=>'list','uses'=>'admin\CategoryController@getlist']);
        Route::get('add', function () {
            echo "hello1";
        });
        Route::post('add', function () {
            // Uses Auth Middleware
        });
        Route::get('update/{id}', function () {
            // Uses Auth Middleware
        });
        Route::post('update/{id}', function () {
            // Uses Auth Middleware
        });
        Route::get('delete', function () {
            // Uses Auth Middleware
        });
    });
});