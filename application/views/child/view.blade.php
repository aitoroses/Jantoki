<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>Comedor Saludable</title>
</head>
<body>

<h1 class="titulo">Berria</h1>
	
	{{ Form::open('child/update', 'PUT') }}

	<!-- What child to update	 -->

	{{ Form::hidden('id', $child->id ) }}

	<fieldset>
		{{ Form::label('nombre','Izena: ') }} <br />
		{{ Form::text('nombre', $child->nombre ) }}
	</fieldset>
	<fieldset>
		{{ Form::label('euskera','Euskara: ') }} <br />
		{{ Form::text('euskera', $child->euskera ) }}
	</fieldset>
	<fieldset>
		{{ Form::label('mesa','Jaten: ') }} <br />
		{{ Form::text('mesa', $child->mesa ) }}
	</fieldset>
	<fieldset>
		{{ Form::label('sentado','Eserita: ') }} <br />
		{{ Form::text('sentado', $child->sentado ) }}
	</fieldset>

	<p>{{ Form::submit('Aldatu') }}</p>
	
	{{ Form::close() }}
	<p>{{ HTML::link_to_route('index', 'Atzera') }}</p>

</body>
</html>