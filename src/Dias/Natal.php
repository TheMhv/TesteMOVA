<?php

namespace App\Dias;

class Natal implements DiasInterface
{
    public function mensagem()
    {
        return [
            "titulo" => "Olá, tenha um feliz natal!",
            "frase" => "O homem bom, do bom tesouro do seu coração, traz para fora o bom... pois é da abundância do coração que a sua boca fala.",
            "autor" => "Jesus Cristo"
        ];
    }
}