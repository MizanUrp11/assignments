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

Route::get('/email', function () {
    return new \App\Mail\NewUserWelcomeMail();
});

Route::get('/profiles/suggest','suggestionController@index');
Route::get('/', 'PostController@index');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('/p/create','PostController@create')->name('post.create');
Route::post('/p','PostController@store')->name('post.store');
Route::get('/p/{post}','PostController@show')->name('post.show');


Route::post('follow/{user}', 'FollowsController@store');