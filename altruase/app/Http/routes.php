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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('inspirations', 'InspirationController');
	Route::delete('inspirations/{inspiration}', 'InspirationController@destroy');
	Route::get('inspirations/{inspiration}/edit', 'InspirationController@edit');
	Route::put('inspirations/{inspiration}', 'InspirationController@update');
	Route::post('inspirations/store', 'InspirationController@store');
	Route::get('inspirations/create', 'InspirationController@create');
	Route::get('inspirations/{inspiration}', 'InspirationController@show');
	Route::get('inspirations', 'InspirationController@index');
