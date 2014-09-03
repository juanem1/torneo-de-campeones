<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Torneo de Campeones</title>
		<!-- META TAGS -->
		<meta charset="utf-8">
		<meta name="viewport" content="user-scalable=0,width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
		<link rel="icon" type="image/gif" href="/favicon.gif" />

		<!-- CSS FILES -->
		<link href="/css/libraries.css" rel="stylesheet" type="text/css" />
		<link href="/css/styles.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="/js/modernizr.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- HEADER -->
		<header id="header">
			<div class="logo">
				<a href="/"><img src="/img/logo.png" alt="Torneo de Campeones logo" /></a>
				<span>Torneo de Campeones</span>
			</div>
		</header>
		<div class="clear"></div>
		
		@yield('mainmenu')
		
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