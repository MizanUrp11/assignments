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

Route::get('/login', 'userLoginController@index')->name('user.login.show');
Route::post('/login', 'userLoginController@login')->name('user.login');


Route::group(['middleware' => 'chkUser'], function () {
    Route::get('/', 'userRegisterController@index')->name('user.register');
    Route::post('/', 'userRegisterController@register')->name('user.register');
    Route::get('/all', 'showAllUser@index')->name('user.all');
    Route::get('/user/{id}/edit', 'manageUser@edit')->name('user.edit');
    Route::post('/user/{id}/update', 'editUserController@update')->name('user.update');
    Route::get('/user/{id}/delete', 'manageUser@delete')->name('user.delete');
    Route::get('users/logout', 'UserLogoutController@logyout')->name('user.logout');
});
