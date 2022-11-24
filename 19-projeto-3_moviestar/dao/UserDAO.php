<?php
require_once('globals.php');
require_once('models/User.php');

class UserDAO implements UserDAOInterface
{
  public function __construct(private PDO $conn)
  {
    $this->conn = $conn;
  }

  public function buildUser($data)
  {
    $user = new User($data['name'], $data['lastname'], $data['email'], $data['password'], $data['token']);
    $user->id = $data['id'];
    $user->image = $data['image'];
    $user->bio = $data['bio'];

    return $user;
  }

  public function create(User $user, $authUser = false)
  {
  }

  public function update(User $user)
  {
  }

  public function findByToken($token)
  {
  }

  public function verifyToken($protected = false)
  {
  }

  public function setTokenToSession($token, $redirect = true)
  {
  }

  public function authenticateUser($email, $password)
  {
  }

  public function findByEmail($email)
  {
    if ($email === '') {
      return false;
    }

    $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $mail);
    $stmt->execute();

    if ($stmt->rowCount() === 0) {
      return false;
    }

    $data = $stmt->fetch();
    return $this->buildUser($data);
  }

  public function changePassword(User $user)
  {
  }
}