@extends('layout')


@section('content')
	<div class="page-title">Editar Novedades</div>

	<section class="pagecontainer">
		<div class="full_width">
			@foreach($news as $new)
				<h3>{{ $new->title }} <small>({{ $new->provincia->name }})</small> </h3>
				<p>{{ $new->body }}</p>
				{{ link_to('news/' . $new->id . '/edit', 'Editar') }}
				<hr>
			@endforeach

			{{ $news->links('partials.pagination') }}
		</div>
	</section>
	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')

@stop