<?php
echo 5 / 2 . '<br />';

if(is_float(5 / 2)) {
  echo 'É float<br/>';
}

echo 2 . 3 . '<br />';

if(is_string(2 . 3)) {
  echo 'É string<br />';
}

$nome = 'Leonardo';
$sobrenome = 'Xavier';
$nomeCompleto = $nome . ' ' . $sobrenome;

echo $nomeCompleto . '<br />';