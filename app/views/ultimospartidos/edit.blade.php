@extends('layout')

@section('mainmenu')
    @include('dashboard.partials.mainmenu')
@stop

@section('content')
	<div class="page-title">Editar Ultimo Partido</div>

	<section class="pagecontainer using-grid">
		<div class="grid">
			<div class="unit whole">
				@include('partials.messages')
				{{ Form::model($partido, array('method' => 'PATCH', 'route' => array('ultimospartidos.update', $partido->id))) }}
					@include('ultimospartidos.partials.form')
				{{ Form::close() }}

				{{ Form::open(array('route' => array('ultimospartidos.destroy', $partido->id ), 'method' => 'DELETE' )) }}
				    {{ Form::submit('Eliminar', array('class' => "button button-delete") ) }}
				{{ Form::close() }}
			</div>
		</div>
	</section>
	<div class="clear"></div>

	<!-- FOOTER -->
	@include('partials.footer')

@stop