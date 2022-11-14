<?php
class Cachorro {
  function latir() {
    echo 'Auau<br />';
  }

  function andar() {
    echo 'O cão andou<br />';
  }
}

$cahorro = new Cachorro();
$gato = new Cachorro();

$cachorro->latir();
$gato->andar();
