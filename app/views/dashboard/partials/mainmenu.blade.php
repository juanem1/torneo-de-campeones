<section id="mainmenu-container">
	<a class="toggleMenu" href="#">Menu</a>
	<nav>
		<ul id="mainmenu">
			<li><a href="{{ url('dashboard') }}"><span>Dashboard</span></a></li>
			<li>
                <a href="#"><span>Novedades</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ url('news') }}"><span>Todas</span></a></li>
                    <li><a href="{{ url('news/create') }}"><span>Nueva</span></a></li>
                </ul>
            </li>
			<li>
                <a href="#"><span>Home Slider</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ url('homeslider') }}"><span>Listado</span></a></li>
                    <li><a href="{{ url('homeslider/create') }}"><span>Nuevo</span></a></li>
                </ul>
            </li>
			<li>
                <a href="#"><span>Ultimos partidos</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ url('ultimospartidos') }}"><span>Listado</span></a></li>
                    <li><a href="{{ url('ultimospartidos/create') }}"><span>Nuevo</span></a></li>
                </ul>
            </li>
			<li><a href="{{ url('logout') }}"><span>Logout</span></a></li>
		</ul>
	</nav>
</section>