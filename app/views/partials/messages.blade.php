@if (Session::has('errors'))
<div class="red message">
	<span class="message-close"></span>
	<h5>Error</h5>
	<ul class="list-unstyled">
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
</div>
@endif

@if (Session::has('message'))
<div class="message">
	<span class="message-close"></span>
	<h5>Información</h5>
	<p>{{ Session::get('message') }}</p>
</div>
@endif

@if (Session::has('success'))
<div class="message">
	<span class="message-close"></span>
	<p>{{ Session::get('success') }}</p>
</div>
@endif


