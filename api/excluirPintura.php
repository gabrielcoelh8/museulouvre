<?php
  include_once "function.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

// variavel global que contem informacoes do método GET
  $id = $_GET['id'];

  $pintura = getPintura($id);
  excluirPintura($id);
  setcookie("mensagem", "A pintura '{$pintura['nome']}' foi excluída!");
  header('location: consultarPintura.php');
 ?>
