<?php
// class
class Pessoa {
  function falar() {
    echo 'Olá, eu sou um objeto<br />';
  }

  function somar($x, $y) {
    echo $x + $y . '<br />';
  }
}

$leonardo = new Pessoa();

$leonardo->falar();
$leonardo->falar();

$joao = new Pessoa();

$joao->falar();

$leonardo->somar(2, 2);
$joao->somar(10, 12);
