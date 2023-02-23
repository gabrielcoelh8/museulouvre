<?php
  include_once "function.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  session_start();
  if (!isset($_SESSION['usuario'])) {
    header("location: login.php");
    exit(0);
  }

  $usuario = $_SESSION['usuario'];
  $pinturas = getPinturas();
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
  <title>Home</title>
</head>

<body>

  <?php
  include_once "menu.php";
  ?>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" viewBox="0 0 16 16">
      <path
        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
    <symbol id="info-fill" viewBox="0 0 16 16">
      <path
        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
    </symbol>
    <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
      <path
        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
  </svg>


  <main class="box">
    <div class="pop index mt-5">
      <div class="alert alert-info" role="alert">
        <h4 class="alert-heading text-center">BIENVENUE AU LOUVRE!</h4>
        <p>Há sempre uma boa razão para vir ao Louvre. As obras do palácio surpreendem, convidam a sonhar, a imaginar. É
          hora de se preparar para a sua visita. Precisa de alguma inspiração? Rotas e visitas guiadas fazem você
          descobrir os lugares emblemáticos. E no coração de Paris, os jardins lhe dão as boas-vindas.</p>
        <hr>
        <p class="mb-0"><h4 class="text-center">PLONGEZ AU CŒUR DU LOUVRE</h4></p>
      </div>
    </div>

    <div class="car">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

          <div class="carousel-item active">
            <img src="img/pintura/<?php echo$pinturas[0]['pintura']?>" class="d-block" alt="...">
          </div>

          <?php echo "
            <div class='carousel-item'>
            <img src='img/pintura/{$pinturas[1]['pintura']}' class='d-block' alt='...'>
            </div>
            
            <div class='carousel-item'>
            <img src='img/pintura/{$pinturas[2]['pintura']}' class='d-block' alt='...'>
            </div>";
          ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>