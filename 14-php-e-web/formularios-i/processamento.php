<?php
if (isset($_GET['nome'])) {
  $nome = $_GET['nome'];
  $idade = $_GET['idade'];
} else {
  $nome = 'Padrão';
  $idade = 'Padrão';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>O seu nome é <?= $nome ?>, e você tem <?= $idade ?> anos</h1>
</body>

</html>