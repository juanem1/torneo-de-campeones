<?php

class DashboardController extends BaseController {

	protected $layout = 'layout';

	public function index()	{
		$provincia = 'tucuman';
		$this->layout->content = View::make('dashboard.index', compact('provincia'));
	}

}
