<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'lar_users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	 function __construct()
	 {
		//$this->table = 'lar_users';
	 }
	protected $hidden = array('password', 'remember_token');
	static function try_to_login($userdata)
	{
	
		$results = DB::select('select * from lar_users where username = ? and password = ?', array($userdata['username'],md5($userdata['password'])));
		if(count($results))
		{
			Session::put('username', $userdata['username']);
			return true;
		}
		else
		{
			return false;
		}	
	}
}
