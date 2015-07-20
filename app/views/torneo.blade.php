@extends('layout')

@section('content')
	<!-- PAGE TITLE -->
	<div class="page-title">torneo de campeones</div>
	<!-- FEATURED IMAGE -->
	<div class="page-img">
		<img src="/img/photos/torneo1.jpg" alt="" />
	</div>
	<!-- PAGE CONTAINER -->
	<section class="pagecontainer">
		<h2>Bienvenidos al Torneo de Campeones!</h2>
		<p> Este es un Torneo de Fútbol 11 (categoría libre mayores de 17), ubicado desde 2014 en Córdoba Capital - Argentina. Donde la competencia, la disciplina, el respeto y el orden se entrelazan en un entorno agradable. 
		Quienes hacemos Torneo de Campeones buscamos a través de las jornadas el compromiso de los Equipos bajo un marco disciplinario, con el fin de lograr un espacio donde este deporte tan apasionante se pueda competir ordenada y sanamente. </p>
		<hr/>
		<h3>Historia del torneo</h3>
		<ul class="list">
			<li><strong>2014</strong>- Comienza una nueva etapa del torneo de campeones en La ciudad de Cordoba Capital con mas de 40 equipos inscriptos que van a pelear el las ligas de Primera y Ascenso.</li>
			<li><strong>2013</strong>- Nace el torneo en la provincia de Tucuman de la mano de Franco Morales como organizador e impulsor de este torneo...</li>
			<li><strong>2012</strong>- Commodo quorum quamquam officia ad ne ne eram litteris. Ab ex labore culpa elit qui dolore ubi id quem arbitror. Doctrina ut legam nescius..</li>
		</ul>
	</section>
	<div class="clear"></div>
	<!-- SPONSORS -->
	<div class="logos-title">Sponsors</div>
	<section class="transparent-bg">
		<div id="logos">
			<div class="slide">
				<a href="#"><img src="/img/photos/logo.png" alt="" /></a>
			</div>
			<div class="slide">
				<a href="#"><img src="/img/photos/logo.png" alt="" /></a>
			</div>
			<div class="slide">
				<a href="#"><img src="/img/photos/logo.png" alt="" /></a>
			</div>
			<div class="slide">
				<a href="#"><img src="/img/photos/logo.png" alt="" /></a>
			</div>
			<div class="slide">
				<a href="#"><img src="/img/photos/logo.png" alt="" /></a>
			</div>
		</div>
	</section>
	<!-- FOOTER -->
	@include('partials.footer')
@stop