<?php
class Carro {
  public $velocidade_maxima;

  function getVelocidadeMaxima() {
    echo $this->velocidade_maxima . '<br />';
  }

  function setVelocidadeMaxima($velocidadeMaxima) {
    $this->velocidade_maxima = $velocidadeMaxima;
  }
}

$carro = new Carro;
$carro->setVelocidadeMaxima(100);
$carro->getVelocidadeMaxima();
