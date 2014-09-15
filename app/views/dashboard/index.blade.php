@extends('layout')

@section('content')
	<div class="page-title">Dashboard</div>
	<!-- PAGE CONTAINER -->
	<section class="pagecontainer using-grid">
		<div class="grid">
			<div class="unit two-thirds">

				<div>
					<h3>Novedades</h3>
					{{ link_to('news', 'Administrar novedades.') }}
				</div>
				<hr>
				<div>
					<h3>Home Slider</h3>
					{{ link_to('homeslider', 'Administrar home slider.') }}
				</div>
				<hr>
				<div>
					<h3>Ultimos Partidos</h3>
					{{ link_to('ultimospartidos/index', 'Administrar ultimos partidos.') }}
				</div>
				<hr>
				<div>
					<h3>Cuenta</h3>
					{{ link_to('user/edit', 'Cambiar contraseña.') }}
				</div>
			</div>
		</div>
	</section>
	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')
@stop