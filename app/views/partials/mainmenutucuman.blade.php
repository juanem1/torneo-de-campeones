<section id="mainmenu-container">
	<a class="toggleMenu" href="#">Menu</a>
	<nav>
		<ul id="mainmenu">
			<li><a href="{{ url($provincia) }}"><span>Noticias</span></a></li>
			<li><a href="{{ url($provincia.'/reglamento') }}"><span>Reglamento</span></a></li>
			<li>
				<a href="#"><span>Primera A</span></a>
				<ul class="sub-menu">
					<li><a href="{{ url($provincia.'/primera-a/posiciones') }}"><span>Posiciones</span></a></li>
					<li><a href="{{ url($provincia.'/primera-a/goleadores') }}"><span>Goleadores</span></a></li>
					<li><a href="{{ url($provincia.'/primera-a/sanciones') }}"><span>Sanciones</span></a></li>
					<li><a href="{{ url($provincia.'/primera-a/fixture') }}"><span>Fixture</span></a></li>
					<li><a href="{{ url($provincia.'/primera-a/equipos') }}"><span>Equipos</span></a></li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Primera b</span></a>
				<ul class="sub-menu">
					<li><a href="{{ url($provincia.'/primera-b/posiciones') }}"><span>Posiciones</span></a></li>
					<li><a href="{{ url($provincia.'/primera-b/goleadores') }}"><span>Goleadores</span></a></li>
					<li><a href="{{ url($provincia.'/primera-b/sanciones') }}"><span>Sanciones</span></a></li>
					<li><a href="{{ url($provincia.'/primera-b/fixture') }}"><span>Fixture</span></a></li>
					<li><a href="{{ url($provincia.'/primera-b/equipos') }}"><span>Equipos</span></a></li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Primera c</span></a>
				<ul class="sub-menu">
					<li><a href="{{ url($provincia.'/primera-c/posiciones') }}"><span>Posiciones</span></a></li>
					<li><a href="{{ url($provincia.'/primera-c/goleadores') }}"><span>Goleadores</span></a></li>
					<li><a href="{{ url($provincia.'/primera-c/sanciones') }}"><span>Sanciones</span></a></li>
					<li><a href="{{ url($provincia.'/primera-c/fixture') }}"><span>Fixture</span></a></li>
					<li><a href="{{ url($provincia.'/primera-c/equipos') }}"><span>Equipos</span></a></li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Mayores de 30</span></a>
				<ul class="sub-menu">
					<li><a href="{{ url($provincia.'/mayores-de-30/posiciones') }}"><span>Posiciones</span></a></li>
					<li><a href="{{ url($provincia.'/mayores-de-30/goleadores') }}"><span>Goleadores</span></a></li>
					<li><a href="{{ url($provincia.'/mayores-de-30/sanciones') }}"><span>Sanciones</span></a></li>
					<li><a href="{{ url($provincia.'/mayores-de-30/fixture') }}"><span>Fixture</span></a></li>
					<li><a href="{{ url($provincia.'/mayores-de-30/equipos') }}"><span>Equipos</span></a></li>
				</ul>
			</li>			
			<li><a href="{{ url($provincia.'/contacto') }}"><span>Contacto</span></a></li>
		</ul>
	</nav>
</section>