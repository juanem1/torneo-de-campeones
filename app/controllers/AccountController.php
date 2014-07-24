<?php

class AccountController extends BaseController {

	protected $layout = 'layout';

	public function login()	{
		/*$user = new User;
		$user->username = 'admin';
		$user->password = Hash::make('Eq6st258');
		$user->email = 'juanemilioturk@gmail.com';
		$user->save();*/
		$this->layout->content = View::make('account.login');
	}

	public function authenticate() {

		$username = Input::get('username');
		$password = Input::get('password');
		
		if (Auth::attempt(array('username' => $username, 'password' => $password))) {
			return Redirect::intended('login')->with('message', 'Login Failed');
		} else {
			return Redirect::to('dashboard');
		}
	}

}
