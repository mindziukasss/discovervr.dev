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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {

    Route::group(['prefix' => 'menu'], function () {

        Route::get('/', ['as' => 'app.menu.index', 'uses' => 'VrMenuController@index']);
        Route::get('/create', ['as' => 'app.menu.create', 'uses' => 'VrMenuController@create']);
        Route::post('/create', ['uses' => 'VrMenuController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', ['as' => 'appmenu.show', 'uses' => 'VrMenuController@show']);
            Route::get('/edit', ['as' => 'app.menu.edit', 'uses' => 'VrMenuController@edit']);
            Route::post('/edit', ['uses' => 'VrMenuController@update']);
            Route::delete('/delete', ['as' => 'app.menu.destroy', 'uses' => 'VrMenuController@destroy']);
        });
    });
});
