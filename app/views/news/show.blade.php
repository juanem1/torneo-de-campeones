@extends('layout')


@section('content')

<div class="page-title">Novedad</div>

<section class="pagecontainer using-grid">
	<div class="grid">
		<div class="unit whole">
			<div class="full_width">
				<p><strong>Titulo:</strong> {{ $news->title }}</p>
				<p><strong>Cuerpo:</strong>{{ $news->body }}</p>
			</div>
			<div class="full_width">
				<p>{{ link_to('news/'.$news->id.'/edit', 'Editar Novedad') }}</p>
			</div>
		</div>
	</div>

</section>

	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')

@stop