@extends('layout')

@section('content')
<div class="page-title">Editar cuenta</div>
<!-- PAGE CONTAINER -->
<section class="pagecontainer using-grid">
	<div class="grid">
		<div class="unit whole">

			@include('partials.messages')

			{{ Form::open(array('route' => array('user.update'), 'method' => 'PATCH')) }}
				{{ Form::label('password', 'Contraseña:') }}
				{{ Form::password('password') }}
				{{ Form::label('password_confirmation', 'Repita su contraseña:') }}
				{{ Form::password('password_confirmation') }}
				{{ Form::submit('Guardar', array('class' => 'button')) }}
			{{ Form::close() }}
		</div>
	</div>
</section>
<div class="clear"></div>
<!-- FOOTER -->
@include('partials.footer')
@stop