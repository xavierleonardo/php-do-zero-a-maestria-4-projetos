<?php
$arr = [1, true, 'string', 2, false, 'string', 5, true, 'string', 'Leo'];
$i = count($arr);
while ($i > 0) {
  $item = $arr[$i - 1];
  if(is_string($item)) {
    echo $item . '<br />';
  }

  $i--;
}
