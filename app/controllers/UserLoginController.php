<?php

class UserLoginController extends BaseController {

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
	public function __construct()
    {	
		//$this->beforeFilter('auth', array('only' => array('user')));
        //$this->beforeFilter('csrf', array('on' => 'post'));
        
    }
	public function getIndex()
	{

		return View::make('login');

	}

	 public function user()
    {
        // get POST data
        $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
		//print_r($userdata); exit();
        /*if(Auth::attempt($userdata)) */
		if(User::try_to_login($userdata))
        {
            // we are now logged in, go to admin
            return Redirect::to('feed');
        }
        else
        {
           return Redirect::to('login/?errors=1');
			//return Redirect::to('feed');
        }
    }
	
	public function dashboard_page()
	{
		return View::make('dashboard');
	}
	public function logout()
	{
		Session::put('username', '');
		return Redirect::to('login');
	}
}
