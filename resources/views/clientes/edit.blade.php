<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <h1>Editar Cliente</h1>

    <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label><br>
        <input type="text" name="nome" value="{{ $cliente->nome }}"><br><br>

        <label>Telefone:</label><br>
        <input type="text" name="telefone" value="{{ $cliente->telefone }}"><br><br>

        <label>Tamanho Preferido:</label><br>
        <input type="text" name="tamanho_preferido" value="{{ $cliente->tamanho_preferido }}"><br><br>

        <button type="submit">Atualizar</button>
    </form>

    <br>
    <a href="{{ route('clientes.index') }}">Voltar</a>
@endsection
</body>
</html>
