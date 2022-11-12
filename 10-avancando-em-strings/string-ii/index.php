<?php
// trim
$str1 = '       Leonardo     ';
echo "Esta é a string 1: $str1.<br />";

$str1Limpa = trim($str1);
echo "Esta é a string 1: $str1Limpa.<br />";

$str1Limpa2 = rtrim($str1);
echo "Esta é a string 1: $str1Limpa2.<br />";

// case
$str = 'esta string está em caixa baixa<br />';
echo strtoupper($str);

$str2 = 'E ESTA AQUI EM CAIXA ALTA<br />';
echo strtolower($str2);

// case de palavras
$frase = 'testando o case de uma palavra<br />';
$frase2 = 'Testando o case de uma palavra<br />';
$frase3 = 'testando o case de uma palavra<br />';
echo ucfirst($frase); // Primeira letra em maiúsculo
echo ucfirst($frase2); // Primeira letra em maiúsculo

echo ucwords($frase3); // Todas as palavras com as iniciais maiúsculas
echo ucwords($frase2); // Todas as palavras com as iniciais maiúsculas