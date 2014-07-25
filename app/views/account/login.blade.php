@extends('layout')

@section('content')
	<div class="page-title">Login</div>
	<!-- PAGE CONTAINER -->
	<section class="pagecontainer using-grid">
		<div class="grid">
			<div class="unit whole">
				<div class="red message">
					
					<span class="message-close"></span>
					<h5>Error</h5>
					{{ Session::get('message') }}
					<p>El username o password es incorrecto.</p>
				</div>
				{{ Form::open(array('url' => 'authenticate', 'method' => 'post')) }}
    				{{ Form::label('username', 'Username:') }}
					{{ Form::text('username', Input::old('username')) }}
    				{{ Form::label('password', 'Password:') }}
					{{ Form::password('password') }}
					{{ Form::submit('Enviar', array('class' => 'button')) }}
				{{ Form::close() }}
			</div>
		</div>
	</section>
	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')
@stop