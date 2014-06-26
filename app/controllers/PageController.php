<?php

class PageController extends BaseController {

	protected $layout = 'layout';

	public function home()	{
		$this->layout->content = View::make('home');
	}

	public function torneo()	{
		$this->layout->content = View::make('torneo');
	}

	public function contacto() {
		$this->layout->content = View::make('contacto');
	}

}
