<?php

namespace App\Helpers;

class Arquivo
{

    public static function Caminho()
    {
        return true;
    }

    public static function getProprietario()
    {
        return self::Proprietario();
    }

    private static function Proprietario()
    {
        return "guilherme";
    }

}