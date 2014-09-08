<?php

class NewsController extends \BaseController {

	protected $layout = 'layout';

	/**
	 * Display a listing of the resource.
	 * GET /news
	 *
	 * @return Response
	 */
	public function index()
	{
		$news = News::with('provincia')->paginate(5);
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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /news
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
	}

}