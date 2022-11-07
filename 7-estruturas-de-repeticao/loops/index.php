<?php
$i = 0;

$c = 'variável teste';

while ($i < 10) {
  echo "Loop externo $i<br />";

  // segundo contador
  $j = 1;
  while($j <= 5) {
    echo "Loop interno $j<br />";
    echo "$c 2<br />";

    $j++;
  }

  $i++;
}

// continue
$a = 10;
while($a > 0) {
  if ($a ==5 || $a == 7) {
    echo "Pulou a execução $a<br />";
    $a--;
    continue;
  }

  if($a ==2) {
    echo "Terminando o loop break $a<br />";
    break;
  }

  echo "Executando o loop $a<br />";
  $a--;
}
