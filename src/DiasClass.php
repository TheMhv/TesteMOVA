<?php

namespace App;

class DiasClass
{
    public function setDia()
    {
        $hoje = strtotime('today');
        $diasDaSemana = ['Domingo', 'Segunda', 'Terca', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];
        $classe = $diasDaSemana[date('w', $hoje)];

        switch ($hoje) {
            case strtotime("1 February"):
                $classe = 'AnoNovo';
                break;
            case easter_date(date('Y')):
                $classe = 'Pascoa';
                break;
            case strtotime("21 April"):
                $classe = 'Tiradentes';
                break;
            case strtotime("1 May"):
                $classe = 'DiaDoTrabalho';
                break;
            case strtotime("7 September"):
                $classe = 'Independencia';
                break;
            case strtotime("15 November"):
                $classe = 'Proclamacao';
                break;
            case strtotime("25 December"):
                $classe = 'Natal';
                break;
        }

        $classe = "App\\Dias\\".$classe;
        $this->DiasInterface = new $classe();
    }

    public function retornaMensagem()
    {
        return $this->DiasInterface->mensagem();
    }    
}
