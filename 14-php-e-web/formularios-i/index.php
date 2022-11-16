<?php
$method = $_SERVER['REQUEST_METHOD'];

if (isset($_POST['nome'])) {
  $nome = $_POST['nome'];
}

$usuario = [
  'nome' => 'Leonardo',
  'idade' => 34,
  'profissao' => 'Programador',
];

if ($usuario) {
  extract($usuario);
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
  <!-- GET -->
  <section>
    <form action="processamento.php" method="GET">
      <fieldset>
        <div>
          <input type="text" name="nome" placeholder="Preencha seu nome">
        </div>
        <div>
          <input type="number" name="idade" placeholder="Preencha a sua idade">
        </div>
        <div>
          <input type="submit" value="Enviar">
        </div>
      </fieldset>
    </form>
  </section>

  <!-- POST -->
  <section>
    <form action="cadastro.php" method="POST">
      <fieldset>
        <div>
          <input type="text" name="marca" placeholder="Marca do carro">
        </div>
        <div>
          <input type="number" name="preco" placeholder="Preço do carro">
        </div>
        <fieldset>
          <div>
            <input type="checkbox" name="opcionais[]" value="Teto solar"> Teto solar
          </div>
          <div>
            <input type="checkbox" name="opcionais[]" value="Película"> Película
          </div>
          <div>
            <input type="checkbox" name="opcionais[]" value="Blindado"> Blindado
          </div>
        </fieldset>
        <div>
          <input type="submit" value="Enviar">
        </div>
      </fieldset>
    </form>
  </section>

  <!-- AUTOPROCESSAMENTO -->
  <?php
  if ($method === 'GET') :
  ?>

    <section>
      <form action="index.php" method="POST">
        <fieldset>
          <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
          </div>
          <div>
            <input type="submit" value="Enviar">
          </div>
        </fieldset>
      </form>
    </section>

  <?php
  else :
  ?>

    <h1>O seu nome é <?= $nome ?></h1>

  <?php
  endif;
  ?>

  <!-- AUTOPREENCHIMENTO -->
  <section>
    <form action="">
      <fieldset>
        <div>
          <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
        </div>
        <div>
          <input type="number" name="idade" placeholder="Digite sua idade" value="<?= $idade ?>">
        </div>
        <div>
          <input type="text" name="profissao" placeholder="Digite sua profissao" value="<?= $profissao ?>">
        </div>
      </fieldset>
    </form>
  </section>
</body>

</html>