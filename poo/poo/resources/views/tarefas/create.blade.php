<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Criar Tarefa</h1>

    
    {{-- Formulário de criação --}}
    <form action="{{ route('tarefas.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" class="form-control" id="titulo" value="{{ old('titulo') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" class="form-control" id="descricao" rows="4">{{ old('descricao') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>

    
</body>
</html>