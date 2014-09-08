<!-- PAGE CONTAINER -->
<section class="pagecontainer">
	<h1>Ultimas Novedades</h1><hr/>
	@foreach($news as $new)
		<article class="post">
			<strong>{{ $new->title }}</strong>
			<div class="body">
				{{ $new->body }}
			</div>
			<div>{{ link_to('news/' . $new->id , 'Leer más...') }}</div>
		</article>
		<hr/>
	@endforeach
</section>
<div class="clear"></div>