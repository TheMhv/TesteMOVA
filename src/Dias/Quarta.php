<?php

namespace App\Dias;

class Quarta implements DiasInterface
{
    public function mensagem()
    {
        return [
            "titulo" => "Olá, tenha uma ótima quarta-feira",
            "frase" => "Vá até onde a sua vista alcançar e, ao chegar lá, você conseguirá enxergar mais longe.",
            "autor" => "J. P. Morgan"
        ];
    }
}