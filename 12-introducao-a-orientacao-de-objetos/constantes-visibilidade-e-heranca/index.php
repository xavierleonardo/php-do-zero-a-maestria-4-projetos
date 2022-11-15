<?php
// Constantes
class Humano {
  public const OLHOS = 2;
  public const BRACOS = 2;
  public const PERNAS = 2;

  function mostrarConstante() {
    echo self::BRACOS . '<br />';
  }
}

$leonardo = new Humano;
echo $leonardo::OLHOS . '<br />';
$leonardo->mostrarConstante();

// Visibilidade
class Car {
  public $rodas = 4;
  private $vidro = 'Sem película';
  protected $portas = 4;

  public function getVidro() {
    return $this->vidro;
  }

  public function getPortas() {
    return $this->portas;
  }
}

class Mecanico {
  public function alterarRodas($carro) {
    $carro->rodas = 10;
  }

  public function colocarPelícula($carro, $pelicula) {
    $carro->vidro = $pelicula;
  }
}

$carro = new Car;

echo $carro->rodas . '<br />';

$leonardo = new Mecanico;
$leonardo->alterarRodas($carro);

echo $carro->rodas . '<br />';

// Não pode alterar porque é privado
// $leonardo->colocarPelícula($carro, 'G20');

echo $carro->getVidro() . '<br />';

// $carro->vidro = 'teste';

echo $carro->getPortas() . '<br />';

// Herança
class Human {
  public $idade = 29;

  public function falar(){
    echo 'Olá Mundo!<br />';
  }
  
  private function gritar(){
    echo 'PHP É MUITO BOM!<br />';
  }
  
  public function acessaGritar() {
    $this->gritar();
  }
  
  protected function falarBaixinho() {
    echo 'lalala<br />';
  }
  
  public function acessaFalarBaixinho() {
    $this->falarBaixinho();
  }
}

class Programador extends Human {
  public function falarBaixinhoProgramador() {
    $this->falarBaixinho();
  }
}

$ze = new Human;
$ze->falar();
$ze->acessaGritar();
$ze->acessaFalarBaixinho();

$leonardo = new Programador;

echo $leonardo->idade . '<br />';
$leonardo->falar();
$leonardo->acessaGritar();
$leonardo->falarBaixinhoProgramador();