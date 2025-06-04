<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArquivoController;
use App\Http\Controllers\TarefasController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource("tarefas", TarefasController::class);
