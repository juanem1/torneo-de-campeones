@extends('layout')

@section('menu')
<!-- MAIN MENU -->
<section id="mainmenu-container">
	<a class="toggleMenu" href="#">Menu</a>
	<nav>
		<ul id="mainmenu">
			<li><a href="{{ url('/') }}"><span>Home</span></a></li>
			<li>
				<a href="#"><span>Premier league</span></a>
				<ul>
					<li><a href="{{ url('cordoba/premier-league/equipos') }}"><span>Equipos</span></a></li>
					<li><a href="{{ url('cordoba/premier-league/fixture') }}"><span>Fixture</span></a></li>
					<li><a href="{{ url('cordoba/premier-league/posiciones') }}"><span>Posiciones</span></a></li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Serie B</span></a>
				<ul>
					<li><a href="{{ url('cordoba/serie-b/equipos') }}"><span>Equipos</span></a></li>
					<li><a href="{{ url('cordoba/serie-b/fixture') }}"><span>Fixture</span></a></li>
					<li><a href="{{ url('cordoba/serie-b/posiciones') }}"><span>Posiciones</span></a></li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Serie C</span></a>
				<ul>
					<li><a href="{{ url('cordoba/serie-c/equipos') }}"><span>Equipos</span></a></li>
					<li><a href="{{ url('cordoba/serie-c/fixture') }}"><span>Fixture</span></a></li>
					<li><a href="{{ url('cordoba/serie-c/posiciones') }}"><span>Posiciones</span></a></li>
				</ul>
			</li>
		</ul>
	</nav>
</section>
@stop;

@section('content')
	<!-- PAGE TITLE -->
	<div class="page-title">Cordoba</div>
	<section class="pagecontainer using-grid">
        <!-- GRID -->
        <div class="grid">
            <div class="unit whole">
                <h1>Full Width</h1>
                <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem si ita labore dolor si appellat, aut dolore doctrina. Commodo dolor esse in magna, a a multos senserit nam si aliqua iis multos, appellat elit senserit litteris ubi ne eram voluptate commodo si aliqua occaecat ad quem enim, eram domesticarum fabulas quorum doctrina ut commodo efflorescere aut possumus. Cillum praetermissum mentitum quem cupidatat. Veniam a arbitror iis malis ab quo duis cupidatat. Tempor quem occaecat. Nescius si malis, non occaecat ne mentitum.</p>
            </div>
        </div>
	</section>
	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')
@stop;