<?php
// print
print('Imprimindo algo com print<br />');

$carro = 'BMW';
print("Aquele carro é da marca $carro<br />");

// printf
$nome = 'Leonardo';
printf("O nome é %s<br />", $nome); // %s -> string

$n = 10;
printf("O número é %d e o outro é %d<br />", $n, 150); // %d -> int/dígito

$n = 10;
printf("A temperatura atual é %.1f<br />", 12.58); // %f -> float