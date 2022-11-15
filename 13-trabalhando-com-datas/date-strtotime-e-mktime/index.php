<?php
// date
$d = date('d/m/y'); // day/month/year
echo $d . '<br />';

$d2 = date('d, M - Y');
echo $d2 . '<br />';

$d3 = date('d/m/Y');
echo $d3 . '<br />';

$d4 = date('l, F - Y');
echo $d4 . '<br />';
echo '----------------------------------------<br />';

// strtotime
$cincoDias = strtotime('5 days');
echo $cincoDias . '<br />';

$dezDias = strtotime('10 days');
echo $dezDias . '<br />';

$dataAtualMais5 = date('d/m/y', $cincoDias);
echo $dataAtualMais5 . '<br />';

$dataAtualMais10 = date('d/m/y', $dezDias);
echo $dataAtualMais10 . '<br />';

$doisMeses = strtotime('2 months');
echo $doisMeses . '<br />';

$dataAtualMaisDoisMeses = date('d/m/y', $doisMeses);
echo $dataAtualMaisDoisMeses . '<br />';

$dozeAnos = strtotime('12 years');
echo date('d/m/y', $dozeAnos) . '<br />';
echo '-----------------------------------------<br />';

// mktime
$dataNascimento = mktime(05, 30, 00, 05, 12, 1988);
echo $dataNascimento . '<br />';

$dataNascimentoFormatada = date('d/m/Y', $dataNascimento);
echo $dataNascimentoFormatada . '<br />';

$dataEspecifica = mktime(10, 20, 11, 04, 28, 2041);
echo $dataEspecifica . '<br />';

$dataFuturaFormatada = date('d/m/Y', $dataEspecifica);
echo $dataFuturaFormatada . '<br />';
