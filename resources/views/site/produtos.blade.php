<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background: #f5f5f5;
        }

        h1 {
            text-align: center;
        }

        .lista-produtos {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .produto {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .produto h3 {
            margin: 0 0 10px;
        }

        .produto p {
            margin: 5px 0;
        }

        .preco {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <h1>Produtos Disponíveis</h1>

    <div class="lista-produtos">

        @foreach ($produtos as $produto)
            <div class="produto">
                <h3>{{ $produto->nome }}</h3>

                @if($produto->descricao)
                    <p>{{ $produto->descricao }}</p>
                @endif

                <p class="preco">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
            </div>
        @endforeach

        @if($produtos->isEmpty())
            <p>Nenhum produto cadastrado ainda.</p>
        @endif

    </div>
@endsection
</body>
</html>
