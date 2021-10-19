<?php

namespace App\Dias;

class Terca implements DiasInterface
{
    public function mensagem()
    {
        return [
            "titulo" => "Olá, tenha uma ótima terça-feira",
            "frase" => "A persistência é muito importante. Você não deve desistir, a menos que seja forçado a desistir.",
            "autor" => "Elon Musk"
        ];
    }
}