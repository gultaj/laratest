<?php

Route::group(['prefix' => 'admin'], function() {
	Route::get('login', ['as' => 'admin.login', 'uses' => 'AdminAuthController@getLogin']);
	Route::post('login', ['as' => 'admin.login.post', 'uses' => 'AdminAuthController@postLogin']);
	Route::get('logout', ['as' => 'admin.logout', 'uses' => 'AdminAuthController@getLogout']);
});

Route::group(['prefix' => 'admin', 'before' => 'auth'], function() {
	Route::resource('posts', 'AdminPostsController', ['except' => 'show']);
});

Route::get('/', ['as' => 'home', 'uses' => 'PostsController@getIndex']);
Route::get('post/{id}', ['as' => 'post', 'uses' => 'PostsController@getPost'])->where('id', '[1-9][0-9]*');
