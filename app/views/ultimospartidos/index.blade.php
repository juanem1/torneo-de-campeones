@extends('layout')

@section('mainmenu')
	@include('dashboard.partials.mainmenu')
@stop

@section('content')
	<div class="page-title">Ultimos partidos</div>

	<section class="pagecontainer">
		<div class="full_width">
		    @foreach($partidos as $partido)
		        <div class="ultimospartidosWrapper">
                    <p>{{ $partido->team_a }} <span>{{ $partido->results }}</span> {{ $partido->team_b }}</p>
                    <p>{{ $partido->description }}</p>
                    {{ link_to('ultimospartidos/' . $partido->id . '/edit', 'Editar', array('class' => "button")) }}
                    <hr>
                </div>
            @endforeach
		</div>
	</section>

	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')

@stop