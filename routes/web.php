<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard','DashboardController@index')->name('dashboard');

// Post
    Route::get('post','PostController@index')->name('post.index');
    Route::get('post/create','PostController@create')->name('post.create');
    Route::post('post/store','PostController@store')->name('post.store');
    Route::get('post/show/{id}','PostController@show')->name('post.show');
    Route::get('post/edit/{id}','PostController@edit')->name('post.edit');
    Route::POST('post/update/{id}','PostController@update')->name('post.update');
    Route::POST('post/destroy/{id}','PostController@destroy')->name('post.destroy');

//Frontend
    