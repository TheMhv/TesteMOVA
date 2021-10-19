<?php

namespace App\Dias;

class Sexta implements DiasInterface
{
    public function mensagem()
    {
        return [
            "titulo" => "Olá, tenha uma ótima sexta-feira",
            "frase" => "Não se satisfaça apenas em cumprir sua obrigação. Faça mais que sua obrigação. É o cavalo que termina com uma cabeça à frente que vence a corrida.",
            "autor" => "Andrew Carnegie"
        ];
    }
}