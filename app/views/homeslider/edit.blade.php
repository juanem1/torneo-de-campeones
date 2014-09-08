@extends('layout')


@section('content')
	<div class="page-title">Editar Home Slider</div>

	<section class="pagecontainer using-grid">
		<div class="grid">
			<div class="unit whole">
				@include('partials.messages')
				{{ Form::model($slider, array('method' => 'PATCH', 'files' => true, 'route' => array('homeslider.update', $slider->id))) }}
					@include('homeslider.partials.form')
				{{ Form::close() }}
			</div>
		</div>
	</section>
	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')

@stop