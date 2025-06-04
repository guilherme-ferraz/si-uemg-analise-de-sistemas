<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <tbody>
            <tr>
                <td>ID: {{ $tarefa->id }}</td>
                <td>Titulo: {{ $tarefa->titulo }}</td>
                <td>Descricao: {{ $tarefa->descricao }}</td>]
                <td>Criado em: {{ $tarefa->created_at }}</td>
            </tr>
        </tbody>
    </table>

</body>
</html>