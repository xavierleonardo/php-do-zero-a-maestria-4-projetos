<?php
$x = 0;
while ($x < 10) {
  echo "O X é $x<br />";

  if($x === 5) {
    echo 'Terminando o loop<br />';
    break;
  }
  $x++;
}

Echo 'Saiu do loop<br />';
