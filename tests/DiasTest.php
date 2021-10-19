<?php

namespace App\Tests;

use App\Dias;

use PHPUnit\Framework\TestCase;

class DiasTest extends TestCase
{
    public function testeDomingo()
    {
        $dia = new Dias\Domingo();
        $this->assertEquals($dia->mensagem(), [
            "titulo" => "Olá, tenha um ótimo sábado",
            "frase" => "A sabedoria consiste em ordenar bem a nossa própria alma",
            "autor" => "Platão"
        ]);
    }

    public function testeSegunda()
    {
        $dia = new Dias\Segunda();
        $this->assertEquals($dia->mensagem(), [
            "titulo" => "Olá, tenha uma ótima segunda-feira",
            "frase" => "A força não provém da capacidade física. Provém de uma vontade indomável.",
            "autor" => "Mahatma Gandhi"
        ]);
    }

    public function testeTerca()
    {
        $dia = new Dias\Terca();
        $this->assertEquals($dia->mensagem(), [
            "titulo" => "Olá, tenha uma ótima terça-feira",
            "frase" => "A persistência é muito importante. Você não deve desistir, a menos que seja forçado a desistir.",
            "autor" => "Elon Musk"
        ]);
    }

    public function testeQuarta()
    {
        $dia = new Dias\Quarta();
        $this->assertEquals($dia->mensagem(), [
            "titulo" => "Olá, tenha uma ótima quarta-feira",
            "frase" => "Vá até onde a sua vista alcançar e, ao chegar lá, você conseguirá enxergar mais longe.",
            "autor" => "J. P. Morgan"
        ]);
    }

    public function testeQuinta()
    {
        $dia = new Dias\Quinta();
        $this->assertEquals($dia->mensagem(), [
            "titulo" => "Olá, tenha uma ótima quinta-feira",
            "frase" => "Não encontre defeitos, encontre soluções. Qualquer um sabe queixar-se.",
            "autor" => "Henry Ford"
        ]);
    }

    public function testeSexta()
    {
        $dia = new Dias\Sexta();
        $this->assertEquals($dia->mensagem(), [
            "titulo" => "Olá, tenha uma ótima sexta-feira",
            "frase" => "Não se satisfaça apenas em cumprir sua obrigação. Faça mais que sua obrigação. É o cavalo que termina com uma cabeça à frente que vence a corrida.",
            "autor" => "Andrew Carnegie"
        ]);
    }

    public function testeSabado()
    {
        $dia = new Dias\Sabado();
        $this->assertEquals($dia->mensagem(), [
            "titulo" => "Olá, tenha um ótimo sábado",
            "frase" => "Pois quando a sabedoria entrar no teu coração, e o conhecimento for agradável à tua alma, o bom siso te guardará e a inteligência te conservará.",
            "autor" => "Salomão"
        ]);
    }

    public function testeAnoNovo()
    {
        $dia = new Dias\AnoNovo();
        $this->assertEquals($dia->mensagem(), [
            "titulo" => "Olá, tenha feliz ano novo!",
            "frase" => "Não existem sonhos impossíveis para aqueles que realmente acreditam que o poder realizador reside no interior de cada ser humano. Sempre que alguém descobre esse poder, algo antes considerado impossível, se torna realidade.",
            "autor" => "Albert Einstein"
        ]);
    }

    public function testePascoa()
    {
        $dia = new Dias\Pascoa();
        $this->assertEquals($dia->mensagem(), [
            "titulo" => "Olá, tenha uma feliz páscoa!",
            "frase" => "Ninguém acende uma lâmpada e a coloca num lugar onde ficará escondida, ou sob uma tigela. Ao invés disso, coloca-se ela de pé, assim aquele que entrar pode enxergar a luz.",
            "autor" => "Jesus Cristo"
        ]);
    }

    public function testeTiradentes()
    {
        $dia = new Dias\Tiradentes();
        $this->assertEquals($dia->mensagem(), [
            "titulo" => "Olá, feliz dia da inconfidência mineira!",
            "frase" => "Pois seja feita a vontade de Deus. Mil vidas eu tivesse, mil vidas eu daria pela libertação da minha pátria!",
            "autor" => "Tiradentes"
        ]);
    }

    public function testeDiaDoTrabalho()
    {
        $dia = new Dias\DiaDoTrabalho();
        $this->assertEquals($dia->mensagem(), [
            "titulo" => "Olá, feliz dia do trabalho!",
            "frase" => "Que o teu trabalho seja perfeito para que, mesmo depois da tua morte, ele permaneça.",
            "autor" => "Leonardo da Vinci"
        ]);
    }

    public function testeIndependencia()
    {
        $dia = new Dias\Independencia();
        $this->assertEquals($dia->mensagem(), [
            "titulo" => "Olá, feliz dia da independência do Brasil!",
            "frase" => "É tempo! Independência ou Morte! Estamos separados de Portugal!",
            "autor" => "Dom Pedro I"
        ]);
    }

    public function testeProclamacao()
    {
        $dia = new Dias\Proclamacao();
        $this->assertEquals($dia->mensagem(), [
            "titulo" => "Olá, feliz dia da proclamação da república!",
            "frase" => "Até ontem, a nossa missão era fundar a república. Hoje, o nosso supremo dever perante a pátria e o mundo é conservá-la e engrandecê- la.",
            "autor" => "Marechal Deodoro da Fonseca"
        ]);
    }

    public function testeNatal()
    {
        $dia = new Dias\Natal();
        $this->assertEquals($dia->mensagem(), [
            "titulo" => "Olá, tenha um feliz natal!",
            "frase" => "O homem bom, do bom tesouro do seu coração, traz para fora o bom... pois é da abundância do coração que a sua boca fala.",
            "autor" => "Jesus Cristo"
        ]);
    }
}
