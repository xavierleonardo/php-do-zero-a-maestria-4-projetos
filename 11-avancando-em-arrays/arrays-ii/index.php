<?php
// array_reverse
$arr = [1, 2, 3, 4, 5];
$arrRev = array_reverse($arr);

print_r($arr);
echo '<br />';
print_r($arrRev);
echo '<br />';

$arr2 = ['Leonardo', 12, true, [1, 2]];
$arr2Rev = array_reverse($arr2);
print_r($arr2Rev);
echo "<br />---------------------------------------------------<br />";

// shuffle
$range = range(1, 20);

shuffle($range);
print_r($range);
echo '<br />';

shuffle($range);
print_r($range);
echo "<br />---------------------------------------------------<br />";

// array_sum
$nums = [2, 4, 34, 34.1, 324, 12, 34];
$soma = array_sum($nums);

print_r($nums);
echo '<br />';
echo "$soma<br />";
echo "<br />---------------------------------------------------<br />";

// array_merge
$arr1 = [1, 2, 3];
$arr2 = [10, 40, 90];
$arr3 = [2.1, 44.5, 43.3];
$arr4 = ['asd', 'as', 'a'];
$mergedArr = array_merge($arr1, $arr2, $arr3, $arr4, [0, 1]);

print_r($mergedArr);
echo "<br />---------------------------------------------------<br />";

// array_diff
$array1 = [1, 2, 3];
$array2 = [2, 4, 6];

$diff = array_diff($array1, $array2);

print_r($diff);
echo '<br />';

$diff2 = array_diff($array2, $array1);

print_r($diff2);
echo '<br />';

$array3 = [4];
$diff3 = array_diff($array2, $array1, $array3);

print_r($diff3);
echo '<br />';
