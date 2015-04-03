<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::resource('user', 'UserController');
Route::get('/', ['uses' => 'HomeController@showWelcome']);
//Route::get('user/{id}/edit', ['uses' => 'UserController@edit', 'as' => 'user.update']);
// Route::get('/login', function() {
// 	return View::make('login');
// } );
