@layout('layout.main')

@section('conteudo')

	<p>Modelos relacionados ao produto <strong>{{$produto->name}}</strong></p>

	<table border="1" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Modelos</th>
			</tr>
		</thead>
		<tbody>
		@foreach($modelos as $modelo)
			<tr>
				<td width="1%" nowrap="nowrap">{{$modelo->id}}</td>
				<td>{{$modelo->name}}</td>
			</tr>
		@endforeach
		</tbody>
	</table>

	<a href="/produto">voltar</a>

@endsection