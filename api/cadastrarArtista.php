<?php
  include_once "function.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  if (!isset($artista)) {
    $artista = array();
    $artista['id'] = 0;
    $artista['nome'] = "";
    $artista['id_movimento'] = 0;
    $artista['data_nascimento'] = "";
    $artista['foto'] = "";
  }
  $foto = $artista['foto']!= ""? $artista['foto']:'anonimo.png';

  $movimentos = getMovimentos();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>

<?php 
include_once "menu.php"; 
?>

<main class="box">
<div class="pop cadastro">
<h1 class="text-center mb-5">Cadastro de Artista</h1>
<form class="row g-3" class="m-5 container" action="salvarArtista.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="foto" value="<?php echo $artista['foto'];?>">
  <div class="col-md-1">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" name="id" value="<?php echo $artista['id'];?>" readonly>
  </div>
  <div class="col-md-5">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $artista['nome'];?>">
  </div>
  <div class="col-md-6">
      <label for="data_nascimento" class="form-label">Data de Nascimento</label>
      <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?php echo $artista['data_nascimento'];?>">
  </div>
  <div class="col-md-6 mb-3">
      <label for="id_movimento" class="form-label">Movimento Artístico</label>
         <select class="form-select" name="id_movimento" id="id_movimento">
          <?php
             foreach ($movimentos as $movimento) {
               $selected = $movimento['id'] == $artista['id_movimento']?'selected':'';
               echo "<option $selected value='{$movimento['id']}'>{$movimento['nome']}</option>";
             }
          ?>
         </select>
  </div>
  <div class="col-md-5 mb-3">
         <label for="foto" class="form-label">Foto</label>
         <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
  </div>
  <div class="col-md-1 mb-3">
         <img src="img/artista/<?php echo $foto ?>">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Confirmar</button>
  </div>
</form>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>