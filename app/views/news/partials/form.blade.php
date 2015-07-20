
{{ Form::label('title', 'Titulo:') }}
{{ Form::text('title', null) }}

{{ Form::label('body', 'Contenido:') }}
{{ Form::textarea('body', null) }}

<div>
	{{ Form::label('provincia_id', 'Provincia:') }}
	{{ Form::select('provincia_id', $provincias, null) }}
</div>

{{ Form::submit('Guardar', array('class' => 'button')) }}