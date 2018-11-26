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

Route::group(['prefix' => 'posts', 'middleware' => 'auth'], function() {
    
    Route::get('/', 'PostController@index');
    Route::get('/create', 'PostController@create');
    Route::post('/create', 'PostController@store');
    Route::patch('/edit/{id}', 'PostController@update');
    Route::get('/{id}', 'PostController@show');
    Route::get('/{id}/edit', 'PostController@edit');
    Route::delete('/delete/{id}', 'PostController@destroy');
});