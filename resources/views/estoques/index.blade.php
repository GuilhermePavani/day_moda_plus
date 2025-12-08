@extends('layouts.app')

@section('content')
<h1>Controle de Estoque</h1>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Produto</th>
        <th>Quantidade</th>
        <th>Vendidos</th>
        <th>Data Entrada</th>
    </tr>

    @foreach($estoques as $e)
        <tr>
            <td>{{ $e->id }}</td>
            <td>{{ $e->produto->nome }}</td>
            <td>{{ $e->quantidade }}</td>
            <td>{{ $e->vendidos }}</td>
            <td>{{ $e->data_entrada }}</td>
        </tr>
    @endforeach
</table>

<br>

<a href="{{ route('estoques.create') }}">Registrar Novo Estoque</a>
@endsection
