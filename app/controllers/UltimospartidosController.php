<?php

class UltimospartidosController extends \BaseController {

	protected $layout = 'layout';

	/**
	 * Display a listing of the resource.
	 * GET /ultimospartidos
	 *
	 * @return Response
	 */
	public function index()
	{
		$partidos = Ultimospartidos::with('provincia')->paginate(5);
		$this->layout->content = View::make('ultimospartidos.index', compact('partidos'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ultimospartidos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$provincias = Provincia::lists('name', 'id');
		$this->layout->content = View::make('ultimospartidos.create', compact('provincias'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ultimospartidos
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Ultimospartidos::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		Ultimospartidos::create($data);
		return Redirect::to('ultimospartidos');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /ultimospartidos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$partido = Ultimospartidos::find($id);
		$provincias = Provincia::lists('name', 'id');
		$this->layout->content = View::make('ultimospartidos.edit', compact('partido', 'provincias'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /ultimospartidos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make($data = Input::all(), Ultimospartidos::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$news = Ultimospartidos::findOrFail($id);
		$news->update($data);
		return Redirect::to('ultimospartidos');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /ultimospartidos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$partido = Ultimospartidos::findOrFail($id);
		$partido->delete();
		return Redirect::to('ultimospartidos');
	}

}