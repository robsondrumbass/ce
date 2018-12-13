<!DOCTYPE html>
<html>
<head>
	<title>Lista de Produtos</title>
</head>
<body>

<table>
	<caption>Produtos</caption>
	<thead>
		<tr>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Valor</th>
		</tr>
	</thead>
	<tbody>
		@foreach($produtos as $produto)
		<tr>
			<td>{{ $produto->name }}</td>
			<td>{{ $produto->description }}</td>
			<td>{{ $produto->price }}</td>
		</ul>
		@endforeach
	</tbody>
</table>

</body>
</html>