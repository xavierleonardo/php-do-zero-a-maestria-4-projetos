<?php
interface Caracteristicas {
  const nome = 'Leonardo';

  public function falar();
}

class Humano implements Caracteristicas {
  public $idade = 29;

  public function falar() {
    echo 'Olá mundo!<br />';
  }

  public function dizerNome() {
    echo 'Meu nome é ' . self::nome . '<br />';
  }
}

$leonardo = new Humano;
$leonardo->falar();
$leonardo->dizerNome();