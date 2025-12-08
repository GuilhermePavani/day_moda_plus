<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Cliente</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <h1>Novo Cliente</h1>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

        <label>Nome:</label><br>
        <input type="text" name="nome"><br><br>

        <label>Telefone:</label><br>
        <input type="text" name="telefone"><br><br>

        <label>Tamanho_preferido:</label><br>
        <input type="text" name="tamanho_preferido"><br><br>

        <!--  BOTÃO SALVAR -->
        <button type="submit">Salvar</button>
    </form>

    <br>

    <!--  BOTÃO VOLTAR -->
    <a href="{{ route('clientes.index') }}">Voltar</a>
@endsection
</body>
</html>
