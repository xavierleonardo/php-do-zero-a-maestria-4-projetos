<?php
// maior
$a = 4;
$b = 5;
$c = 6;
$d = 6;
$e = 7;

if($a > $b) {
  echo 'A é maior que B<br />';
}

if($b > $a) {
  echo 'B é maior que A<br />';
}

if($d >= $c) {
  echo 'D é maior ou igual a C<br />';
}

if($d >= $a) {
  echo 'D é maior ou igual a A<br />';
}

if($d >= $e) {
  echo 'D é maior ou igual a E<br />';
}

// menor
if(4 < 12) {
  echo '4 é menor que 12<br />';
}

if(24 < 12) {
  echo '24 é menor que 12<br />';
}

if(12 <= 12) {
  echo '12 é menor ou igual a 12<br />';
}

$a = 5;
$b = 18;

if($a <= $b) {
  echo 'A é menor ou igual a B<br />';
}

if($b <= $a) {
  echo 'B é menor ou igual a A<br />';
}

if($b <= 42) {
  echo 'B é menor ou igual a 42<br />';
}
