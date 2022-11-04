<?php
if (5 == '5') {
  echo '5 é 5 1<br />';
}

// op de identico
if (5 === '5') {
  echo '5 é 5 2<br />';
}

if (5 === 5) {
  echo '5 é 5 3<br />';
}

if (3 === 'teste') {
  echo 'É igual<br />';
}

$a = 4;
$b = 4;
$c = '4';

if ($a === $b) {
  echo 'A é igual a B<br />';
}

if ($a === $c) {
  echo 'A é igual a C<br />';
}

// diferença
$a = 3;
$b = 4;

if ($a != $b) {
  echo 'Testando diferença 1<br />';
}

if ($a != 3) {
  echo 'Testando diferença 2<br />';
}

if (false != 'teste') {
  echo 'Testando diferença 3<br />';
}

if (3 != '4') {
  echo 'Testando diferença 4<br />';
}

// não identico a
$a = 1;
$b = '1';

if($a != $b) {
  echo 'A é diferente de B 1<br />';
}

if($a !== $b) {
  echo 'A é diferente de B 2<br />';
}

if(1 !== 2) {
  echo 'Não é idêntico 1<br />';
}

if(1 !== '1') {
  echo 'Não é idêntico 2<br />';
}

if([] !== 'abc') {
  echo 'Não é idêntico 3<br />';
}
