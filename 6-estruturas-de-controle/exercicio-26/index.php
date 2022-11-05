<?php
$vel = 60;
if($vel < 40) {
  echo 'Velocidade correta<br />';
} else if($vel == 40) {
  echo 'Tomar cuidado<br />';
} else {
  echo 'Multa!<br />';
}