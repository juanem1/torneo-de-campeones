<!-- PAGE CONTAINER -->
<section class="pagecontainer">
	<h1>Ultimas Novedades</h1><hr/>
	@foreach($news as $new)
		<article class="post">
			<h2>{{ $new->title }}</h2>
			<div class="body">
				{{ $new->body }}
			</div>
			<div>{{ link_to($provincia. '/novedades/' . $new->slug , 'Leer más...') }}</div>
		</article>
		<hr/>
	@endforeach
</section>
<div class="clear"></div>