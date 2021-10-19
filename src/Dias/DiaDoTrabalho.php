<?php

namespace App\Dias;

class DiaDoTrabalho implements DiasInterface
{
    public function mensagem()
    {
        return [
            "titulo" => "Olá, feliz dia do trabalho!",
            "frase" => "Que o teu trabalho seja perfeito para que, mesmo depois da tua morte, ele permaneça.",
            "autor" => "Leonardo da Vinci"
        ];
    }
}