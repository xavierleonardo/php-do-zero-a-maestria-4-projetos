<?php
$som = 'latido';
$rola = true;
$abanaRabo = true;
$pegaBola = false;

$cachorro = compact('som', 'rola', 'abanaRabo', 'pegaBola');

foreach($cachorro as $caracteristica) {
  echo "$caracteristica<br />";
}