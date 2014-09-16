@extends('layout')

@section('mainmenu')
	{{ $mainmenu }}
@stop

@section('content')
	<!-- FLEXSLIDER -->
	@include('partials.homeslider')

	<!-- FIXTURE TITLE -->
	<div class="scores-title">Ultimos partidos y resultados</div>

	<!-- FIXTURE SLIDER -->
    @include('partials.ultimospartidos')

	<!-- PAGE CONTAINER -->
	@include('partials.newscontent')

	<!-- Sponsors -->
	@include('partials.sponsors')

	<!-- FOOTER -->
	@include('partials.footer')
@stop