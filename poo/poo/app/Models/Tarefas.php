<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    //

    protected $table = 'tarefas';

    protected $fillable = ['titulo', 'descricao'];

    public function getTag()
    {
        return $this->titulo;
    }
}
