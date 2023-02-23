<?php
  include_once "function.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  if (!isset($pintura)) {
    $pintura = array();
    $pintura['id'] = 0;
    $pintura['nome'] = "";
    $pintura['id_artista'] = 0;
    $pintura['data_lancamento'] = "";
    $pintura['tecnica'] = "";
    $pintura['pintura'] = "";
  }
  $foto = $pintura['pintura']!= ""? $pintura['pintura']:'anonimo.png';

  $artistas = getArtistas();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Cadastro</title>
</head>

<body>

  <?php
include_once "menu.php";
?>

  <main class="box">
    <div class="pop cadastro m-8">
    <h2 class="text-center mb-5">Cadastro de Pinturas</h2>
      <form class="row g-3" class="m-5 container" action="salvarPintura.php" method="post"
        enctype="multipart/form-data">

        <input type="hidden" name="pintura" value="<?php echo $pintura['pintura']; ?>">

        <div class="col-md-1">
          <label for="id" class="form-label">ID</label>
          <input type="text" class="form-control" id="id" name="id" value="<?php echo $pintura['id']; ?>" readonly>
        </div>

        <div class="col-md-7">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $pintura['nome']; ?>">
        </div>

        <div class="col-md-4">
          <label for="data_lancamento" class="form-label">Ano de Lançamento</label>
          <input type="number" class="form-control" id="data_lancamento" name="data_lancamento"
            value="<?php echo $pintura['data_lancamento'];?>">
        </div>

        <div class="col-md-4 mb-3">
          <label for="id_artista" class="form-label">Artista</label>
          <select class="form-select" name="id_artista" id="id_artista">
            <?php
          foreach ($artistas as $artista) {
            $selected = $artista['id'] == $pintura['id_artista'] ? 'selected' : '';
            echo "<option $selected value='{$artista['id']}'>{$artista['nome']}</option>";
          }
          ?>
          </select>
        </div>
        
        <div class="col-md-4">
          <label for="tecnica" class="form-label">Técnica</label>
          <input type="text" class="form-control" name="tecnica" id="tecnica" value="<?php echo $pintura['tecnica']; ?>">
        </div>

        <div class="col-md-3 mb-3">
          <label for="pintura" class="form-label">Pintura</label>
          <input type="file" class="form-control" id="pintura" name="pintura" accept="image/*">
        </div>
        <div class="col-md-1 mb-3">
         <img src="img/pintura/<?php echo $foto ?>">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
      </form>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>