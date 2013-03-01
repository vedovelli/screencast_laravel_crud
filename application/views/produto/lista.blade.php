@layout('layout.main')

@section('conteudo')
	<table border="1" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Produto</th>
				<th>Qtde. Modelos</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
		@foreach($produtos as $p)
			<tr>
				<td width="1%" nowrap="nowrap">{{$p->id}}</td>
				<td>{{$p->name}}</td>
				<td width="1%" nowrap="nowrap">{{ count($p->relationships['models']) }} [ <a href="/produto/modelos/{{$p->id}}">ver</a> ]</td>
				<td width="1%" nowrap="nowrap">[
					<a href="/produto/unidade/{{$p->id}}">atualizar</a> |
					<a href="/produto/remover/{{$p->id}}">excluir</a>
				]</td>
			</tr>
		@endforeach
		</tbody>
	</table>

	<form action="/produto/salvar" method="post">
		<input type="hidden" name="id" value="{{$produto['id']}}">
		<input type="text" name="name" placeholder="Nome do produto" value="{{$produto['name']}}">
		<input type="submit" value="Salvar">
	</form>

@endsection