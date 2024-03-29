<?php

class NewsController extends \BaseController {

	protected $layout = 'layout';

	public function __construct()
	{
		$this->beforeFilter('auth', array('only' => array('index', 'show', 'edit', 'update')));
	}

	/**
	 * Display a listing of the resource.
	 * GET /news
	 * @return Response
	 */
	public function index()
	{
		$news = News::with('provincia')->orderBy('updated_at', 'DESC')->paginate(5);
		$this->layout->content = View::make('news.index', compact('news'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /news/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$provincias = Provincia::lists('name', 'id');
		$this->layout->content = View::make('news.create', compact('provincias'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /news
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), News::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$newNew = Input::all();
		$newNew['slug'] = Str::slug(Input::get('title'));
		News::create($newNew);

		return Redirect::to('news');
	}

	/**
	 * Display the specified resource.
	 * GET /news/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$news = News::find($id);
		$this->layout->content = View::make('news.show', compact('news'));
	}


	/**
	 * @param $provincia
	 * @param $slug
	 */
	public function showBySlug($provincia, $slug)
	{
		$news = News::where('slug', $slug)->first();
		View::share('provincia', $provincia);
		$mainmenu = View::make('partials.mainmenus.'.$provincia);
		$this->layout->content = View::make('news.show', compact('news', 'mainmenu'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /news/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$news = News::find($id);
		$provincias = Provincia::lists('name', 'id');
		$this->layout->content = View::make('news.edit', compact('news', 'provincias'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /news/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make($data = Input::all(), News::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$news = News::findOrFail($id);
		$data['slug'] = Str::slug(Input::get('title'));
		$news->update($data);

		return Redirect::to('news');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /news/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$news = News::findOrFail($id);
		$news->delete();
		return Redirect::to('news');
	}

}