<?php
require 'vendor/autoload.php';

$dia = new App\DiasClass();
$diaDaSemana = $dia->setDia();
$mensagem = $dia->retornaMensagem();

include_once('view.php');
?>