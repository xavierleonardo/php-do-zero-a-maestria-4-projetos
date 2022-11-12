<?php
// explode
$frase = 'Testando o explode';
$fraseArray = explode(' ', $frase);
print_r($fraseArray);
echo '<br />';

$fraseArray2 = explode(',', $frase);
print_r($fraseArray2);
echo '<br />';

$fraseB = 'Carro, Avião, Barco, Navio';
$fraseBArray = explode(', ', $fraseB);
print_r($fraseBArray);
echo '<br />';

for($i = 0; $i < count($fraseBArray); $i++) {
  echo $fraseBArray[$i] . '<br />';
}

// implode
$arr = ['Maçã', 'Pêra', 'Mamão', 'Batata'];
$str = implode(', ', $arr);
echo "$str<br />";

$arr2 = ['Avião', 'Tanque', 'Jipe', 'Metralhadora'];
$str2 = implode(' <-> ', $arr2);
echo "$str2<br />";
