<?php
$multiArr = [range(1, 4), range(5, 8), range(9, 12)];
foreach($multiArr as $index=>$arr) {
  echo "Elemento de índice: $index<br />";
  
  foreach($arr as $item) {
    echo "$item<br />";
  }
}