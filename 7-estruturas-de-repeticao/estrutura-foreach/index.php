<?php
$a = 10;

$nomes = ['Leonardo', 'João', 'Pedro', 'Maria'];
foreach($nomes as $nome) {
  echo "O nome do índice atual é $nome<br />";

  if($nome == 'Leonardo') {
    echo "Opa $a<br />";
  }
}
