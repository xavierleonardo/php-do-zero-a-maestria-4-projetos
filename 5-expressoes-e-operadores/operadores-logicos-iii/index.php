<?php
$a = (int) '12';
echo $a . '<br />';
echo $a + 10 . '<br />';

if($a === 12) {
  echo 'A é idêntico a 12<br/>';
}

$b = (float) '3.14843824';
if($b === 3.14843824) {
  echo 'B é idêntico a 3.14<br/>';
}

$c = (string) 34;
if($c === '34') {
  echo 'C é idêntico a 34<br/>';
}
