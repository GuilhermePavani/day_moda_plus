<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
</head>
<body>

    <h1>Lista de Clientes</h1>

    <a href="{{ route('clientes.create') }}">Cadastrar novo cliente</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Tamanho Preferido</th>
                <th>Gastos Totais</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->tamanho_preferido }}</td>
                    <td>R$ {{ number_format($cliente->gastos_totais, 2, ',', '.') }}</td>

                    <td>
                        <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>

                        <form action="{{ route('clientes.destroy', $cliente->id) }}"
                              method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Excluir cliente?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

</body>
</html>
