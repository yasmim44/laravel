<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Aluno</title>
</head>
<body>

    <h1>Atualizar Aluno</h1>

    <form action="{{ route('aluno.save') }}" method="POST">
        @csrf

        <input
            type="hidden"
            name="id"
            value="{{ $aluno->id }}"
        >

        <label for="nome">Nome:</label>

        <input
            type="text"
            name="nome"
            id="nome"
            value="{{ $aluno->nome }}"
        >

        <button type="submit">
            Salvar Alterações
        </button>

        @isset($success)
            <h3>{{ $success }}</h3>
        @endisset

    </form>

    <br>

    <a href="{{ route('aluno.index') }}">
        Voltar
    </a>

</body>
</html>