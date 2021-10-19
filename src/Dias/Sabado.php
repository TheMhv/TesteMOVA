<?php

namespace App\Dias;

class Sabado implements DiasInterface
{
    public function mensagem()
    {
        return [
            "titulo" => "Olá, tenha um ótimo sábado",
            "frase" => "Pois quando a sabedoria entrar no teu coração, e o conhecimento for agradável à tua alma, o bom siso te guardará e a inteligência te conservará.",
            "autor" => "Salomão"
        ];
    }
}