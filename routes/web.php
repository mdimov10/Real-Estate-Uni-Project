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
    return view('front.homepage');
});

Route::get('/landing', function () {
    return view('front.landing');
});

//Properties
Route::get('properties', 'PropertyController@listAll')->name('properties.index');
Route::get('properties/{slug}', 'PropertyController@show')->name('properties.show');
Route::post('properties', 'PropertyController@store');
Route::get('properties/create', 'PropertyController@create');
Route::get('properties/{slug}/edit', 'PropertyController@edit');
Route::put('properties/{slug}', 'PropertyController@update');
Route::get('properties/del/{slug}', 'PropertyController@delete');

//Cities
Route::get('cities', 'CityController@list');
Route::post('cities', 'CityController@store');
Route::get('cities/create', 'CityController@create');
Route::get('cities/{slug}', 'CityController@update');
Route::get('cities/del/{slug}', 'CityController@delete');

//Categories
Route::get('categories', 'CategoryController@list');
Route::post('categories', 'CategoryController@store');
Route::get('categories/create', 'CategoryController@create');
Route::get('categories/{slug}', 'CategoryController@update');
Route::get('categories/del/{slug}', 'CategoryController@delete');

//Floors
Route::get('floors', 'FloorController@list');
Route::post('floors', 'FloorController@store');
Route::get('floors/create', 'FloorController@create');
Route::get('floors/{slug}', 'FloorController@update');
Route::get('floors/del/{slug}', 'FloorController@delete');
