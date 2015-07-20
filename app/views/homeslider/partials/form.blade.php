
{{ Form::label('title', 'Titulo:') }}
{{ Form::text('title', null) }}

{{ Form::label('body', 'Contenido:') }}
{{ Form::text('body', null) }}

<div>
	{{ Form::label('provincia_id', 'Provincia:') }}
	{{ Form::select('provincia_id', $provincias, null, array('class' => 'form-control')) }}
</div>

<div>
	{{ Form::label('image', 'Imagen:') }}
	{{ Form::file('image') }}
</div>

<div>
	{{ Form::submit('Enviar', array('class' => 'button')) }}
</div>