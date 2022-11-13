<?php
// extract
$arr = [
  'cor' => 'vermelho',
  'forma' => 'retangular',
  'material' => 'aço'
];

extract($arr);
echo "$cor<br />";
echo "$forma<br />";
echo "$material<br />";

$nome = 'Leonardo';
$pessoa = [
  'nome' => 'João',
  'idade' => 34
];

echo "$nome<br />";
extract($pessoa);
echo "$nome<br />";
echo "$idade<br />";

// compact
$marca = 'BMW';
$motor = 3.0;
$tetoSolar = true;
$portas = 4;

$carro = compact('marca', 'motor', 'tetoSolar', 'portas');
print_r($carro);
