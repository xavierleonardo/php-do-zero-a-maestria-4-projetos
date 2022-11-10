<?php
// a
function funcao() {
  $a = 1;
  $b = 2;
  $c = 3;

  return $a * $b * $c;
}

echo funcao() . '<br />';

// b
function nome() {
  $nome = 'Leonardo';
  $sobrenome = 'Xavier';

  return "$nome $sobrenome";
}

echo nome();