<?php

class AccountController extends BaseController {

	protected $layout = 'layout';

	public function login()
	{
		$this->layout->content = View::make('account.login');
	}

	public function authenticate()
	{

		$rules = array(
			'username' => 'required',
			'password' => 'required|alphaNum|min:3'
		);

		$validator = Validator::make(Input::all(), $rules);
		if ( $validator->fails() ) {
			return Redirect::back()->withInput()->withErrors($validator->messages());
		} else {
			$username = Input::get('username');
			$password = Input::get('password');
			
			if (Auth::attempt(array('username' => $username, 'password' => $password))) {
				return Redirect::back()->withErrors('Login Failed');
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
