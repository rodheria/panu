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

Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/user/{id}', 'UserController@show');

Route::group(['prefix' => 'posts', 'middleware' => 'auth'], function() {
    Route::get('/create', 'PostController@create')->name('createpost');
    Route::post('/create', 'PostController@store');
    Route::patch('/edit/{id}', 'PostController@update');
    Route::get('/{id}/edit', 'PostController@edit');
    Route::delete('/delete/{id}', 'PostController@destroy');
});

Route::post('/comments/store/{id}', 'CommentController@store')->middleware('auth');
Route::get('/posts/{id}', 'PostController@show');
Route::get('/posts', 'PostController@index')->name('posts');