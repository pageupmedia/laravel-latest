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
//Route::controller('index', 'UserLoginController');
//Route::Resource('userlogin','UserLoginController');

Route::get('/', function()
{
 return View::make('login');
}); 
	// show message
	// route to show the login form
	//Route::get('/', array('uses' => 'NewsController@show_message'));
	
	// route to show the login form
	Route::get('login', array('uses' => 'UserLoginController@getIndex'));

	// route to process the form
	Route::post('login', array('uses' => 'UserLoginController@user'));
	
	// route to show index page
	Route::get('feed', array('uses' => 'NewsController@feed'));
	
	// route to show dashboard page
	Route::get('dashboard', array('uses' => 'UserLoginController@dashboard_page'));
	
	// route to load ajax page
	Route::get('ajax', array('uses' => 'NewsController@get_ajax'));
	
	// route to process filter by client
	Route::post('feed', array('uses' => 'NewsController@client'));
	
	// route to logout
	Route::get('logout', array('uses' => 'UserLoginController@logout'));
	
	// route to like
	Route::post('like1', array('uses' => 'NewsController@like1'));
	
	// route to dislike
	Route::post('dislike', array('uses' => 'NewsController@dislike'));
	
	// route to ordr
	Route::post('sort', array('uses' => 'NewsController@ordr'));
	
	// route to bookmark
	Route::post('bookmark', array('uses' => 'NewsController@bookmark'));
	
	// route to show  bookmark
	Route::post('bookmark1', array('uses' => 'NewsController@bookmark1'));
	
	// AUTH FILTER
	Route::filter('auth', function()
	{
		if (Auth::guest()) return Redirect::to('login');
	});