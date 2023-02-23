<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  if (!isset($movimento)) {
    $movimento = array();
    $movimento['id'] = 0;
    $movimento['nome'] = "";
  }
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
<form class="row g-3" action="salvarMovimento.php" method="post">

  <div class="mb-1">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" name="id" value="<?php echo $movimento['id'];?>" readonly>
  </div>

  <div class="col-md-12 mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $movimento['nome'];?>">
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