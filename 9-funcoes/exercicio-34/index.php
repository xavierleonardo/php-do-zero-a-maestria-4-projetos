<?php
function parImpar($num) {
  if ($num % 2 === 0) {
    echo "$num é par<br />";
  } else {
    echo "$num é ímpar<br />";
  }
}

parImpar(6);
parImpar(7);