<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Alunos</title>
</head>
<body>

    <h1>Cadastro de Alunos</h1>

    <form action="{{ route('aluno.add') }}" method="POST">
        @csrf

        <label for="nome">Nome:</label>
        <input
            type="text"
            name="nome"
            id="nome"
            value="{{ old('nome') }}"
        >

        <button type="submit">
            Salvar
        </button>

        {{-- Mensagem de sucesso --}}
        @isset($success)
            <h3>{{ $success }}</h3>
        @endisset

        {{-- Mensagens de erro --}}
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>

    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th colspan="2">Ações</th>
        </tr>

        @isset($alunos)
            @foreach($alunos as $aluno)

                <tr>

                    <td>
                        {{ $aluno->id }}
                    </td>

                    <td>
                        {{ $aluno->nome }}
                    </td>

                    <td>

                        <form
                            action="{{ route('aluno.remove', ['id'=>$aluno->id]) }}"
                            method="GET"
                        >

                            <button type="submit">
                                Remover
                            </button>

                        </form>

                    </td>

                    <td>

                        <form
                            action="{{ route('aluno.atualizar', ['id'=>$aluno->id]) }}"
                            method="GET"
                        >

                            <button type="submit">
                                Atualizar
                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach
        @endisset

    </table>

</body>
</html>

