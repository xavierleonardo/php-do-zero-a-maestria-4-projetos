<?php
$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
while(count($arr) > 0) {
  $item = $arr[0];
  array_shift($arr);

  if($item === 30 || $item === 40) {
    continue;
  }

  echo "$item<br />";
}
