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
			'password' => 'required|min:3'
		);

		$validator = Validator::make(Input::all(), $rules);
		if ( $validator->fails() ) {
			return Redirect::back()->withInput()->withErrors($validator->messages());
		} else {
			$username = Input::get('username');
			$password = Input::get('password');

			if (Auth::attempt(array('username' => $username, 'password' => $password))) {
				return Redirect::intended('dashboard');
			} else {
				return Redirect::back()->withInput()->withErrors('Login Failed');
			}
		}
	}

	public function logout() {
		Auth::logout();
		return Redirect::to('login');
	}

	public function edit()
	{
		$this->layout->content = View::make('account.edit');
	}

	public function update()
	{
		$rules = array('password' => 'required|confirmed');
		$validator = Validator::make(Input::all(), $rules);
		if ( $validator->fails() )
		{
			return Redirect::back()->withInput()->withErrors($validator->messages());
		}

		$user = User::find(Auth::id());
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		return Redirect::to('dashboard')->withMessage('Su contraseña se actualizo con éxito.');
	}


}
