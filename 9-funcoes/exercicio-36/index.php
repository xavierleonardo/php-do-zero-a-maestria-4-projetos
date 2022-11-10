<?php
function newArr($arr)
{
  $newArr = [];

  foreach ($arr as $item) {
    if ($item > 7) {
      array_push($newArr, $item);
    }
  }

  return $newArr;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
print_r(newArr($arr));
