<?php
$arr = [
  [1, 2, 3],
  [2, 4, 6]
];
print_r($arr);
echo '<br />';

echo $arr[0][1] . '<br />'; // acessando primeiro array e segundo elemento
echo $arr[1][2] . '<br />'; // acessando segundi array e último elemento

echo count($arr);
echo count($arr[0]);
