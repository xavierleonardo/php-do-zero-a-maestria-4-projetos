<?php
$host = 'localhost';
$db = 'cursophp';
$user = 'root';
$pass = '';
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$nome = 'Suporte monitor';
$descricao = 'O suporte está novo e na caixa ainda.';

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':descricao', $descricao);
// $stmt->execute();

$id = 5;
$nome = 'Teclado Microsoft';
$descricao = 'Este teclado é novo e está na caixa.';

$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':id', $id);
$stmt->execute();

$id = 5;
$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($data);
echo '<br />';

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($itens);
