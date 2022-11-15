<?php
// class_exists - get_class_vars - get_class_methods
class Humano {
  public $idade;
  public $nome;
  public $profissao;

  public function falar() {}
  public function andar() {}
}

if (class_exists('Humano')) {
  echo 'A classe existe<br />';
}

if (class_exists('Cachorro')) {
  echo 'A classe existe<br />';
} else {
  echo 'A classe não existe<br />';
}

print_r(get_class_vars('Humano'));
echo '<br />';
print_r(get_class_methods('Humano'));
echo '<br />';

// is_object - get_class - method_exists
class Human {
  public function falar() {
    echo 'Olá';
  }
}

$leonardo = new Human;
$teste = 10;

if(is_object($leonardo)) {
  echo 'É um objeto<br />';
} else {
  echo 'Não é um objeto<br />';
}

if(is_object($teste)) {
  echo 'É um objeto<br />';
} else {
  echo 'Não é um objeto<br />';
}

echo get_class($leonardo) . '<br />';

if(method_exists($leonardo, 'falar')) {
  echo 'Método existe<br />';
} else {
  echo 'Método não existe<br />';
}

if(method_exists($leonardo, 'asd')) {
  echo 'Método existe<br />';
} else {
  echo 'Método não existe<br />';
}

