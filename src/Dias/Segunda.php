<?php

namespace App\Dias;

class Segunda implements DiasInterface
{
    public function mensagem()
    {
        return [
            "titulo" => "Olá, tenha uma ótima segunda-feira",
            "frase" => "A força não provém da capacidade física. Provém de uma vontade indomável.",
            "autor" => "Mahatma Gandhi"
        ];
    }
}