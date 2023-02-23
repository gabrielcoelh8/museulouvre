<?php
  include_once "function.php";
  session_start();
  if (!isset($_SESSION['usuario'])) {
    header("location: login.php");
    exit(0);
  }
  $usuario = $_SESSION['usuario'];
?>

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">

    <a class="navbar-brand" href="index.php">
      <img src="img/icon.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
      Louvre
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Movimentos Artísticos
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="cadastrarMovimento.php">Cadastrar</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="consultarMovimento.php">Visualizar</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Artistas
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="cadastrarArtista.php">Cadastrar</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="consultarArtista.php">Visualizar</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pinturas
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="cadastrarPintura.php">Cadastrar</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="consultarPintura.php">Visualizar</a></li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Sair (<?php
                echo $usuario['email'];
              ?>)
            </a>
          </li>

        </ul>
      </div>
    </div>
  </div>
</nav>