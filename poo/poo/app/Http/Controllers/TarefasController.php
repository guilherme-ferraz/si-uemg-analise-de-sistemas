<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tarefas;
use Exception;

class TarefasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tarefas = Tarefas::all();
        // dd($tarefas);
        return response()->view('tarefas/index', compact(['tarefas']));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return response()->view("tarefas/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $tarefa = new Tarefas();
        $tarefa->titulo = $request->input("titulo");
        $tarefa->descricao = $request->input("descricao");

        try {
            $tarefa->save();

            return response()->json([
                'titulo' => $tarefa->titulo,
                'descricao' => $tarefa->descricao,
                'id' => $tarefa->id,
                'created_at' => $tarefa->created_at,
            ], 201);

        } catch (Exception $e) {
            dd($e);
        }
    

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $tarefa = Tarefas::find($id);

        return response()->view('tarefas/mostrar', compact(['tarefa']));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $tarefa = Tarefas::find($id);

        $tarefa->destroy();
        
    }
}
