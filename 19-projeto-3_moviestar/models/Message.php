<?php
class Message {
  static function setMessage(string $msg, string $type) {
    $_SESSION['msg'] = $msg;
    $_SESSION['type'] = $type;
  }

  static public function getMessage() {}
  
  static public function clearMessage() {}
}