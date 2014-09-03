<?php

class ProvinciaController extends BaseController {

	protected $layout = 'layout';

	public function callProvincia($provincia)	{
		$method = camel_case($provincia);
		$this->$method();
	}

	public function buenosAires()
	{
		$provincia = 'buenos-aires';
		$this->layout->content = View::make('provincias.buenosaires.home', compact('provincia'));
	}

	public function tucuman()
	{
		$provincia = 'tucuman';
		$this->layout->content = View::make('provincias.tucuman.home', compact('provincia'));
	}

	public function cordoba()
	{
		$provincia = 'cordoba';
		$this->layout->content = View::make('provincias.cordoba.home', compact('provincia'));
	}

	public function catamarca()
	{
		$provincia = 'catamarca';
		$this->layout->content = View::make('provincias.catamarca.home', compact('provincia'));
	}

	public function santiago()
	{
		$provincia = 'santiago';
		$this->layout->content = View::make('provincias.santiago.home', compact('provincia'));
	}

	public function jujuy()
	{
		$provincia = 'jujuy';
		$this->layout->content = View::make('provincias.jujuy.home', compact('provincia'));
	}

	public function elNacional()
	{
		$provincia = 'el-nacional';
		$this->layout->content = View::make('provincias.elnacional.home', compact('provincia'));
	}

	public function santaFe()
	{
		$provincia = 'santa-fe';
		$this->layout->content = View::make('provincias.santafe.home', compact('provincia'));
	}

}
