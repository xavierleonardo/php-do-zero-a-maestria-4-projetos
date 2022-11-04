<?php
function comparaIgualdade($a, $b) {
  if($a == $b) {
    return 'verdadeiro';
  } else {
    return 'falso';
  }
}

echo comparaIgualdade(3, 3) . '<br />';
echo comparaIgualdade(3, 4) . '<br />';