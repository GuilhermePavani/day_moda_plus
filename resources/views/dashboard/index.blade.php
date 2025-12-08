 @extends('layouts.app')

    @section('content')
<h2>Ganhos por Dia da Semana</h2>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>Dia</th>
            <th>Total (R$)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vendasSemana as $item)
            <tr>
                <td>{{ $item->dia }}</td>
                <td>R$ {{ number_format($item->total, 2, ',', '.') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>

<h2>Ganhos por Mês</h2>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>Mês</th>
            <th>Total (R$)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vendasMes as $item)
            <tr>
                <td>{{ $item->mes }}</td>
                <td>R$ {{ number_format($item->total, 2, ',', '.') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>

<a href="{{ route('vendas.create') }}">Cadastrar Venda</a>
@endsection
