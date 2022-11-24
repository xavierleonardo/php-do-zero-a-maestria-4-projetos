<?php

  session_start();
  
  function redirect(string $page) {
    header('Location: ' . $page);
  }

  $BASE_URL = "http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"]."?") . "/";