<?php
$count = 0;
$str = str_split("O rato roeu a roupa do rei de Roma");
foreach($str as $letra) {
  if($letra === 'a') {
    $count++;
  }
}

echo $count;
