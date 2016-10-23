<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BlogController@index');



Route::group(['middleware' => ['auth']], function(){
	Route::resource('blog', 'BlogController');
});

Route::group(['middleware' => ['auth']], function(){
	Route::resource('admin', 'AdminController');
});


Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/about-us', function () {
    return view('about');
});

 

