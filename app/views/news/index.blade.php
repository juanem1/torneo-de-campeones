@extends('layout')

@section('mainmenu')
	@include('dashboard.partials.mainmenu')
@stop

@section('content')
	<div class="page-title">Novedades</div>

	<section class="pagecontainer">
		<div class="full_width">
			@foreach($news as $new)
				<h3>{{ $new->title }} <small>({{ $new->provincia->name }})</small> </h3>
				<p>{{ Str::words($new->body, 100) }}</p>
				{{ link_to('news/' . $new->id . '/edit', 'Editar', array('class' => "button")) }}
				<hr>
			@endforeach

			{{ $news->links('partials.pagination') }}
		</div>
	</section>
	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')

@stop