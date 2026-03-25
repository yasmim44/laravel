<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        button {
            padding: 6px 10px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-remover {
            background-color: #e74c3c;
            color: white;
        }

        .btn-editar {
            background-color: #3498db;
            color: white;
        }

        .btn-adicionar {
            margin-bottom: 15px;
            background-color: #2ecc71;
            color: white;
        }
    </style>
</head>
<body>

<h1>Lista de Produtos</h1>

<button class="btn-adicionar">Adicionar Produto</button>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Ações</th>
    </tr>

    @foreach ($produtos as $produto)
    <tr>
        <td>{{ $produto['id'] }}</td>
        <td>{{ $produto['nome'] }}</td>
        <td>R$ {{ number_format($produto['preco'], 2, ',', '.') }}</td>
        <td>
            <button class="btn-remover">Remover</button>
            <button class="btn-editar">Editar</button>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>