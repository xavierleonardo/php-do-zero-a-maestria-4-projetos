<?php
// foreach
$leonardo = [
  'nome' => 'Leonardo',
  'idade' => 34,
  'profissao' => 'Programador'
];

$alexia = [
  'nome' => 'Alexia',
  'idade' => 35,
  'profissao' => 'Eng. Civil'
];

foreach ($leonardo as $carac => $value) {
  echo "$carac => $value<br />";
}

foreach ($alexia as $value) {
  echo "$value<br />";
}

// array_reduce
$arr = [1, 2, 4, 19, 234, 12, 34, 5, 12];

function soma($a, $b) {
  return $a + $b;
}

function subtracao($a, $b) {
  return $a - $b;
}

$resultado = array_reduce($arr, 'soma');
echo "$resultado<br />";

$resultado2 = array_reduce($arr, 'subtracao');
echo "$resultado2<br />";

// in_array
$feira = ['banana', 'maçã', 'batata', 'pêra', 'mamão'];

if(in_array('batata', $feira)) {
  echo 'Há o item batata no array<br />';
} else {
  echo 'Não Há batata no array<br />';
}

$b = 'banana';

if(in_array($b, $feira)) {
  echo 'Há o item banana no array<br />';
} else {
  echo 'Não Há banana no array<br />';
}

if(in_array('teste', $feira)) {
  echo 'Há o item teste no array<br />';
} else {
  echo 'Não Há teste no array<br />';
}

// sort / rsort
$nums = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];
sort($nums);
print_r($nums);
echo '<br />';

$nums2 = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];
rsort($nums2);
print_r($nums2);
echo '<br />';

$nomes = ['Maria', 'Aaron', 'João', 'José', 'Leonardo'];
rsort($nomes);
print_r($nomes);
echo '<br />';

// asort / ksort
$assoc = [
  'Leonardo' => 34,
  'Pedro' => 18,
  'Joaquim' => 14,
  'Maria' => 12,
];

asort($assoc);
print_r($assoc);
echo '<br />';

$assoc2 = [
  'Leonardo' => 12,
  'Pedro' => 44,
  'Joaquim' => 14,
  'Maria' => 32,
];

arsort($assoc2);
print_r($assoc2);
echo '<br />';

ksort($assoc2);
print_r($assoc2);
echo '<br />';

krsort($assoc2);
print_r($assoc2);
echo '<br />';
