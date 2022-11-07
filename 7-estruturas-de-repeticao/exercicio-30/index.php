<?php
// a
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
for($i = 0; $i < count($arr); $i++) {
  $item = $arr[$i];
  if($item % 2 === 0) {
    echo "$item<br />";
  }
}

// b
$arrB = [];
for($i = 1; $i <= 10; $i++) {
  array_push($arrB, $i);
}

print_r($arrB);
echo '<br />';

// c
$arrC = [];
for($i = 10; $i <= 20; $i++) {
  array_push($arrC, $i);
}

for($i = 0; $i < count($arrC); $i++) {
  $item = $arrC[$i];
  if($item % 2 !== 0) {
    echo "$item<br />";
  }
}
