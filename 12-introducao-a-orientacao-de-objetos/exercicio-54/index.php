<?php
class Pessoa {
  private $nome;
  private $idade;

  static function andar() {
    echo "Anda, rapaz!<br />";
  }
}

Pessoa::andar();
