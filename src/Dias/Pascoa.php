<?php

namespace App\Dias;

class Pascoa implements DiasInterface
{
    public function mensagem()
    {
        return [
            "titulo" => "Olá, tenha uma feliz páscoa!",
            "frase" => "Ninguém acende uma lâmpada e a coloca num lugar onde ficará escondida, ou sob uma tigela. Ao invés disso, coloca-se ela de pé, assim aquele que entrar pode enxergar a luz.",
            "autor" => "Jesus Cristo"
        ];
    }
}