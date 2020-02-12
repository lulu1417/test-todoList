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


Route::post('create', 'TodoController@create')->name('create');

Route::post('complete', 'TodoController@update')->name('complete');

Route::post('edit', 'TodoController@edit')->name('edit');

Route::post('delete', 'TodoController@destroy')->name('delete');
