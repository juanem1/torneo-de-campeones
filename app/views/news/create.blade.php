@extends('layout')

@section('mainmenu')
	@include('news.partials.mainmenu')
@stop

@section('content')
	<div class="page-title">Nueva Novedad</div>

	<section class="pagecontainer using-grid">
		<div class="grid">
			<div class="unit whole">
				@include('partials.messages')

				{{ Form::open(array('route' => array('news.store'))) }}
					@include('news.partials.form')
				{{ Form::close() }}
			</div>
		</div>
	</section>
	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')

@stop