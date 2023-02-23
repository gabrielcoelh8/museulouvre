<?php
  include_once "function.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  $id = $_GET['id'];

  $artista = getArtista($id);

  include_once "cadastrarArtista.php";
 ?>
