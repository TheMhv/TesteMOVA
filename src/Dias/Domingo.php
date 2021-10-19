<?php

namespace App\Dias;

class Domingo implements DiasInterface
{
    public function mensagem()
    {
        return [
            "titulo" => "Olá, tenha um ótimo sábado",
            "frase" => "A sabedoria consiste em ordenar bem a nossa própria alma",
            "autor" => "Platão"
        ];
    }
}