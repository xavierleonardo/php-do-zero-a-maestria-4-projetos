<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cursophp';
$conn = new mysqli($host, $user, $pass, $db);

$nome = 'Suporte de microfone';
$descricao = 'O suporte é novo e foi fabricado na China';

$stmt = $conn->prepare('INSERT INTO itens (nome, descricao) VALUES (?, ?)');
$stmt->bind_param('ss', $nome, $descricao); // s = string, i = integer, d = double

$id = 4;
$stmt = $conn->prepare('SELECT * FROM itens WHERE id > ?');

$stmt->bind_param('i', $id);
$stmt->execute();

$result = $stmt->get_result();
$data = $result->fetch_all();

print_r($data);
echo '<br />';

$id = 6;
$stmt = $conn->prepare('SELECT * FROM itens WHERE id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();

$result = $stmt->get_result();
$item = $result->fetch_row();

print_r($item);
echo '<br />';

$nome = 'teste';
$stmt = $conn->prepare('DELETE FROM itens WHERE nome = ?');
$stmt->bind_param('s', $nome);
$stmt->execute();

$conn->close();
