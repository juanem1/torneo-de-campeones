<!-- PAGE CONTAINER -->
<section class="pagecontainer">
	<h1>Ultimas Novedades</h1><hr/>
	@foreach($news as $new)
		<article class="post">
			<h2>{{ $new->title }}</h2>
			<div class="body">
				{{ Str::words($new->body, 100) }}
			</div>
			<div>{{ link_to($provincia. '/novedades/' . $new->slug , 'Leer más...') }}</div>
		</article>
		<hr/>
	@endforeach

	{{ $news->links('partials.pagination') }}

</section>
<div class="clear"></div>