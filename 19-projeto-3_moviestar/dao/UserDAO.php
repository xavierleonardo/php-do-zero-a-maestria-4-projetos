<?php
require_once('models/User.php');

class UserDAO implements UserDAOInterface {
  public function __construct(private PDO $conn, private string $url)
  {
    $this->conn = $conn;
    $this->url = $url;
  }

  public function buildUser($data) {
    $user = new User;
    $user->id = $data['id'];
    $user->name = $data['name'];
    $user->lastname = $data['lastname'];
    $user->email = $data['email'];
    $user->password = $data['password'];
    $user->image = $data['image'];
    $user->bio = $data['bio'];
    $user->token = $data['token'];

    return $user;
  }

  public function create(User $user, $authUser = false) {}

  public function update(User $user) {}

  public function findByToken($token) {}

  public function verifyToken($protected = false) {}

  public function setTokenToSession($token, $redirect = true) {}

  public function authenticateUser($email, $password) {}

  public function fundByEmail($email) {}

  public function changePassword(User $user) {}
}