<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>Comedor Saludable</title>
</head>
<body>

<h1 class="titulo">Jantokia</h1>

<table>
	<tr>
		<th>Nombre</th>
		<th>Euskara</th>
		<th>Jatea</th>
		<th>Eserita</th>
	</tr>
	@foreach($child as $ele)	
	<tr>
		<td>{{ $ele->nombre }}</td>
		<td>{{ $ele->euskera }}</td>
		<td>{{ $ele->mesa }}</td>
		<td>{{ $ele->sentado }}</td>
		<td>{{ HTML::link_to_route('view', 'Aldatu', array($ele->id)) }}</td>
		<td>
			{{ Form::open('child/delete', 'DELETE') }}
			{{ Form::hidden('id', $ele->id) }}
			{{ Form::submit('Ezabatu') }}
			{{ Form::close() }}
		</td>

	</tr> 
	@endforeach
</table>
<p>{{ HTML::link_to_route('create', 'Berria') }}</p>

</body>
</html>