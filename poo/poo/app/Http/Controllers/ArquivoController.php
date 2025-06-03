<?php

namespace App\Http\Controllers;

class ArquivoController extends Controller
{

    public function index()
    {
            $dados = [
                'mensagem' => 'Teste 2!',
                'status' => 'sucesso',
                'data' => [
                    'nome' => 'Usuário Teste',
                    'idade' => 30,
                    'cidade' => 'Carangola, MG'
                ]
            ];
            return $dados;
    }

}