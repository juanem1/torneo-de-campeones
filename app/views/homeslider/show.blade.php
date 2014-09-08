@extends('layout')


@section('content')

<div class="page-title">Slider</div>

<section class="pagecontainer using-grid">
	<div class="grid">
		<div class="unit whole">
			<div class="full_width">
				<p><strong>Titulo:</strong> {{ $slider->title }}</p>
				<p><strong>Cuerpo:</strong>{{ $slider->body }}</p>
				<p><strong>Imagen:</strong><a href="/img/slider/{{ $slider->image }}">{{ $slider->image }}</a></p>
				<div>
					<img src="/img/slider/{{ $slider->image }}" style="width:100%">
				</div>
			</div>
		</div>
	</div>
</section>
<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')
@stop