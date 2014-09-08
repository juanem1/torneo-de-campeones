<?php

class HomesliderController extends BaseController {

	protected $layout = 'layout';

	/**
	 * Display a listing of the resource.
	 * GET /news
	 *
	 * @return Response
	 */
	public function index()
	{
		$sliders = Homeslider::with('provincia')->get();
		$this->layout->content = View::make('homeslider.index', compact('sliders'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /homesliders/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$provincias = Provincia::lists('name', 'id');
		$this->layout->content = View::make('homeslider.create', compact('provincias'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /homesliders
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Homeslider::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$file = Input::file('image');

		$newFileName = str_replace(' ', '', $file->getClientOriginalName());
		$newFileName = time() . $newFileName;

		$file->move(public_path() . '/img/slider/' , $newFileName);
		$data['image'] = $newFileName;
		
		Homeslider::create($data);

		return Redirect::to('homeslider');
	}

	/**
	 * Display the specified resource.
	 * GET /homesliders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$slider = Homeslider::find($id);
		$this->layout->content = View::make('homeslider.show', compact('slider'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /homesliders/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$slider = Homeslider::find($id);
		$provincias = Provincia::lists('name', 'id');
		$this->layout->content = View::make('homeslider.edit', compact('slider', 'provincias'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /homesliders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		$validator = Validator::make($data = Input::all(), Homeslider::$rulesUpdate);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$slider = Homeslider::findOrFail($id);

		if ( Input::hasFile('image') ) {
			$file = Input::file('image');

			$newFileName = str_replace(' ', '', $file->getClientOriginalName());
			$newFileName = time() . $newFileName;

			$file->move(public_path() . '/img/slider/' , $newFileName);
			$data['image'] = $newFileName;

			// Borramos el archivo viejo
			File::delete(public_path() . '/img/slider/' . $slider->image);

		} else {

			$data['image'] = $slider->image;

		}
		
		$slider->update($data);

		return Redirect::to('homeslider');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /homesliders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}