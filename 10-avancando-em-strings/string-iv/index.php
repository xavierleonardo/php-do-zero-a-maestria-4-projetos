<?php
// inverter string
$palavra = 'Testando';
$palavraInvertida = strrev($palavra);
echo "$palavra $palavraInvertida<br />";

$frase = 'O programador estava com o prazo curto para fazer o sistema';
$fraseInvertida = strrev($frase);

echo $frase . '<br />';
echo $fraseInvertida . '<br />';

// repetir string
$str = 'Teste';
$strRepetida = str_repeat($str, 5);
echo $strRepetida . '<br />';

$frase = 'Testando repetição por frase';
echo str_repeat($frase, 3);
