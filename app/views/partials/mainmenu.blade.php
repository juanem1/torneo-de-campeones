<section id="mainmenu-container">
	<a class="toggleMenu" href="#">Menu</a>
	<nav>
		<ul id="mainmenu">
			<li><a href="{{ url($provincia) }}"><span>Noticias</span></a></li>
			<li><a href="{{ url($provincia.'/reglamento') }}"><span>Reglamento</span></a></li>
			<li><a href="{{ url($provincia.'/posiciones') }}"><span>Posiciones</span></a></li>
			<li><a href="{{ url($provincia.'/goleadores') }}"><span>Goleadores</span></a></li>
			<li><a href="{{ url($provincia.'/sanciones') }}"><span>Sanciones</span></a></li>
			<li><a href="{{ url('contacto') }}"><span>Contacto</span></a></li>
		</ul>
	</nav>
</section>