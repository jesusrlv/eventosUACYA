<?php
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Inicio</title>
    <link rel="icon" type="image/png" href="../assets/brand/img/ico.ico"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600&display=swap" rel="stylesheet">
    <!-- font -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
  </head>
  <body>
<main class="mb-0">
  <header class="p-3" style="background-color:#000e42;">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="../assets/brand/img/logo.png" width="120" height="36" role="img" alt="">        
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 ms-4 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-secondary">Eventos</a></li>
        </ul>

        <div class="text-end">
          <!-- <button type="button" class="btn btn-outline-light me-2">Login</button> -->
          <button type="button" class="btn btn-warning">Salir</button>
        </div>
      </div>
    </div>
  </header>

  <div class="b-example-divider">

  </div>

    <div class="container-fluid w-75 h-100 mt-5 mb-4 p-5 text-center">
    <img src="../assets/brand/img/somos_fca_halcon_azul_15.png" width="270" height="" role="img" alt="" class="p-2" style="">
      <h1 class="mt-2 display-1 text-bold" style="font-family: 'Titillium Web', sans-serif;">Sistema de eventos<br>UACYA</h1>
      <p class="h3 text-bold text-secondary">Universidad Autónoma de Zacatecas</p>
      <hr>
        <div class="row justify-content-center">
            <div class="col-12">
            <form action="checkin.php" method="POST">
                <div class="input-group mb-3 w-100 mt-5">
                    <span class="input-group-text" id="basic-addon1">Seleccionar Evento</span>
                    <select class="form-select" aria-label="Default select example" name="evento">
                        <option selected>Seleccionar ...</option>
                        <?php
                          include('../admin/query/query_eventos.php');
                          while($rowEventos = $resultadoEvento->fetch_assoc()){
                            echo'
                            <option value="'.$rowEventos['id'].'">'.$rowEventos['nombre'].'</option>
                            ';
                          }
                        ?>
                    </select>
                    <button class="btn btn-primary" type="submit">Acceder <i class="bi bi-arrow-right-circle-fill"></i></button>
            </form>
            </div>
          </div>
            <div class="col-0"></div>
        </div>
    </div>
  
</main>
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-12 mb-0 text-muted"><a href="/" class="col-md-4 d-flex mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="../assets/brand/img/logo.png" width="140" height="45" role="img" alt="" class="p-2 rounded" style="background-color:#000e42">
            </a></p>
      
    </footer>
  </div>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
