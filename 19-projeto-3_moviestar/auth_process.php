<?php

require_once("globals.php");
require_once("db.php");
require_once("models/User.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");

$message = new Message;

$userDao = new UserDAO($conn);

// Resgata o tipo do formulário
$type = filter_input(INPUT_POST, "type");

// Verificação do tipo de formulário
if ($type === "register") {
  $name = filter_input(INPUT_POST, "name");
  $lastname = filter_input(INPUT_POST, "lastname");
  $email = filter_input(INPUT_POST, "email");
  $password = filter_input(INPUT_POST, "password");
  $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

  // Verificação de dados mínimos 
  if ($name && $lastname && $email && $password) {
    // Verificar se as senhas batem
    if ($password === $confirmpassword) {
      // Verificar se o e-mail já está cadastrado no sistema
      if (!$userDao->findByEmail($email)) {
        // Criação de token e senha
        $userToken = User::generateToken();
        $finalPassword = User::generatePassword($password);
        $user = new User($name, $lastname, $email, $finalPassword, $userToken);

        $userDao->create($user, true);
      } else {
        // Enviar uma msg de erro, usuário já existe
        Message::setMessage("Usuário já cadastrado, tente outro e-mail.", "error", "back");
        redirect($_SERVER['HTTP_REFERER']);
      }
    } else {
      // Enviar uma msg de erro, de senhas não batem
      Message::setMessage("As senhas não são iguais.", "error");
      redirect($_SERVER['HTTP_REFERER']);
    }
  } else {
    // Enviar uma msg de erro, de dados faltantes
    Message::setMessage("Por favor, preencha todos os campos.", "error");
    redirect($_SERVER['HTTP_REFERER']);
  }
} else if ($type === "login") {

  $email = filter_input(INPUT_POST, "email");
  $password = filter_input(INPUT_POST, "password");

  // Tenta autenticar usuário
  if ($userDao->authenticateUser($email, $password)) {

    Message::setMessage("Seja bem-vindo!", "success", "editprofile.php");

    // Redireciona o usuário, caso não conseguir autenticar
  } else {

    Message::setMessage("Usuário e/ou senha incorretos.", "error", "back");
  }
} else {

  Message::setMessage("Informações inválidas!", "error", "index.php");
}
