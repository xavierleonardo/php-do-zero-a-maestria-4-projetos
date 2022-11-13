<?php
// array_keys / array_values
$carro = [
  'marca'=>'BMW',
  'motor'=>2.4,
  'teto_solar'=>true,
  'cambio'=>'Manual',
  'portas'=>4,
];

$chaves = array_keys($carro);
print_r($chaves);
echo '<br />';

$valores = array_values($carro);
print_r($valores);
echo '<br />';

// array_keys_exists / isset
$arr = [
  'nome'=>'Leonardo',
  'idade'=>34,
];

if(array_key_exists('nome', $arr)) {
  echo 'A chave existe!<br />';
} else {
  echo 'A chave não existe!<br />';
}

if(array_key_exists('profissao', $arr)) {
  echo 'A chave existe!<br />';
} else {
  echo 'A chave não existe!<br />';
}

if(isset($arr['nome'])) {
  echo 'A chave existe!<br />';
} else {
  echo 'A chave não existe!<br />';
}

if(isset($arr['teste'])) {
  echo 'A chave existe!<br />';
} else {
  echo 'A chave não existe!<br />';
}

if(isset($x)) {
  echo 'A var existe! ISSET<br />';
} else {
  echo 'A var não existe! ISSET<br />';
}

