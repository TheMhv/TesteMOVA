<?php

namespace App\Dias;

class AnoNovo implements DiasInterface
{
    public function mensagem()
    {
        return [
            "titulo" => "Olá, tenha feliz ano novo!",
            "frase" => "Não existem sonhos impossíveis para aqueles que realmente acreditam que o poder realizador reside no interior de cada ser humano. Sempre que alguém descobre esse poder, algo antes considerado impossível, se torna realidade.",
            "autor" => "Albert Einstein"
        ];
    }
}