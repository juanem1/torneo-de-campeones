@extends('layout')

@section('mainmenu')
	{{ $mainmenu or '' }}
@stop


@section('content')

	<div class="page-title">{{ $news->title }}</div>

	<section class="pagecontainer using-grid">
		<div class="grid">
			<div class="unit whole">
				<div class="full_width">
					<p>{{ $news->body }}</p>
					<p>Última actualización: {{ $news->updated_at }}</p>
				</div>
			</div>
		</div>
	</section>

	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')

@stop