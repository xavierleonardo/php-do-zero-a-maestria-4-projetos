<?php
// condição verdadeira
$a = 'string1';
$b = 18;
$c = 203;
$d = 'string2';

function checkNumber($num) {
  if(is_numeric($num)) {
    $mul = $num * 2;
    if($mul > 100) {
      echo "Mul ($num) maior que 100<br />";
    }
  }
}

checkNumber($a);
checkNumber($b);
checkNumber($c);
checkNumber($d);