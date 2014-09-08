<section class="flex-wrapper">
	<div id="slider" class="flexslider">
		<ul class="slides">
			@foreach($sliders as $slider)
				<li>
					<div class="flex-title">
						<h3>{{ $slider->title }}</h3>
						<p>{{ $slider->body }}</p>
					</div>
					<img src="/img/slider/{{ $slider->image }}" alt="" />
				</li>
			@endforeach
		</ul>
	</div>
</section>
<div class="clear"></div>