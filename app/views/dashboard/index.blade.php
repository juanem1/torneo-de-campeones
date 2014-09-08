@extends('layout')

@section('content')
	<div class="page-title">Dashboard</div>
	<!-- PAGE CONTAINER -->
	<section class="pagecontainer using-grid">
		<div class="grid">
			<div class="unit two-thirds">

				<div>
					<h3>Novedades</h3>
					{{ link_to('novedades/index', 'Administrar novedades.') }}
				</div>
				<hr>
				<div>
					<h3>Home Slider</h3>
					{{ link_to('homeslider', 'Administrar home slider.') }}
				</div>
				<hr>
				<div>
					<h3>Ultimos partidos</h3>
					{{ link_to('ultimospartidos/index', 'Administrar ultimos partidos.') }}
				</div>

			</div>
		</div>
	</section>
	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')
@stop