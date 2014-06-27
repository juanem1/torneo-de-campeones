@extends('layout')

@section('content')
	<!-- PAGE TITLE -->
	<div class="page-title">Galeria</div>
	<!-- PAGE CONTAINER -->
	<section class="pagecontainer">
		<!-- FILTERS -->
		<ul id="filters1" class="filters">
			<li><a href="#" data-filter="all" class="active">Todas</a></li>
			<li><a href="#" data-filter="photos">Fotos</a></li>
			<li><a href="#" data-filter="videos">Videos</a></li>
			<li><a href="#" data-filter="links">Links</a></li>
		</ul>
		<div class="clear"></div>
		<!-- GALLERY -->
		<ul id="gridbox1" class="team-gallery quarter">
			<li data-filter="photos">
				<a class="clb-photo" href="/img/photos/l1.jpg" data-rel="photos">
					<img src="/img/photos/s1.jpg" alt="" />
				</a>
			</li>
			<li data-filter="videos">
				<a class="clb-iframe" href="http://www.youtube.com/embed/1iIZeIy7TqM">
					<img src="/img/photos/s1.jpg" alt="" />
				</a>
			</li>
			<li data-filter="videos">
				<a class="clb-iframe" href="http://www.dailymotion.com/embed/video/x143vp2">
					<img src="/img/photos/s1.jpg" alt="" />
				</a>
			</li>
			<li data-filter="photos">
				<a class="clb-photo" href="/img/photos/l1.jpg" data-rel="photos">
					<img src="/img/photos/s1.jpg" alt="" />
				</a>
			</li>
			<li data-filter="links">
				<a class="clb-link" href="http://www.themeforest.com" target="_blank">
					<img src="/img/photos/s1.jpg" alt="" />
				</a>
			</li>
			<li data-filter="photos">
				<a class="clb-photo" href="/img/photos/l1.jpg" data-rel="photos">
					<img src="/img/photos/s1.jpg" alt="" />
				</a>
			</li>
			<li data-filter="photos">
				<a class="clb-photo" href="/img/photos/l1.jpg" data-rel="photos">
					<img src="/img/photos/s1.jpg" alt="" />
				</a>
			</li>
			<li data-filter="links">
				<a class="clb-link" href="http://www.themeforest.com" target="_blank">
					<img src="/img/photos/s1.jpg" alt="" />
				</a>
			</li>
			<li data-filter="photos">
				<a class="clb-photo" href="/img/photos/l1.jpg" data-rel="photos">
					<img src="/img/photos/s1.jpg" alt="" />
				</a>
			</li>
			<li data-filter="videos">
				<a class="clb-iframe" href="http://www.youtube.com/embed/1iIZeIy7TqM">
					<img src="/img/photos/s1.jpg" alt="" />
				</a>
			</li>
			<li data-filter="photos">
				<a class="clb-photo" href="/img/photos/l1.jpg" data-rel="photos">
					<img src="/img/photos/s1.jpg" alt="" />
				</a>
			</li>
			<li data-filter="videos">
				<a class="clb-iframe" href="http://player.vimeo.com/video/70301553">
					<img src="/img/photos/s1.jpg" alt="" />
				</a>
			</li>
		</ul>
	</section>
	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')
@stop