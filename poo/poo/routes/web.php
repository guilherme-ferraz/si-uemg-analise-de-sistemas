<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArquivoController;
use App\Http\Controllers\TarefasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function() {
    $dados = [
        'mensagem' => 'Olá do Laravel!',
        'status' => 'sucesso',
        'data' => [
            'nome' => 'Usuário Teste',
            'idade' => 30,
            'cidade' => 'Carangola, MG'
        ]
    ];

    return $dados;
});

Route::get('/teste2', [ArquivoController::class, 'index']);


Route::resource("tarefas", TarefasController::class);
