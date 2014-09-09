@extends('layout')


@section('content')

	<div class="page-title">Novedad</div>

	<section class="pagecontainer using-grid">
		<div class="grid">
			<div class="unit whole">
				<div class="full_width">
					<p><strong>{{ $news->title }}</strong></p>
					<p>{{ $news->body }}</p>
				</div>
				
			</div>
		</div>
	</section>

	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')

@stop