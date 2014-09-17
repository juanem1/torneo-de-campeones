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
		$mainmenu = View::make('partials.mainmenus.buenos-aires');
		$news = News::whereIn('provincia_id', array(1, 2))->orderBy('updated_at', 'DESC')->paginate(5);
		$sliders = Homeslider::whereIn('provincia_id', array(1, 2))->get();
		$ultimospartidos = Ultimospartidos::whereIn('provincia_id', array(1, 2))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu', 'ultimospartidos'));
	}

	public function catamarca()
	{
		$provincia = 'catamarca';
		$mainmenu = View::make('partials.mainmenus.catamarca');
		$news = News::whereIn('provincia_id', array(1, 3))->orderBy('updated_at', 'DESC')->paginate(5);
		$sliders = Homeslider::whereIn('provincia_id', array(1, 3))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu'));
	}

	public function cordoba()
	{
		$provincia = 'cordoba';
		$mainmenu = View::make('partials.mainmenus.cordoba');
		$news = News::whereIn('provincia_id', array(1, 4))->orderBy('updated_at', 'DESC')->paginate(5);
		$sliders = Homeslider::whereIn('provincia_id', array(1, 4))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu'));
	}

	public function elNacional()
	{
		$provincia = 'el-nacional';
		$mainmenu = View::make('partials.mainmenus.el-nacional');
		$news = News::whereIn('provincia_id', array(1, 5))->orderBy('updated_at', 'DESC')->paginate(5);
		$sliders = Homeslider::whereIn('provincia_id', array(1, 5))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu'));
	}

	public function jujuy()
	{
		$provincia = 'jujuy';
		$mainmenu = View::make('partials.mainmenus.jujuy');
		$news = News::whereIn('provincia_id', array(1, 6))->orderBy('updated_at', 'DESC')->paginate(5);
		$sliders = Homeslider::whereIn('provincia_id', array(1, 6))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu'));
	}

	public function santaFe()
	{
		$provincia = 'santa-fe';
		$mainmenu = View::make('partials.mainmenus.santa-fe');
		$news = News::whereIn('provincia_id', array(1, 7))->orderBy('updated_at', 'DESC')->paginate(5);
		$sliders = Homeslider::whereIn('provincia_id', array(1, 7))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu'));
	}

	public function santiago()
	{
		$provincia = 'santiago';
		$mainmenu = View::make('partials.mainmenus.santiago');
		$news = News::whereIn('provincia_id', array(1, 8))->orderBy('updated_at', 'DESC')->paginate(5);
		$sliders = Homeslider::whereIn('provincia_id', array(1, 8))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu'));
	}

	public function tucuman()
	{
		$provincia = 'tucuman';
		$mainmenu = View::make('partials.mainmenus.tucuman');
		$news = News::whereIn('provincia_id', array(1, 9))->orderBy('updated_at', 'DESC')->paginate(5);
		$sliders = Homeslider::whereIn('provincia_id', array(1, 9))->get();
		$this->layout->content = View::make('provincias', compact('provincia', 'sliders', 'news', 'mainmenu'));
	}

}
