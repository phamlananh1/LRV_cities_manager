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
Route::group(['prefix' => 'cities'], function () {
    Route::get('/','CityController@index')->name('cities.index');
    Route::get('/{id}/edit','CityController@edit')->name('cities.edit');
    Route::post('/{id}/edit','CityController@update')->name('cities.update');
    Route::get('/create','CityController@create')->name('cities.create');
    Route::post('/create','CityController@store')->name('cities.store');
    Route::get('/{id}/destroy','CityController@destroy')->name('cities.destroy');
});