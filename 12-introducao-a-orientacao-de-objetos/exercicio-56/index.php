<?php
class Humano {
  function falar() {
    echo 'Oie<br />';
  }
}

class Professor extends Humano {}

$prof = new Professor;
$prof->falar();
