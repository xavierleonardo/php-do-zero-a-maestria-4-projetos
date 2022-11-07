<?php
$i = 4;
while ($i <= 30) {
  echo $i . '<br />';
  
  $i += 2;
  if ($i === 24) {
    break;
  }
}
