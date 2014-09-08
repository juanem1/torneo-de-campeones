@extends('layout')


@section('content')
	<div class="page-title">Nuevo Home Slider</div>

	<section class="pagecontainer using-grid">
		<div class="grid">
			<div class="unit whole">
				
				@include('partials.messages')
				
				{{ Form::open(array('route' => 'homeslider.store', 'method' => 'post', 'role' => 'form', 'files' => true)) }}
					@include('homeslider.partials.form')
				{{ Form::close() }}
			</div>
		</div>
	</section>
	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')

@stop