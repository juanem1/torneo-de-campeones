@extends('layout')

@section('content')
	<!-- FLEXSLIDER -->
	<section class="flex-wrapper">
		<div id="slider" class="flexslider">
			<ul class="slides">
				<li>
					<div class="flex-title">
						<h3>Brazil 2014</h3>
						<p>Vivi el mundial con nosotros en el TORNEO DE CAMPEONES.</p>
					</div>
					<img src="/img/photos/slider1.jpg" alt="" />
				</li>
				<li>
					<div class="flex-title">
						<h3>Equipos a la cancha</h3>
						<p>Ya son 40 los equipos que van a salir a la cancha a competir. Es este caso en la Docta Cordobesa compitiedo por la copa de Oro y Plata.</p>
					</div>
					<img src="/img/photos/slider2.jpg" alt="" />
				</li>
				<li>
					<div class="flex-title">
						<h3>Los Capitanes</h3>
						<p>Presentamos a los capitanes de los diferentes equipos que seran representantes a lo largo de esta gran carrera.</p>
					</div>
					<img src="/img/photos/slider3.jpg" alt="" />
				</li>
			</ul>
		</div>
	</section>
	<div class="clear"></div>
	<!-- FIXTURE TITLE -->
	<div class="scores-title">Ultimos partidos y resultados</div>
	<!-- FIXTURE SLIDER -->
	<section class="transparent-bg">
		<div id="fixture">
			<div class="slide-content">
				<div class="match-results">
					<span>Atlas</span>
					<span class="score">? - ?</span>
					<span>Salamanca</span>
				</div>
				<div class="match-place">
					<span>12 de Julio de 2014 - 10:00 PM - Canchas Cacho</span>
				</div>
			</div>
			<div class="slide-content">
				<div class="match-results">
					<span>Barcelona</span>
					<span class="score">2 - 1</span>
					<span>Borussia</span>
				</div>
				<div class="match-place">
					<span>12 de Julio de 2014 - 10:00 PM - Canchas Cacho</span>
				</div>
			</div>
			<div class="slide-content">
				<div class="match-results">
					<span>La Docta FC</span>
					<span class="score">1 - 3</span>
					<span>Cordoba FC</span>
				</div>
				<div class="match-place">
					<span>12 de Julio de 2014 - 10:00 PM - Canchas Cacho</span>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</section>
	<!-- PAGE CONTAINER -->
	<section class="pagecontainer">
		<!-- LEFT CONTAINER -->
		<section class="leftcontainer">
			<h1>Ultimas Novedades</h1>
			<hr/>
			<!-- POST -->
			<article class="post">
				<figure>
					<a href="single-post.html">
						<img src="/img/photos/blog1.jpg" alt="" />
					</a>
					<figcaption>
						<h2>Post Title</h2>
						<div class="post-date">June,12 2014</div>
					</figcaption>
				</figure>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia ipsum quis diam aliquam vel mollis nisi tempus. Nam et ante urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam luctus, mi vel tincidunt pulvinar, lectus urna vestibulum velit, et pharetra enim sapien eget orci. Mauris in porta neque. In hac habitasse platea dictumst.
					{{ link_to('torneo', 'Read more...') }}
				</p>
			</article>
			<hr/>
			<!-- POST -->
			<article class="post">
				<figure>
					<a href="single-post.html">
						<img src="/img/photos/blog1.jpg" alt="" />
					</a>
					<figcaption>
						<h2>Post Title</h2>
						<div class="post-date">June,09 2014</div>
					</figcaption>
				</figure>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia ipsum quis diam aliquam vel mollis nisi tempus. Nam et ante urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam luctus, mi vel tincidunt pulvinar, lectus urna vestibulum velit, et pharetra enim sapien eget orci. Mauris in porta neque. In hac habitasse platea dictumst.
					{{ link_to('torneo', 'Read more...') }}
				</p>
			</article>
			<hr/>
			<!-- POST -->
			<article class="post">
				<figure>
					<a href="single-post.html">
						<img src="/img/photos/blog1.jpg" alt="" />
					</a>
					<figcaption>
						<h2>Post Title</h2>
						<div class="post-date">June,05 2014</div>
					</figcaption>
				</figure>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia ipsum quis diam aliquam vel mollis nisi tempus. Nam et ante urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam luctus, mi vel tincidunt pulvinar, lectus urna vestibulum velit, et pharetra enim sapien eget orci. Mauris in porta neque. In hac habitasse platea dictumst.
					{{ link_to('torneo', 'Read more...') }}
				</p>
			</article>
		</section>
		<!-- RIGHT CONTAINER -->
		<section class="rightcontainer">
		   
			<!-- SIDEBAR BOX -->
			<div class="sidebarbox">
				<h3>Sobre el Torneo</h3>
				<p>Elit cernantur in pariatur. Te illum de aute, a incididunt te pariatur. Vidisse aut tempor. Eu aut lorem cernantur, occaecat dolor mandaremus consequat. Do labore excepteur, dolor id admodum. Fabulas fugiat eiusmod incididunt. Si voluptate ita ullamco, iis minim incurreret voluptatibus an officia domesticarum nam cernantur est quis mentitum.
					{{ link_to('torneo', 'Read more...') }}
				</p>
			</div>
			<!-- SIDEBAR BOX -->
			<div class="sidebarbox">
				<div class="sidebarbox-title">
					<h3>Fixture</h3>
				</div>
				<!-- TABLE -->
				<div class="fixture-row">
					<a href="#">
						<div class="fixture-row-left">Atlas<div>?</div></div>
						<div class="fixture-row-right"><div>?</div>Salamanca</div>
					</a>
					<a href="#">
						<div class="fixture-row-left">Barcelona<div>1</div></div>
						<div class="fixture-row-right"><div>3</div>Borussia</div>
					</a>
					<a href="#">
						<div class="fixture-row-left">La Docta FC<div>4</div></div>
						<div class="fixture-row-right"><div>1</div>Cordoba FC</div>
					</a>
					<a href="#">
						<div class="fixture-row-left">Elit FC<div>2</div></div>
						<div class="fixture-row-right"><div>4</div>Voluptate Cillum FC</div>
					</a>
					<a href="#">
						<div class="fixture-row-left">Voluptate Cillum FC<div>1</div></div>
						<div class="fixture-row-right"><div>1</div>Domesticarum FC</div>
					</a>
					<a href="#">
						<div class="fixture-row-left">Ullamco FC<div>6</div></div>
						<div class="fixture-row-right"><div>1</div>Voluptate Cillum FC</div>
					</a>
					<a href="#">
						<div class="fixture-row-left">Incididunt FC<div>1</div></div>
						<div class="fixture-row-right"><div>5</div>Voluptate Cillum FC</div>
					</a>
					<a href="#">
						<div class="fixture-row-left">Voluptate Cillum FC<div>2</div></div>
						<div class="fixture-row-right"><div>1</div>Pariatur FC</div>
					</a>
					<a href="#">
						<div class="fixture-row-left">Voluptate Cillum FC<div>1</div></div>
						<div class="fixture-row-right"><div>3</div>Mentitum FC</div>
					</a>
				</div>
			</div>
			<!-- SIDEBAR BOX -->
			<div class="sidebarbox">
				<div class="sidebarbox-title">
					<h3>Galeria</h3>
				</div>
				<!-- GALLERY -->
				<ul class="team-gallery">
					<li>
						<a class="clb-photo" href="/img/photos/l1.jpg">
							<img src="/img/photos/s1.jpg" alt="" />
						</a>
					</li>
					<li>
						<a class="clb-iframe" href="http://www.youtube.com/embed/8I8XDEMx1UQ">
							<img src="/img/photos/s1.jpg" alt="" />
						</a>
					</li>
					<li>
						<a class="clb-photo" href="/img/photos/l1.jpg">
							<img src="/img/photos/s1.jpg" alt="" />
						</a>
					</li>
					<li>
						<a class="clb-iframe" href="http://www.youtube.com/embed/8I8XDEMx1UQ">
							<img src="/img/photos/s1.jpg" alt="" />
						</a>
					</li>
					<li>
						<a class="clb-photo" href="/img/photos/l1.jpg">
							<img src="/img/photos/s1.jpg" alt="" />
						</a>
					</li>
					<li>
						<a class="clb-link" href="http://www.ideasbox.com.ar">
							<img src="/img/photos/s1.jpg" alt="" />
						</a>
					</li>
				</ul>
				<a href="single-gallery.html" class="button button-widget">Ver mas fotos</a>
			</div>
		</section>
	</section>
	<div class="clear"></div>
	<!-- SPONSORS TITLE -->
	<div class="logos-title">Sponsors</div>
	<!-- SPONSORS SLIDER -->
	<section class="transparent-bg">
		<div id="logos">
			<div class="slide">
				<a href="#">
					<img src="/img/photos/logo.png" alt="" />
				</a>
			</div>
			<div class="slide">
				<a href="#">
					<img src="/img/photos/logo.png" alt="" />
				</a>
			</div>
			<div class="slide">
				<a href="#">
					<img src="/img/photos/logo.png" alt="" />
				</a>
			</div>
			<div class="slide">
				<a href="#">
					<img src="/img/photos/logo.png" alt="" />
				</a>
			</div>
			<div class="slide">
				<a href="#">
					<img src="/img/photos/logo.png" alt="" />
				</a>
			</div>
		</div>
	</section>
	<!-- FOOTER -->
	@include('partials.footer')
@stop