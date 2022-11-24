<?php
class User {
  public int $id;
  public string $image;
  public string $bio;

  public function __construct(
    public string $name,
    public string $lastname,
    public string $email,
    public string $password,
    public string $token)
  {
    // $this->name = $name;  
    // $this->lastname = $lastname;  
    // $this->email = $email;  
    // $this->password = $password;  
    // $this->image = $image;  
    // $this->bio = $bio;  
    // $this->token = $token;  
  }

  static function generateToken() {
    return bin2hex(random_bytes(50));
  }

  static function generatePassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
  }
}

interface UserDAOInterface {
  public function buildUser($data);
  public function create(User $user, $authUser = false);
  public function update(User $user);
  public function findByToken($token);
  public function verifyToken($protected = false);
  public function setTokenToSession($token, $redirect = true);
  public function authenticateUser($email, $password);
  public function findByEmail($email);
  public function changePassword(User $user);
}