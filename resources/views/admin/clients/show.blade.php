@extends('layouts.layout')

@section('content')

    <h3>Ver Cliente</h3>
    <a href="{{route('clients.edit', ['client' => $client->id])}}" class="btn btn-primary">Editar</a>
    <a href="{{route('clients.destroy', ['client' => $client->id])}}" class="btn btn-danger"
        onclick="event.preventDefault();if(confirm('Deseja excluir este cliente?')){document.querySelector('#form-delete').submit();}">Excluir</a>
    <form id="form-delete" style="display: none;" METHOD="post" action="{{route('clients.destroy', ['client' => $client->id])}}">
        @method('DELETE')
        @csrf
    </form>
    <br><br>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th scope="row">ID</th>
                <td>{{$client->id}}</td>
            </tr>
            <tr>
                <th scope="row">Nome</th>
                <td>{{$client->name}}</td>
            </tr>
            <tr>
                <th scope="row">Documento</th>
                <td>{{$client->document_number}}</td>
            </tr>
            <tr>
                <th scope="row">E-mail</th>
                <td>{{$client->email}}</td>
            </tr>
            <tr>
                <th scope="row">Telefone</th>
                <td>{{$client->phone}}</td>
            </tr>
            <tr>
                <th scope="row">Estado Civil</th>
                <td>
                    @switch($client->marital_status)
                        @case(1)
                            Solteiro
                            @break
                        @case(2)
                            Casado
                            @break
                        @case(3)
                            Divorciado
                            @break
                    @endswitch
                </td>
            </tr>
            <tr>
                <th scope="row">Data de Nascimento</th>
                <td>{{$client->date_birth}}</td>
            </tr>
            <tr>
                <th scope="row">Sexo</th>
                <td>{{$client->sex == 'M' ? 'Masculino' : 'Feminino'}}</td>
            </tr>
            <tr>
                <th scope="row">Def. Física</th>
                <td>{{$client->physical_disability}}</td>
            </tr>
            <tr>
                <th scope="row">Inadimplente?</th>
                <td>{{$client->defaulter ? 'Sim' : 'Não'}}</td>
            </tr>
        </tbody>
    </table>

@endsection
