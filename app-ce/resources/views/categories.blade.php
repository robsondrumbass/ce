<!DOCTYPE html>
<html>
<head>
	<title>Lista das Categorias</title>
</head>
<body>
<table>
	<caption>Categorias</caption>
	<thead>
		<tr>
			<th>Nome</th>
			<th>Descrição</th>
		</tr>
	</thead>
	<tbody>
	@foreach($categorias as $categoria)
	<tr>
		<td>{{ $categoria->name }}</td>
		<td>{{ $categoria->description }}</td>
	</tr>
	@endforeach
	</tbody>
</table>

</body>
</html>