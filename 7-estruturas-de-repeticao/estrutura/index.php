<?php
// do while
$teste = 'Leonardo';

$j = 0;
do {
  echo "Testando do while $j<br />";

  if ($j == 2) {
    echo "$teste<br />";
  }

  $j++;
} while ($j < 10);

$i = 10;
do {
  echo "Testando do while 2 $i<br />";

  if ($i == 2) {
    echo "$teste<br />";
  }

  $i--;
} while ($i > 0);

// for
$nome = 'Leonardo';

// CONTADOR; CONDIÇÃO; INCREMENTO/DECREMENTO
for ($i = 0; $i < 10; $i++) {
  if ($i == 4) {
    echo "$nome<br />";
  }

  if ($i == 8) {
    break;
  }
  echo "Testando for $i<br />";
}
