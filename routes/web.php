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

Route::get('properties', 'PropertyController@list')->name('properties.index');
Route::post('properties', 'PropertyController@store');
Route::get('properties/create', 'PropertyController@create');
Route::get('properties/{slug}/edit', 'PropertyController@edit');
Route::put('properties/{slug}', 'PropertyController@update');
Route::get('properties/del/{slug}', 'PropertyController@delete');
