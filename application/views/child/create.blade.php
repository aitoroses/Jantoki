<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>Sample Title</title>
</head>
<body>

<h1 class="titulo">Berria</h1>
	
	{{ Form::open('child/add', 'POST') }}

	<fieldset>
		{{ Form::label('nombre','Izena: ') }} <br />
		{{ Form::text('nombre', Input::old('nombre')) }}
	</fieldset>
	<fieldset>
		{{ Form::label('euskera','Euskara: ') }} <br />
		{{ Form::text('euskera', Input::old('euskara')) }}
	</fieldset>
	<fieldset>
		{{ Form::label('mesa','Eserita: ') }} <br />
		{{ Form::text('mesa', Input::old('mesa')) }}
	</fieldset>
	<fieldset>
		{{ Form::label('sentado','Mahaia: ') }} <br />
		{{ Form::text('sentado', Input::old('sentado')) }}
	</fieldset>
	
	{{ Form::submit('Berria') }}
	
	{{ Form::close() }}
	<p>{{ HTML::link_to_route('index', 'Atras') }}</p>

</body>
</html>