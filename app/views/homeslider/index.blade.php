@extends('layout')

@section('mainmenu')
	@include('dashboard.partials.mainmenu')
@stop

@section('content')
    <div class="page-title">Home Sliders</div>
    <section class="pagecontainer using-grid">
        <div class="grid">
            <div class="unit whole">
                <div class="full_width">
                    @foreach($sliders as $slider)
                        <ul class="list-unstyled">
                            <li><strong>Titulo:</strong> {{ $slider->title }}</li>
                            <li><strong>Provincia:</strong> {{ $slider->provincia->name }}</li>
                            <li><strong>Imagen:</strong><a href="/img/slider/{{ $slider->image }}"> {{ $slider->image }}</a></li>
                            <li><strong>Cuerpo:</strong> {{ $slider->body }}</li>
                        </ul>
                        <p>
                            {{ link_to('homeslider/' . $slider->id . '/edit', 'Editar', array('class' => "button")) }}
                        </p>
                        <hr />
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')
@stop