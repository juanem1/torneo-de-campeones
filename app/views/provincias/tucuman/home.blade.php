@extends('layout')

@section('mainmenu')
	@include('provincias.tucuman.partials.mainmenu')
@stop

@section('content')
	<!-- FLEXSLIDER -->
	@include('partials.homeslider')

	<!-- FIXTURE TITLE -->
	<div class="scores-title">Ultimos partidos y resultados</div>

	<!-- FIXTURE SLIDER -->

	<!-- PAGE CONTAINER -->
	@include('provincias.partials.newscontent')

	<!-- Sponsors -->
	@include('partials.sponsors')
	
	<!-- FOOTER -->
	@include('partials.footer')
@stop