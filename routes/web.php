<?php


Route::get('login', function () {
    return view('login');
});

Auth::routes();


    Route::middleware('auth')->group(function (){

        Route::get('dashboard','DashboardController@index')->name('dashboard');
        // Post
        Route::get('job_post','PostController@index')->name('job_post.index');
        Route::get('job_post/create','PostController@create')->name('job_post.create');
        Route::post('job_post/store','PostController@store')->name('job_post.store');
        Route::get('job_post/show/{id}','PostController@show')->name('job_post.show');
        Route::get('job_post/edit/{id}','PostController@edit')->name('job_post.edit');
        Route::POST('job_post/update/{id}','PostController@update')->name('job_post.update');
        Route::POST('job_post/destroy/{id}','PostController@destroy')->name('job_post.destroy');
        // Applicant
      Route::get('applicant','ApplicantController@index')->name('applicant.index');
    
    });
//  Frontend
    Route::get('/','FrontController@index')->name('home');
//user registration
    Route::get('registration','FrontController@registration')->name('registration');
    Route::post('register','FrontController@register')->name('register.store');
//User Login
    Route::get('login/user','FrontController@log')->name('login.store');
    Route::post('log/user','FrontController@userlog')->name('login.post');
Auth::routes();

Route::get('/home', 'FrontController@index')->name('home');
Route::get('applicant/profile/{id}', 'FrontController@show')->name('appplicant.show');


//Job details
Route::get('job_details/{id}','FrontController@details')->name('job_details');


// Route::middleware('auth')->group(function (){
        //Job details
        Route::get('application','FrontController@application')->name('application');
        Route::post('apply_form','FrontController@apply_form')->name('apply_form');
        
        // Route::get('applicant/profile/{id}', 'FrontController@show')->name('appplicant.show');

        // Route::post('logout',function (){
        //     auth()->logout();
        //  redirect('/');
        // })->name('logout');
// });