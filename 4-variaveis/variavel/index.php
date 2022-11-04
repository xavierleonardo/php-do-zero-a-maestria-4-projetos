<?php
$x = 10;
$y =& $x;

echo "$x<br />$y<br />";

$y = 20;

echo "Atribuição após ref 2<br />$x<br />$y<br />";

$nome = 'Leonardo';
$nome2 =& $nome;

echo "$nome<br />$nome2<br />";

$nome2 = 'João';
echo "$nome<br />$nome2<br />";

