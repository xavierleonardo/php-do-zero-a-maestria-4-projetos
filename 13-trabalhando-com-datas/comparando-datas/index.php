<?php
$dataA = new DateTime();
$dataB = new DateTime();
$dataC = new DateTime();

$dataB->setDate(2022, 10, 10);
$dataC->setDate(2022, 10, 10);

$dataB->setTime(01, 10, 10);
$dataC->setTime(01, 10, 10);

if($dataB > $dataA) {
  echo 'A data b é maior que a data a<br />';
}

if($dataB < $dataA) {
  echo 'A data a é maior que a data b<br />';
}

if($dataB == $dataC) {
  echo 'A data b é igual a data c<br />';
}

