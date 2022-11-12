<?php
// strpos
$str = 'Estamos testando o método strpos, com o strpos podemos encontrar strings';
$testeEncontrar = strpos($str, 'strpos');
echo "$testeEncontrar<br />";

$testeEncontrar2 = strpos($str, 'java');
echo "$testeEncontrar2<br />";

if($testeEncontrar2 === false) {
  echo 'Palavra não encontrada<br />';
}

$palavra = 'com';
$testeEncontrar3 = strpos($str, $palavra);
echo "$testeEncontrar3<br />";

$palavra2 = 'to';
$testeEncontrar4 = strpos($str, $palavra2);
echo "$testeEncontrar4<br />";

// strrpos
$strr = 'Testando encontro da palavra teste, em uma string que tem teste';
$teste = strrpos($strr, 'teste');
echo "$teste<br />";

$teste2 = strpos($strr, 'teste');
echo "$teste2<br />";

if(strrpos($strr, 'Java') === false) {
  echo 'A palavra Java não foi encontrada<br />';
}

$p = substr($strr, strpos($strr, 'teste'), 5);
echo "$p<br />";

// strstr
$strstr = 'Testando o resto da string, pra ver se dá certo';
$resto = strstr($strstr, 'resto');
echo "$resto<br />";

$s = 'string';
$resto2 = strstr($strstr, $s);
echo "$resto2<br />";

if(strstr($strstr, '.NET') === false) {
  echo 'Não encontramos a string!<br />';
}