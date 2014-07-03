<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Torneo de Campeones</title>
		<!-- META TAGS -->
		<meta charset="utf-8">
		<meta name="viewport" content="user-scalable=0,width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
		<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
		<!-- CSS FILES -->
		<link href="/css/libraries.css" rel="stylesheet" type="text/css" />
		<link href="/css/styles.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="/js/modernizr.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- SUB MENU -->
		<section id="submenu-container">
			<a id="mobile-menu" href="#">SubMenu</a>
			<nav id="submenu">
				<ul>
					<li>{{ link_to('buenos-aires', 'Buenos Aires') }}</li>
					<li>{{ link_to('tucuman', 'Tucumán') }}</li>
					<li>{{ link_to('cordoba', 'Córdoba') }}</li>
					<li>{{ link_to('catamarca', 'Catamarca') }}</li>
					<li>{{ link_to('santiago', 'Santiago') }}</li>
					<li>{{ link_to('jujuy', 'Jujuy') }}</li>
					<li>{{ link_to('el-nacional', 'El Nacional') }}</li>
				</ul>
			</nav>
			<!-- LOGIN MENU -->
			<nav id="submenu-login">
				<ul>
					<li><a href="#">Register</a></li>
					<li><a href="#">Login</a></li>
				</ul>
			</nav>
		</section>
		<div class="clear"></div>
		<!-- HEADER -->
		<header id="header">
			<div class="logo">
				<img src="/img/logo.png" alt="Torneo de Campeones logo" />
				<span>Torneo de Campeones</span>
			</div>
		</header>
		<div class="clear"></div>
		
		@section('menu')
		<!-- MAIN MENU -->
        <section id="mainmenu-container">
			<a class="toggleMenu" href="#">Menu</a>
			<nav>
				<ul id="mainmenu">
					<li><a href="{{ url('/') }}"><span>Novedades</span></a></li>
					<li><a href="{{ url('torneo') }}"><span>Torneo</span></a></li>
					<li><a href="{{ url('fixture') }}"><span>Fixtures</span></a></li>
					<li><a href="{{ url('tabla') }}"><span>Tabla</span></a></li>
					<li><a href="{{ url('galeria') }}"><span>Galeria</span></a></li>
					<li><a href="{{ url('contacto') }}"><span>Contacto</span></a></li>
				</ul>
			</nav>
		</section>
		@show
		
		<!-- MAIN CONTAINER -->
		<section class="maincontainer">
			@yield('content')
		</section>
		<!-- JS FILES -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="/js/libraries.js"></script>
		<!-- SPONSORS SLIDER -->
		<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('#logos').bxSlider({
					slideWidth: 235,
					pager: false,
					minSlides: 2,
					maxSlides: 5,
					infiniteLoop: false,
					hideControlOnEnd: true,
					slideMargin: 10
				});
			});
		</script>
		<!-- FIXTURE SLIDER -->
		<script type="text/javascript">
			jQuery(document).ready(function() {
				"use strict";
				jQuery('#fixture').bxSlider({
					pager: false,
					infiniteLoop: false,
					hideControlOnEnd: true
				});
			});
		</script>
		<script src="/js/custom.js" type="text/javascript"></script>
	</body>
</html>