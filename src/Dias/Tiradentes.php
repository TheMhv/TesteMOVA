<?php

namespace App\Dias;

class Tiradentes implements DiasInterface
{
    public function mensagem()
    {
        return [
            "titulo" => "Olá, feliz dia da inconfidência mineira!",
            "frase" => "Pois seja feita a vontade de Deus. Mil vidas eu tivesse, mil vidas eu daria pela libertação da minha pátria!",
            "autor" => "Tiradentes"
        ];
    }
}