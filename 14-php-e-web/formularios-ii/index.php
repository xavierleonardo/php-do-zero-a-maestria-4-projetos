<?php
// input name list (array)
if (isset($_POST['ingredientes'])) {
  $ingredientes = $_POST['ingredientes'];
  print_r($ingredientes);
}

// file
if (isset($_FILES)) {
  print_r($_FILES);
}

// validação
$validacoes = [
  'name' => '',
  'email' => '',
  'senha' => '',
  'confirmacao' => ''
];
if (count($_POST) > 0) {

  if ($_POST['name'] === '') {
    $validacoes['name'] = 'Por favor, preencha o nome do usuário!';
  }

  if ($_POST['email'] === '') {
    $validacoes['email'] = 'Por favor, preencha o email do usuário!';
  }

  if ($_POST['senha'] === '') {
    $validacoes['senha'] = 'Por favor, preencha a senha do usuário!';
  }
  
  if ($_POST['confirmacao'] === '') {
    $validacoes['confirmacao'] = 'Por favor, confirme a senha do usuário!';
  }
  
  if ($_POST['senha'] !== $_POST['confirmacao']) {
    $validacoes['senha'] = 'As senhas devem ser iguais!';
    $validacoes['confirmacao'] = 'As senhas devem ser iguais!';
    }
}
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
  <!-- input name list (array) -->
  <form action="index.php" method="POST">
    <div>
      <input type="checkbox" name="ingredientes[]" value="Tomate"> Tomate
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" value="Abóbora"> Abóbora
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" value="Feijão"> Feijão
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" value="Alface"> Alface
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" value="Cebola"> Cebola
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>

  <!-- file -->
  <form action="index.php" method="POST" enctype="multipart/form-data">
    <div>
      <input type="file" name="imagem">
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>

  <!-- validação -->
  <form action="index.php" method="POST">
    <div>
      <input type="text" name="name" placeholder="Digite o seu nome">
    </div>
    <div>
      <span style="color: red;"><?= $validacoes['name'] ?></span>
    </div>
    <div>
      <input type="email" name="email" placeholder="Digite o seu e-mail">
    </div>
    <div>
      <span style="color: red;"><?= $validacoes['email'] ?></span>
    </div>
    <div>
      <input type="pasword" name="senha" placeholder="Digite a sua senha">
    </div>
    <div>
      <span style="color: red;"><?= $validacoes['senha'] ?></span>
    </div>
    <div>
      <input type="pasword" name="confirmacao" placeholder="Confirme a sua senha">
    </div>
    <div>
      <span style="color: red;"><?= $validacoes['confirmacao'] ?></span>
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>

</html>