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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
<div class="box text-center">
        <main class="form-signin w-100 m-auto pop">
            <form action="logar.php" method="post" class="form needs-validation">
                <div>
                <img class="mb-4" src="img/icon.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 fw-normal"><strong>Entre na sua conta!</strong></h1>    
                </div>
                
                <div>
                    <div class="form-floating">
                    <input for="email" type="text" class="form-control" id="email" name="email" required>
                    <label for="floatingInput">Nome de usuário</label>
                    <div class="invalid-feedback">
                    Please provide a valid user.
                    </div>
                    </div>

                    <div class="form-floating">
                    <input for="senha"  type="password" class="form-control" id="senha" name="senha" placeholder="Password" required>
                    <label for="floatingPassword">Senha</label>
                    <div class="invalid-feedback">
                    Please provide a valid password.
                    </div>
                    </div>
                </div>
                
                <div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" id="liveAlertBtn">Entrar</button>
                </div>
            </form>
        </main>
        <div id="liveAlertPlaceholder"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>