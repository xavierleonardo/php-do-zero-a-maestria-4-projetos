<?php
// OR
if (5 > 2 || 3 < 4) { // true ou true
  echo 'Entrou no if 1<br />';
}

if (5 > 2 || 30 < 4) { // true ou false
  echo 'Entrou no if 2<br />';
}

if (5 > 20 || 3 < 4) { // false ou true
  echo 'Entrou no if 3<br />';
}

if (5 > 20 || 30 < 4) { // false ou false
  echo 'Entrou no if 4<br />';
}

$a = 10;
$b = 20;
$c = 30;
$d = 40;

if ($a > $b || $d > $c) { // false ou true
  echo 'A operação 5 é verdadeira<br />';
}

if (($a > $b || $d > $c) && $c < $d) { // false ou true
  echo 'A operação 6 é verdadeira<br />';
}

if (($a > $b || $d > $c) || $c < $d) {
  echo 'A operação 7 é verdadeira<br />';
}

// NOT
if (!(5 > 2)) {
  echo 'A operação 1 é verdadeira<br />';
}

if (!(5 > 20)) {
  echo 'A operação 2 é verdadeira<br />';
}

if (!($a >= $b)) {
  echo 'A operação 3 é verdadeira<br />';
}
