<?php

class ProvinciaController extends BaseController {

	protected $layout = 'layout';

	public function callProvincia($provincia)	{
		$method = camel_case($provincia);
		$this->$method();
	}

	public function buenosAires()	{
		$this->layout->content = View::make('provincias.buenos-aires');
	}

	public function tucuman()	{
		$this->layout->content = View::make('provincias.tucuman');
	}

	public function cordoba()	{
		$this->layout->content = View::make('provincias.cordoba');
	}

	public function catamarca()	{
		$this->layout->content = View::make('provincias.catamarca');
	}

	public function santiago()	{
		$this->layout->content = View::make('provincias.santiago');
	}

	public function jujuy() {
		$this->layout->content = View::make('provincias.jujuy');
	}

	public function elNacional() {
		$this->layout->content = View::make('provincias.el-nacional');
	}

}
