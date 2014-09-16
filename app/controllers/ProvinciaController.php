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
		$mainmenu = View::make('partials.mainmenus.buenosaires');
		$news = News::whereIn('provincia_id', array(1, 2))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(1, 2))->get();
		$ultimospartidos = Ultimospartidos::whereIn('provincia_id', array(1, 2))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu', 'ultimospartidos'));
	}

	public function catamarca()
	{
		$provincia = 'catamarca';
		$mainmenu = View::make('partials.mainmenus.catamarca');
		$news = News::whereIn('provincia_id', array(1, 3))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(1, 3))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu'));
	}

	public function cordoba()
	{
		$provincia = 'cordoba';
		$mainmenu = View::make('partials.mainmenus.cordoba');
		$news = News::whereIn('provincia_id', array(1, 4))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(1, 4))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu'));
	}

	public function elNacional()
	{
		$provincia = 'el-nacional';
		$mainmenu = View::make('partials.mainmenus.elnacional');
		$news = News::whereIn('provincia_id', array(1, 5))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(1, 5))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu'));
	}

	public function jujuy()
	{
		$provincia = 'jujuy';
		$mainmenu = View::make('partials.mainmenus.jujuy');
		$news = News::whereIn('provincia_id', array(1, 6))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(1, 6))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu'));
	}

	public function santaFe()
	{
		$provincia = 'santa-fe';
		$mainmenu = View::make('partials.mainmenus.santafe');
		$news = News::whereIn('provincia_id', array(1, 7))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(1, 7))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu'));
	}

	public function santiago()
	{
		$provincia = 'santiago';
		$mainmenu = View::make('partials.mainmenus.santiago');
		$news = News::whereIn('provincia_id', array(1, 8))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(1, 8))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu'));
	}

	public function tucuman()
	{
		$provincia = 'tucuman';
		$mainmenu = View::make('partials.mainmenus.tucuman');
		$news = News::whereIn('provincia_id', array(1, 9))->get();
		$sliders = Homeslider::whereIn('provincia_id', array(1, 9))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu'));
	}

}
