@extends('layout')

@section('mainmenu')
    @include('dashboard.partials.mainmenu')
@stop

@section('content')
	<div class="page-title">Editar Novedad</div>

	<section class="pagecontainer using-grid">
		<div class="grid">
			<div class="unit whole">
				@include('partials.messages')
				{{ Form::model($news, array('method' => 'PATCH', 'files' => true, 'route' => array('news.update', $news->id))) }}
					@include('news.partials.form')
				{{ Form::close() }}

				{{ Form::open(array('route' => array('news.destroy', $news->id ), 'method' => 'DELETE' )) }}
				{{ Form::submit('Eliminar', array('class' => "button button-delete") ) }}
				{{ Form::close() }}
			</div>
		</div>
	</section>
	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')

@stop