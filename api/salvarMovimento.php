<?php
  include_once "function.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $movimento = array();
  // variavel global $_POST
  $movimento['id'] = $_POST['id'];
  $movimento['nome'] = $_POST['nome'];

  if ($movimento['id'] == 0) {
    salvarMovimento($movimento);
  } else {
    alterarMovimento($movimento);
  }
  setcookie("mensagem", "'{$movimento['nome']}' foi salvo!");

  // pede para o navegador chamar o recurso professores.php
  header('location: consultarMovimento.php');
 ?>
