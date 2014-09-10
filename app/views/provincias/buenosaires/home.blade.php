@extends('layout')

@section('mainmenu')
	@include('provincias.buenosaires.partials.mainmenu')
@stop

@section('content')
	<!-- FLEXSLIDER -->
	@include('partials.homeslider')

	<!-- FIXTURE TITLE -->
	<div class="scores-title">Ultimos partidos y resultados</div>
	
	<!-- FIXTURE SLIDER -->
	<section class="transparent-bg">
		<div id="fixture">
			<div class="slide-content">
				<div class="match-results">
					<span>Atlas</span>
					<span class="score">? - ?</span>
					<span>Salamanca</span>
				</div>
				<div class="match-place">
					<span>12 de Julio de 2014 - 10:00 PM - Canchas Cacho</span>
				</div>
			</div>
			<div class="slide-content">
				<div class="match-results">
					<span>Barcelona</span>
					<span class="score">2 - 1</span>
					<span>Borussia</span>
				</div>
				<div class="match-place">
					<span>12 de Julio de 2014 - 10:00 PM - Canchas Cacho</span>
				</div>
			</div>
			<div class="slide-content">
				<div class="match-results">
					<span>La Docta FC</span>
					<span class="score">1 - 3</span>
					<span>Cordoba FC</span>
				</div>
				<div class="match-place">
					<span>12 de Julio de 2014 - 10:00 PM - Canchas Cacho</span>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</section>

	<!-- PAGE CONTAINER -->
	@include('provincias.partials.newscontent')

	<!-- Sponsors -->
	@include('partials.sponsors')

	<!-- FOOTER -->
	@include('partials.footer')
@stop