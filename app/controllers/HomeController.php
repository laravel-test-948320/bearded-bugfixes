<?php

class HomeController extends BaseController {

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

	public function showWelcome()
	{
		return View::make('hello');
	}

    public function showUser($id)
    {
        $user = User::find($id);
        return View::make('home.user', get_defined_vars());
    }

    public function createUser()
    {
        $user = new User;
        $user->name = "Creator";
        Event::fire('user.created', array($user));
        $user->save();

        return Redirect::route('user_home', array($user->id));
    }

}