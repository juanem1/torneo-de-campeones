@extends('layout')


@section('content')
	<div class="page-title">Editar Novedad</div>

	<section class="pagecontainer">
		<div class="full_width">
			@foreach($news as $new) 
				<h3>{{ $new->title }}</h3>
				<p>{{ $new->body }}</p>
				<hr>
			@endforeach


			{{ $news->links('partials.pagination') }}
		</div>
	</section>
	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')

@stop