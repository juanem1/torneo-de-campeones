@extends('layout')


@section('content')
	<div class="page-title">Editar Novedad</div>

	<section class="pagecontainer using-grid">
		<div class="grid">
			<div class="unit whole">
				@include('partials.messages')
				{{ Form::model($news, array('method' => 'PATCH', 'files' => true, 'route' => array('news.update', $news->id))) }}
					@include('news.partials.form')
				{{ Form::close() }}
			</div>
		</div>
	</section>
	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')

@stop