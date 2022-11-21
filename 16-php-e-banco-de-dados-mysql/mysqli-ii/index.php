<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cursophp';
$conn = new mysqli($host, $user, $pass, $db);

// CREATE/DROP
$q = 'CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))';
$conn->query($q);

$q = 'DROP TABLE teste';
$conn->query($q);

// SELECT 
$q = "SELECT * FROM itens";;
$result = $conn->query($q);

// um resultado
$item = $result->fetch_assoc();

// todos resultados
$items = $result->fetch_all();

print_r($items);
$conn->close();

// INSERT
$table = 'itens';
$nome = 'Xícara';
$descricao = 'É uma xícara usada de cor rosa';

$q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";
// $conn->query($q);