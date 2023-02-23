<?php
  include_once "function.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $artista = array();
  // variavel global $_POST
  $artista['id'] = $_POST['id'];
  $artista['nome'] = $_POST['nome'];
  $artista['id_movimento'] = $_POST['id_movimento'];
  $artista['data_nascimento'] = $_POST['data_nascimento'];
  $artista['foto'] = $_POST['foto'];

  $arquivo = $_FILES['foto'];
  if ($arquivo['name']!="") {
    $arquivoTemporario = $arquivo['tmp_name'];
    $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
    $nomeArquivo = sha1(time()).".".$extensao;
    move_uploaded_file($arquivoTemporario, "img/artista/".$nomeArquivo);
    if ($professor['foto'] != "") {
      unlink('img/artista/'.$artista['foto']);
    }
    $artista['foto'] = $nomeArquivo;
  }

  if ($artista['id'] == 0) {
    salvarArtista($artista);
  } else {
    alterarArtista($artista);
  }
  setcookie("mensagem", "{$artista['nome']} foi salvo");
  // pede para o navegador chamar o recurso professores.php
  header('location: consultarArtista.php');
 ?>
