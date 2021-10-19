<?php

namespace App\Dias;

class Proclamacao implements DiasInterface
{
    public function mensagem()
    {
        return [
            "titulo" => "Olá, feliz dia da proclamação da república!",
            "frase" => "Até ontem, a nossa missão era fundar a república. Hoje, o nosso supremo dever perante a pátria e o mundo é conservá-la e engrandecê- la.",
            "autor" => "Marechal Deodoro da Fonseca"
        ];
    }
}