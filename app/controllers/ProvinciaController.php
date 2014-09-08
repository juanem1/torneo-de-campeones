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
		$news = News::whereIn('provincia_id', array(0, 1))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(0, 1))->get();
		$this->layout->content = View::make('provincias.buenosaires.home', compact('provincia', 'sliders', 'news'));
	}

	public function catamarca()
	{
		$provincia = 'catamarca';
		$news = News::whereIn('provincia_id', array(0, 2))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(0, 2))->get();
		$this->layout->content = View::make('provincias.catamarca.home', compact('provincia', 'sliders', 'news'));
	}

	public function cordoba()
	{
		$provincia = 'cordoba';
		$news = News::whereIn('provincia_id', array(0, 3))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(0, 3))->get();
		$this->layout->content = View::make('provincias.cordoba.home', compact('provincia', 'sliders', 'news'));
	}

	public function elNacional()
	{
		$provincia = 'el-nacional';
		$news = News::whereIn('provincia_id', array(0, 4))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(0, 4))->get();
		$this->layout->content = View::make('provincias.elnacional.home', compact('provincia', 'sliders', 'news'));
	}

	public function jujuy()
	{
		$provincia = 'jujuy';
		$news = News::whereIn('provincia_id', array(0, 5))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(0, 5))->get();
		$this->layout->content = View::make('provincias.jujuy.home', compact('provincia', 'sliders', 'news'));
	}

	public function santaFe()
	{
		$provincia = 'santa-fe';
		$news = News::whereIn('provincia_id', array(0, 6))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(0, 6))->get();
		$this->layout->content = View::make('provincias.santafe.home', compact('provincia', 'sliders', 'news'));
	}

	public function santiago()
	{
		$provincia = 'santiago';
		$news = News::whereIn('provincia_id', array(0, 7))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(0, 7))->get();
		$this->layout->content = View::make('provincias.santiago.home', compact('provincia', 'sliders', 'news'));
	}

	public function tucuman()
	{
		$provincia = 'tucuman';
		$news = News::whereIn('provincia_id', array(0, 8))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(0, 8))->get();
		$this->layout->content = View::make('provincias.tucuman.home', compact('provincia', 'sliders', 'news'));
	}

}
