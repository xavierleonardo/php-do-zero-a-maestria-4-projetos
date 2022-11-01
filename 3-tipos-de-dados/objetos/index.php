<?php
class Pessoa {
  function falar() {
    echo 'Olá pessoal!';
  }
}

$leonardo = new Pessoa();
$leonardo->nome = 'Leonardo';

echo $leonardo->nome;
echo '<br />';
$leonardo->falar();