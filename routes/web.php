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
    return view('auth.login');
});

Auth::routes();
Route::resource('posts', 'PostsController');

Route::get('/profile', 'ProfileController@home')->name('profile.home');
Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/user/{id}', 'UsersController@show')->name('user.show');
Route::get('/user/{id}/{postId}', [
    'as' => 'userPost.show', 
    'uses' => 'UsersController@showPost'
]);

