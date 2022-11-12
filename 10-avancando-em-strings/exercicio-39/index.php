<?php
function caracteristicas($caracteristicas)
{
  $caros = [];
  foreach ($caracteristicas as $item) {
    if ($item['preco'] > 10) {
      array_push($caros, $item);
    }
  }

  return $caros;
}

$produtos = [['nome' => 'carro', 'preco' => 50000], ['nome' => 'sofá', 'preco' => 500], ['nome' => 'cafeteira', 'preco' => 150]];
print_r(caracteristicas($produtos));
