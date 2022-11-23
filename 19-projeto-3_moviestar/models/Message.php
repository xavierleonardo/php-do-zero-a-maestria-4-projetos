<?php
class Message {
  static function setMessage(string $msg, string $type) {
    $_SESSION['msg'] = $msg;
    $_SESSION['type'] = $type;
  }

  static public function getMessage() {
    if (!empty($_SESSION['msg'])) {
      return [
        'msg' => $_SESSION['msg'],
        'type' => $_SESSION['type']
      ];
    } else {
      return false;
    }
  }
  
  static public function clearMessage() {
    $_SESSION['msg'] = '';
    $_SESSION['type'] = '';
  }
}