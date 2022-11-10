<?php
function stringify($arr) {
  return implode(', ', $arr);
}

echo stringify(['maçã', 'banana', 'uva', 'carne', 'detergente']);