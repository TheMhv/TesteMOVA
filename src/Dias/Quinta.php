<?php

namespace App\Dias;

class Quinta implements DiasInterface
{
    public function mensagem()
    {
        return [
            "titulo" => "Olá, tenha uma ótima quinta-feira",
            "frase" => "Não encontre defeitos, encontre soluções. Qualquer um sabe queixar-se.",
            "autor" => "Henry Ford"
        ];
    }
}