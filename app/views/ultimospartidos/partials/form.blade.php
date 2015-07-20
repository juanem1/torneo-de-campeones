
{{ Form::label('team_a', 'Primer equipo:') }}
{{ Form::text('team_a', null, array('placeholder' => 'Equipo A')) }}

{{ Form::label('team_b', 'Segundo equipo:') }}
{{ Form::text('team_b', null, array('placeholder' => 'Equipo B')) }}

{{ Form::label('results', 'Resultado del partido:') }}
{{ Form::text('results', null, array('placeholder' => '1 - 0')) }}

{{ Form::label('description', 'Descripcion del partido:') }}
{{ Form::text('description', null, array('placeholder' => '12 de Julio de 2014 - 10:00 PM - Canchas Cacho')) }}

<div>
	{{ Form::label('provincia_id', 'Provincia:') }}
	{{ Form::select('provincia_id', $provincias, null) }}
</div>

{{ Form::submit('Guardar', array('class' => 'button')) }}