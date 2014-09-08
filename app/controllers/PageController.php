<?php

class PageController extends BaseController {

	protected $layout = 'layout';

	public function home()
	{
		return View::make('home');
	}

	public function torneo()
	{
		$this->layout->content = View::make('torneo');
	}

	public function fixture()
	{
		$this->layout->content = View::make('fixture');
	}

	public function tabla()
	{
		$this->layout->content = View::make('tabla');
	}

	public function galeria()
	{
		$this->layout->content = View::make('galeria');
	}

	public function contacto()
	{
		$provincia = Request::segment(1);
		$this->layout->content = View::make('contacto', compact('provincia'));
	}

}
