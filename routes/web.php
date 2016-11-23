<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Static/general app routes
Route::get('/', 'AppController@index');
Route::get('/post/{code?}', 'AppController@posts');
Auth::routes();

// Renting routes
Route::group(['prefix' => 'user', 'middleware' => ['auth']], function() {
    Route::get('/my-profile', 'UserController@myProfile')->name('user.profile');
    Route::post('/my-profile', 'UserController@updateProfile')->name('user.update-profile');

    Route::get('/my-rentings', 'RentController@userRentings');
});

// Admin routes
Route::group(['prefix' => 'admin', 'middleware' => ['checkAdmin', 'role:admin']], function() {
    Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');

    Route::get('/post', 'PostController@getAll')->name('admin.post.getAll');
    Route::post('/post', 'PostController@create')->name('admin.post.create');
    Route::delete('/post/{id}', 'PostController@delete')->name('admin.post.delete');

    Route::get('/user', 'UserController@getAll')->name('admin.user.getAll');
    Route::post('/user', 'UserController@create')->name('admin.user.create');
});
