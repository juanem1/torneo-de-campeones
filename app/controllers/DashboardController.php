<?php

class DashboardController extends BaseController {

	protected $layout = 'layout';

	public function index()	{
		$this->layout->content = View::make('home');
	}

}
