@extends('layouts.layout')

@section('content')

    <h3>Novo Cliente</h3>
    @include('form._form_errors')
    <form method="POST" action="{{route('clients.update', ['client' => $client->id])}}">
        @method('PUT')
        @include('admin.clients._form')
        <button class="btn btn-primary">Salvar</button>
    </form>

@endsection
