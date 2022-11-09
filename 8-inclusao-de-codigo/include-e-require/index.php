<!-- include -->
<?php
include 'include.php';
?>

<p>Após o include</p>
<p>Imprimindo c <?php echo $c; ?></p>

<!-- require -->
<p>Testando</p>

<?php
require 'require.php'
?>

<p>Arquivo do include</p>

<?php
require 'arquivos/funcao.php'
?>

<!-- include_once e require_once -->
<?php
// Arquivos que não existem
// include_once 'teste.php'

// Arquivos que existem
include_once 'teste2.php';
include_once 'teste2.php';

// Arquivo que não existe
// require_once 'teste.php';

require_once 'teste3.php';
require_once 'teste3.php';
?>

<p>Testando código</p>