<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Lista de Tarefas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tarefas as $tarefa)
            <tr>
                <td>{{ $tarefa->id }}</td>
                <td>
                    <a href="{{ route('tarefas.show', ['tarefa' => $tarefa->id]) }}">
                        {{ $tarefa->titulo }}
                    </a>
                    </td>
                <td>{{ $tarefa->descricao }}</td>
                <td></td>
            </tr>
            @endforeach

        </tbody>
        
    </table>

    <br>
    <p><a href="{{ route('tarefas.create') }}">Nova Tarefa</a></p>
    
</body>
</html>