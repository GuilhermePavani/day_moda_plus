    @extends('layouts.app')

    @section('content')
<h1>Registrar Entrada de Estoque</h1>

<form action="{{ route('estoques.store') }}" method="POST">
    @csrf

    <label>Produto:</label><br>
    <select name="produto_id">
        @foreach($produtos as $produto)
            <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
        @endforeach
    </select><br><br>

    <label>Quantidade:</label><br>
    <input type="number" name="quantidade"><br><br>

    <label>Data de Entrada:</label><br>
    <input type="date" name="data_entrada"><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('estoques.index') }}">Voltar</a>
@endsection
