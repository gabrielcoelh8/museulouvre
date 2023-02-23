<?php
  include_once "function.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $pintura = array();
  // variavel global $_POST
  $pintura['id'] = $_POST['id'];
  $pintura['nome'] = $_POST['nome'];
  $pintura['id_artista'] = $_POST['id_artista'];
  $pintura['data_lancamento'] = $_POST['data_lancamento'];
  $pintura['pintura'] = $_POST['pintura'];
  $pintura['tecnica'] = $_POST['tecnica'];

  $arquivo = $_FILES['pintura'];
  if ($arquivo['name']!="") {
    $arquivoTemporario = $arquivo['tmp_name'];
    $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
    $nomeArquivo = sha1(time()).".".$extensao;
    move_uploaded_file($arquivoTemporario, "img/pintura/".$nomeArquivo);
    if ($pintura['pintura'] != "") {
      unlink('img/artista/'.$pintura['pintura']);
    }
    $pintura['pintura'] = $nomeArquivo;
  }

  if ($pintura['id'] == 0) {
    salvarPintura($pintura);
  } else {
    alterarPintura($pintura);
  }
  setcookie("mensagem", "O item '{$pintura['nome']}' foi salvo!");
  // pede para o navegador chamar o recurso professores.php
  header('location: consultarPintura.php');
 ?>
