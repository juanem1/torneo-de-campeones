@extends('layout')

@section('mainmenu')
	@include('dashboard.partials.mainmenu')
@stop

@section('content')
    <div class="page-title">Nuevo</div>
    <section class="pagecontainer using-grid">
        <div class="grid">
            <div class="unit whole">
                @include('partials.messages')
                {{ Form::open(array('route' => array('ultimospartidos.store'))) }}
                    @include('ultimospartidos.partials.form')
                {{ Form::close() }}
            </div>
        </div>
    </section>
    <div class="clear"></div>

    <!-- FOOTER -->
    @include('partials.footer')
@stop
