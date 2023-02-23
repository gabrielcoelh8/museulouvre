<?php
  include_once "function.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

// variavel global que contem informacoes do método GET
  $id = $_GET['id'];

  $movimento = getMovimento($id);
  excluirMovimento($id);
  setcookie("mensagem", "Movimento {$movimento['nome']} foi excluído");
  header('location: consultarMovimento.php');
 ?>
