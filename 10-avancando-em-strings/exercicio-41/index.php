<?php
header("Content-type: text/html; charset=utf-8");

$str = 'este item está em promoção';
$strArr = explode(' ', $str);

foreach($strArr as $index=>$word) {
  if($index === count($strArr) - 1) {
    array_pop($strArr);
    array_push($strArr, mb_strtoupper($word));
  }
}

$str = implode(' ', $strArr);
echo ucfirst($str);
