<?php
  include_once "function.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Consulta</title>
</head>

<body>

    <?php
include_once "menu.php";
?>

    <main class="box">
        <div class="tabela">

        <?php
        if (isset($_COOKIE['mensagem'])) {
          echo "
          <div class='alert alert-success'>
            {$_COOKIE['mensagem']}
          </div>";
          unset($_COOKIE['mensagem']);
          setcookie("mensagem", "", 1);
        }
        ?>

        <a href="cadastrarMovimento.php" class="btn btn-primary mb-3">Novo</a>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Excluir</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>
                <?php

         $movimentos = getMovimentos();
         foreach ($movimentos as $movimento) {
           echo "
           <tr>
              <td>{$movimento['id']}</td>
              <td>{$movimento['nome']}</td>
              <td><a href='excluirMovimento.php?id={$movimento['id']}' class='btn btn-danger'><span class='material-symbols-outlined'>
              delete</span></a></td>
              <td><a href='editarMovimento.php?id={$movimento['id']}' class='btn btn-primary'><span class='material-symbols-outlined'>
              edit
              </span></a></td>
           </tr>";
         }
                ?>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>