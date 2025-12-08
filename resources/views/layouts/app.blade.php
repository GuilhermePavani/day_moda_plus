<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema Moda Plus</title>

    <style>
        body {
            margin: 0;
            display: flex;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 230px;
            background: #1f2937;
            color: white;
            height: 100vh;
            padding: 20px;
            position: fixed;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            margin-bottom: 8px;
            background: #374151;
            border-radius: 4px;
        }

        .sidebar a:hover {
            background: #4b5563;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <h2>Painel</h2>

        <a href="{{ route('dashboard.index') }}">📊 Dashboard</a>
        <a href="{{ route('clientes.index') }}">👥 Clientes</a>
        <a href="{{ route('produtos.index') }}">🛍 Produtos</a>
        <a href="{{ route('vendas.create') }}">💰 Vendas</a>
        <a href="{{ route('estoques.index') }}">📦 Estoque</a>
    </div>

    <div class="content">
        @yield('content')
    </div>

</body>
</html>

