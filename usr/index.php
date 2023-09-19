<?php
    session_start();
    $usr = $_SESSION['usr'];
    include('tabla.php');
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="UACYA" content="Alumnos UACYA">
    <meta name="generator" content="Hugo 0.104.2">
    <link rel="icon" type="image/png" href="../assets/brand/img/ico.ico">
    <title>Alumnos · UACYA</title>

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <script src="script.js"></script>

    <style>
        #qrcode img{
          width: 100%;
        }
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
          width: 100%;
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
  
        .btn-bd-primary {
          --bd-violet-bg: #712cf9;
          --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
  
          --bs-btn-font-weight: 600;
          --bs-btn-color: var(--bs-white);
          --bs-btn-bg: var(--bd-violet-bg);
          --bs-btn-border-color: var(--bd-violet-bg);
          --bs-btn-hover-color: var(--bs-white);
          --bs-btn-hover-bg: #6528e0;
          --bs-btn-hover-border-color: #6528e0;
          --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
          --bs-btn-active-color: var(--bs-btn-hover-color);
          --bs-btn-active-bg: #5a23c8;
          --bs-btn-active-border-color: #5a23c8;
        }
        .bd-mode-toggle {
          z-index: 1500;
        }
      </style>
            <input type="text" id="concatenado" value="<?php echo $rowSQL['numero_control'] ?>" hidden>
            <input type="text" id="pwd" value="<?php echo $rowSQL['pwd'] ?>" hidden>

  </head>

  <body onload="ModalQr()">
    <nav class="navbar navbar-expand-lg bg-body-primary bg-primary" data-bs-theme="dark">     
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="../assets/brand/img/logo.png" alt="Bootstrap" width="auto" height="24">
              
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="nav nav-underline">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-door-open"></i> Salir</a>
                    </li>
                </ul>   
            </div>
        </div>
  
    </nav>
  </body>

  <main>
    <div class="container py-4">
      <header class="pb-3 mb-4 border-bottom">
        <a class="d-flex align-items-center text-body-emphasis text-decoration-none">
          
        </a>
        <div class="row">
          <div class="col-9">
            <h3><span class="text-secondary"><i class="bi bi-person-circle"></i> Perfil de alumnos</span></h3>
          </div>
          <div class="col-3">
            <div class="dropdown text-end">
              <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../assets/brand/img/somos_fca_halcon_azul_15.png" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Perfil</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-qr-code-scan"></i> Código UACYA</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-newspaper"></i> Task UACYA</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editarDatos"><i class="bi bi-gear"></i> Configuración</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-door-open"></i> Salir</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>
  
      <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="row align-items-center">
            <div class="col-6 text-center">
                <img src="../assets/brand/img/somos_fca_halcon_azul_15.png" alt="" width="300px" id="logo_lateral">
            </div>
            <div class="col-1">
                <div class="d-flex" style="height: 200px;">
                    <div class="vr"></div>
                </div>
            </div>
            <div class="col-5">
                <div class="container-fluid py-5">
                    <h1 class="h3 fw-bold">Nombre:</h1>
                    <p class="col-md-12 fs-5"><?php echo $rowSQL['nombre'].' '. $rowSQL['apellidos'] ?></p>
                    <h1 class="h3 fw-bold">Programa: </h1>
                    <p class="col-md-8 fs-5"><?php echo $rowSQL['carrera'] ?></p>
                    <h1 class="h3 fw-bold">Matrícula:</h1>
                    <p class="col-md-8 fs-5"><?php echo $rowSQL['numero_control'] ?></p>
                    <!-- <button class="btn btn-primary btn-lg" type="button">Example button</button> -->
                </div>
            </div>
        </div>
        
      </div>
  
      <div class="row align-items-md-stretch g-2">
        <div class="col-md-6">
          <div class="h-100 p-5 text-bg-dark rounded-3">
            <h2><i class="bi bi-newspaper"></i> Task UACYA</h2>
            <p>
                <div class="alert alert-light border-warning" role="alert">
                    <span class="h5 text-dark fw-bold">Anuncio 1</span> 
                        <br>
                        <small class="text-secondary">Este es el anuncio número 1.</small>
                </div>
            </p>
            <p>
                <div class="alert alert-light border-warning" role="alert">
                    <span class="h5 text-dark fw-bold">Anuncio 2</span> 
                        <br>
                        <small class="text-secondary">Este es el anuncio número 2.</small>
                </div>
            </p>
            <p>
                <div class="alert alert-light border-warning" role="alert">
                    <span class="h5 text-dark fw-bold">Anuncio 3</span> 
                        <br>
                        <small class="text-secondary">Este es el anuncio número 3.</small>
                </div>
            </p>
            <p>
                <div class="alert alert-light border-warning" role="alert">
                    <span class="h5 text-dark fw-bold">Anuncio 4</span> 
                        <br>
                        <small class="text-secondary">Este es el anuncio número 4.</small>
                </div>
            </p>
            <p>
                <div class="alert alert-light border-warning" role="alert">
                    <span class="h5 text-dark fw-bold">Anuncio 5</span> 
                        <br>
                        <small class="text-secondary">Este es el anuncio número 5.</small>
                </div>
            </p>
            
            <button class="btn btn-outline-warning" type="button"><i class="bi bi-newspaper"></i> Revisar Task</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-5 bg-body-tertiary border rounded-3">
            <h2><i class="bi bi-qr-code"></i> Código UACYA</h2>
            <p class="text-center" id="qrcode">
                <!-- <img src="qr_fca.png" alt="" width="100%"> -->
            </p>
            <!-- <button class="btn btn-outline-secondary" type="button">Example button</button> -->
          </div>
        </div>
      </div>
  
      <footer class="pt-3 mt-4 text-body-secondary border-top">
        &copy; UACYA | 2023
      </footer>
    </div>
  </main>

  </html>

  <!-- zona de modals -->

  <!-- Modal -->
<div class="modal fade" id="editarDatos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="bi bi-gear"></i> Configuración</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container text-center">
          <img src="../assets/brand/img/somos_fca_halcon_azul_15.png" width="200" alt="" class="img-thumbnail rounded-5">
          <p class="mt-2">
            <button class="btn btn-primary btn-sm" data-bs-target="#editarFoto" data-bs-toggle="modal"><i class="bi bi-image-fill"></i> Cambiar foto</button>
          </p>
        </div>
        <h6>Cambiar contraseña</h6>
        <form action="chPwd.php" method="post">
        <div class="input-group mb-3 mt-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-journal-code"></i></span>
          <input type="password" id="newPass" class="form-control" placeholder="Contraseña anterior" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $rowSQL2['pwd'] ?>" disabled>
          <button class="btn btn-primary" id="btnPwd" onclick="verPwd()"><i class="bi bi-eye-fill" id="eyePwd"></i></button>
        </div>
        <div class="input-group mb-3 mt-3">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-journal-code"></i></span>
          <input type="text" class="form-control" placeholder="Nueva contraseña" aria-label="Username" aria-describedby="basic-addon1" name="pwd" required>
          <input type="text" class="form-control" placeholder="Nueva contraseña" aria-label="Username" aria-describedby="basic-addon1" name="id" value="<?php echo $rowSQL2['id'] ?>" hidden>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Cambiar contraseña</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- modal foto -->
 <!-- Modal -->
 <div class="modal fade" id="editarFoto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="bi bi-gear"></i> Editar foto de perfil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="upload_form" enctype="multipart/form-data" method="post">
            <input type="file" name="fileEditar" id="fileEditar" onchange="uploadFileEditar()" accept="application/pdf" class="h6 w-100 mt-3"><br>
            
            <div class="progress" role="progressbar" aria-label="Example 1px high" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
              <div class="progress-bar" style="width: 25%"></div>
            </div>
            
          
            <progress id="progressBarEditar" value="0" max="100" style="width:300px;"></progress>
            <small id="statusEditar"></small>
            <p id="loaded_n_totalEditar"></p>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-bs-target="#editarDatos" data-bs-toggle="modal"><i class="bi bi-gear"></i> Configuración</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script>
  function ModalQr(){

    // var texto = concatenado.toString();
    var texto = document.getElementById('concatenado').value;
    // document.getElementById('matriculaQR2').innerHTML = concatenado;
    document.getElementById('qrcode').innerHTML = "";
// aquí

var qrcode = new QRCode(document.getElementById("qrcode"), {
      text: texto,
      // width: 100%,
      // height: 100%,
      correctLevel: QRCode.CorrectLevel.Q
    });

    // Obtener el elemento canvas generado por QRCode.js
    var canvas = document.querySelector("#codigo-qr canvas");

    // Crear un nuevo elemento de imagen para el logo
    var logo = new Image();
    logo.src = "imagen.png";

    // Esperar a que el logo se cargue antes de dibujarlo en el canvas
    logo.onload = function() {
      // Calcular la posición del logo en el centro del código QR
      var logoSize = qrcode._htOption.width * 0.2; // Tamaño relativo del logo (20%)
      var xPos = (canvas.width - logoSize) / 2;
      var yPos = (canvas.height - logoSize) / 2;

      // Dibujar el logo en el canvas
      var ctx = canvas.getContext("2d");
      ctx.drawImage(logo, xPos, yPos, logoSize, logoSize);
    };

    console.log();

  }

    
  
</script>