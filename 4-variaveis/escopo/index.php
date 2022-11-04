<?php
// escopo local
$x = 10;
echo "$x global<br />";

function teste() {
  $x = 5;
  echo "$x local<br />";
}

teste();
echo "$x global<br />";
teste();

function testando() {
  $x = 12;
  echo "$x local 2<br />";
}

$x = 99;

testando();
teste();
echo "$x global<br />";

// escopo global
$teste = 'asd';
echo "$teste global 1<br />";

if(5 > 2) {
  $teste = "dsa";
  echo "$teste if<br />";
}

echo "$teste global 2<br />";

function funcao() {
  $teste = 'xsxs';
  echo "$teste local<br />";
}

funcao();

function funcaoGlobal() {
  global $teste;
  $teste = 2;
  echo "$teste global funcao<br />";
}

funcaoGlobal();
echo "$teste global 3<br />";

// variável estática
function test() {
  $a = 0;
  $a++;

  echo "$a <br />";
}

test();
test();
test();

function testStatic() {
  static $a = 0;
  $a++;

  echo "$a <br />";
}

testStatic();
testStatic();
testStatic();

// parâmetros de função
function soma($a, $b) {
  echo $a + $b;
  echo '<br />';
}

soma(2, 4);
soma(6, 8);
soma(10, 10);