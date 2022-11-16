<?php
// cookie
setcookie('nome', 'Leonardo', time() + 3600);

if (isset($_COOKIE['nome'])) {
  $nome = $_COOKIE['nome'];
}

// session
session_start();
$_SESSION['nome'] = 'Leonardo';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- cookie -->
  <h1>Olá Mundo!</h1>
  <?php if ($nome !== '') : ?>
    <p>Seja bem-vindo <?= $nome ?></p>
  <?php endif ?>

  <!-- cookie -->
  <h1>Olá Session</h1>
</body>

</html>