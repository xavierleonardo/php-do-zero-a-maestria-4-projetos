<?php
$idades = [
  'Leonardo' => 34,
  'Pedro' => 18,
  'Joaquim' => 14,
  'Maria' => 12,
];
?>

<body>
  <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>idade</th>
      </tr>
    </thead>
    <tbody>

      <?php
      foreach ($idades as $pessoa => $idade) {
        echo "<tr><td>$pessoa</td><td>$idade</td></tr>";
      }
      ?>

    </tbody>
  </table>
</body>