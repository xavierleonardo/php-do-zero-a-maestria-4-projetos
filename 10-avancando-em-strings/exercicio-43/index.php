<?php
$str = 'carro - navio - helicóptero - barco - jangada';
$arr = explode(' - ', $str);

foreach($arr as $veiculo) {
  echo "$veiculo<br />";
}
