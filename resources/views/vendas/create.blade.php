<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Venda</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
<h1>Nova Venda</h1>

<form action="{{ route('vendas.store') }}" method="POST">
    @csrf

    <label>Valor:</label><br>
    <input type="number" step="0.01" name="valor" required><br><br>

    <label>Data:</label><br>
    <input type="date" name="data" required><br><br>

    <button type="submit">Salvar</button>
</form>

<br>
<a href="{{ route('dashboard.index') }}">Voltar ao Dashboard</a>
@endsection
</body>
</html>
