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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/contact', 'HomeController@contact')->name('contact');



Route::group(['prefix' => 'posts', 'middleware' => 'auth'], function() {
    
    Route::get('/', 'PostController@index');
    Route::get('/create', 'PostController@create');
    Route::post('/create', 'PostController@store');
    Route::patch('/edit/{id}', 'PostController@update');
    Route::get('/{id}', 'PostController@show');
    Route::get('/{id}/edit', 'PostController@edit');
    Route::delete('/delete/{id}', 'PostController@destroy');
});