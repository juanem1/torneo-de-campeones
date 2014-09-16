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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script type="text/javascript" src="/js/modernizr.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- HEADER -->
		<header class="headerBlack container">
			<div class="logo">
				<div class="logoWrapper">
					<div class="bienvenidos">
						<img class="img-responsive" src="/img/home/bienvenidos.png" width="300" height="180" >
					</div>

					<div class="row">
						<div class="col-md-3 col-sm-6">
							<a class="homeLogo cordoba" href="{{ url('cordoba') }}" title="Córdoba"></a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a class="homeLogo tucuman" href="{{ url('tucuman') }}" title="Tucumán"></a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a class="homeLogo catamarca" href="{{ url('catamarca') }}" title="Catamarca"></a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a class="homeLogo jujuy" href="{{ url('jujuy') }}" title="Jujuy"></a>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3 col-sm-6">
							<a class="homeLogo santiago" href="{{ url('santiago') }}" title="Santiago del Estero"></a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a class="homeLogo santafe" href="{{ url('santa-fe') }}" title="Santa Fe"></a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a class="homeLogo buenosAires" href="{{ url('buenos-aires') }}" title="Buenos Aires"></a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a class="homeLogo elnacional" href="{{ url('el-nacional') }}" title="El Nacional"></a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="/js/libraries.js"></script>
		<script src="/js/custom.js" type="text/javascript"></script>
		<script type="text/javascript">
		//var wHeight = $(window).height() / 2;
		//$('.headerBlack').css('margin-top', wHeight - 175);
		</script>
	</body>
</html>