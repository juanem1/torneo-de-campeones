<section id="mainmenu-container">
	<a class="toggleMenu" href="#">Menu</a>
	<nav>
		<ul id="mainmenu">
			<li><a href="{{ url($provincia) }}"><span>Noticias</span></a></li>
			<li><a href="{{ url($provincia.'/reglamento') }}"><span>Reglamento</span></a></li>
			<li>
				<a href="#"><span>Equipos</span></a>
				<ul class="sub-menu">
					<li><a target="_blank" href="http://www.enjore.com/es/team-list/23281/apertura-2014-grupo-a/"><span>Grupo A</span></a></li>
					<li><a target="_blank" href="http://www.enjore.com/es/team-list/23282/apertura-2014-grupo-b/"><span>Grupo B</span></a></li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Fixture</span></a>
				<ul class="sub-menu">
					<li><a target="_blank" href="http://www.enjore.com/es/calendar/23281/full/apertura-2014-grupo-a/"><span>Grupo A</span></a></li>
					<li><a target="_blank" href="http://www.enjore.com/es/calendar/23282/full/apertura-2014-grupo-b/"><span>Grupo B</span></a></li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Posiciones</span></a>
				<ul class="sub-menu">
					<li><a target="_blank" href="http://www.enjore.com/es/teamtable/23281/apertura-2014-grupo-a/"><span>Grupo A</span></a></li>
					<li><a target="_blank" href="http://www.enjore.com/es/teamtable/23282/apertura-2014-grupo-b/"><span>Grupo B</span></a></li>
				</ul>
			</li>
			<li><a href="http://www.enjore.com/es/score/t-11282/apertura-2014/"><span>Goleadores</span></a></li>
			<li><a href="{{ url($provincia.'/contacto') }}"><span>Contacto</span></a></li>
		</ul>
	</nav>
</section>