<?php
$arr = range(10, 45);
foreach($arr as $num) {
  $sum = $num + 6;
  $msg = $sum > 30 ? ': Número muito alto' : '';
  echo "$sum$msg<br />";
}