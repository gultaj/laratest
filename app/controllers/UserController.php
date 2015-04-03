<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$users = User::all();
		return View::make('user.index', compact('users'));
	}

	public function show($id)
	{
		$user = User::with('categories')->find($id);
		return View::make('user.show', compact('user'));
	}

	public function edit($id) {
		$user = User::find($id);
		return View::make('user.edit', compact('user'));
	}

}
