<?php
  include_once "function.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  session_start();
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $senha = md5($senha);
  $usuario = getUserByEmail($email);
  if (empty($usuario)) {
    header("location: login.php");
  } else {
    if ($usuario['senha'] != $senha) {
      header("location: login.php");
    } else {
      $_SESSION['usuario'] = $usuario;
      header("location: index.php");
    }
  }
 ?>
