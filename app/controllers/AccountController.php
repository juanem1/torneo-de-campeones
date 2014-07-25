<?php

class AccountController extends BaseController {

	protected $layout = 'layout';

	public function login()	{
		/*$user = new User;
		$user->username = 'admin';
		$user->password = Hash::make('password');
		$user->email = 'juanemilioturk@gmail.com';
		$user->save();*/
		$this->layout->content = View::make('account.login');
	}

	public function authenticate() {

		$rules = array(
			'username' => 'required',
			'password' => 'required|alphaNum|min:3'
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$username = Input::get('username');
			$password = Input::get('password');
			
			if (Auth::attempt(array('username' => $username, 'password' => $password))) {
				//return Redirect::intended('login')->with('message', 'Login Failed');
				return Redirect::to('login')->withInput(Input::except('password'));
			} else {
				return Redirect::to('dashboard');
			}
		}		
	}

	public function logout() {
		Auth::logout();
		return Redirect::to('login');
	}

}
