<?php
// condição verdadeira
$a = 'string';
$b = 18;
$c = true;

echo is_int($a) ? 'É inteiro<br />' : 'Não é inteiro<br />';
echo is_int($b) ? 'É inteiro<br />' : 'Não é inteiro<br />';
echo is_int($c) ? 'É inteiro<br />' : 'Não é inteiro<br />';

$d = 90;

if($d > 80) {
  echo 'Pesado demais<br />';
} else {
  echo 'Dentro do peso permitido<br />';
}