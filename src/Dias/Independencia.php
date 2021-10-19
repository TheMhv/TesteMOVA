<?php

namespace App\Dias;

class Independencia implements DiasInterface
{
    public function mensagem()
    {
        return [
            "titulo" => "Olá, feliz dia da independência do Brasil!",
            "frase" => "É tempo! Independência ou Morte! Estamos separados de Portugal!",
            "autor" => "Dom Pedro I"
        ];
    }
}