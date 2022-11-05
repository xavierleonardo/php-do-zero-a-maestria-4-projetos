<?php
// +=
$a = 0;
$a += 10; // $a = $a + 10
echo $a . '<br />';

// -=
$b = 0;
$b -= 5; // $b = $b - 5
echo $b . '<br />';

// *=
$c = 5;
$c *= 2; // $c = $c * @
echo $c . '<br />';

// /=
$d = 5;
$d *= 2; // $d = $d / 2
echo $d . '<br />';

// %=
$e = 5;
$e %= 2; // $e = $e % 2
echo $e . '<br />';

// utilização com variáveis
$f = 10;
$x = 20;
$f += $x; // $f = $f + $x
echo $f . '<br />';

// ternário

// true
echo 20 > 10 ? 'Deu true<br />' : 'Deu false<br />';

// false
echo 20 > 50 ? 'Deu true<br />' : 'Deu false<br />';

$a = 10;
$b = 5;

echo $a > $b ? 'Deu true<br />' : 'Deu false<br />';
echo $a === $b ? 'Deu true<br />' : 'Deu false<br />';
echo $a === $b && 10 > 5 ? 'Deu true<br />' : 'Deu false<br />';
