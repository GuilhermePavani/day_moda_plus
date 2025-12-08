    @extends('layouts.app')

    @section('content')
<h1>Cadastrar Produto</h1>

<form action="{{ route('produtos.store') }}" method="POST">
    @csrf

    <label>Nome:</label>
    <input type="text" name="nome" required><br><br>

    <label>Preço:</label>
    <input type="number" step="0.01" name="preco"><br><br>

    <label>Descrição:</label>
    <textarea name="descricao"></textarea><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('produtos.index') }}">Voltar</a>
@endsection
