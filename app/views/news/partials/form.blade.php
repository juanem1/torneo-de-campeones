
{{ Form::label('title', 'Titulo:') }}
{{ Form::text('title', null) }}

{{ Form::label('body', 'Contenido:') }}
{{ Form::textarea('body', null) }}

<div>
	{{ Form::label('provincia_id', 'Provincia:') }}
	{{ Form::select('provincia_id', $provincias, null) }}
</div>

<div>
	{{ Form::submit('Enviar', array('class' => 'button')) }}
</div>