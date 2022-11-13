<?php
$pontos = [
  'Leonardo' => 34,
  'Pedro' => 18,
  'Joaquim' => 14,
  'Maria' => 12,
];
arsort($pontos);
?>

<ol>

  <?php
  foreach ($pontos as $nome => $score) {
  ?>

    <li><?= $nome ?> - <?= $score ?></li>

  <?php

  }

  ?>

</ol>