@extends('layouts.layout')

@section('content')

	<h3>Listagem de Clientes</h3>

    <a href="{{route('clients.create')}}" class="btn btn-primary">Novo Cliente</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>E-mail</th>
				<th>CPF</th>
				<th>Telefone</th>
				<th>Data de Nascimento</th>
				<th>Sexo</th>
                <th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($clients as $client)
			<tr>
				<td>{{ $client->name }}</td>
				<td>{{ $client->email }}</td>
				<td>{{ $client->document_number }}</td>
				<td>{{ $client->phone }}</td>
				<td>{{ $client->date_birth }}</td>
				<td>{{ $client->sex }}</td>
                <td>
                    <a href="{{ route('clients.edit', ['client' => $client->id]) }}">Editar</a>
                    <a href="{{ route('clients.show', ['client' => $client->id]) }}">Ver</a>
                </td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection
