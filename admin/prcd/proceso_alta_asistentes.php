<html>
<meta charset="utf-8">
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400&display=swap');
    body{
        font-family: 'Montserrat', sans-serif;
    }
</style>

<?php
include('qc.php');
include('QR/phpqrcode/qrlib.php');

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$curp = $_POST['curp'];
$tipo_sangre = $_POST['tipo_sangre'];
$semestre = $_POST['semestre'];
$unidad_academica = $_POST['unidad_academica'];
$num_control = $_POST['num_control'];
$carrera = $_POST['carrera'];
$evento = $_POST['evento'];

$codesDir = "QR/codes/";
$contatena = $num_control.'_'.$curp;   
    $codeFile = $num_control.'_'.$curp.'.png';
    QRcode::png($contatena, $codesDir.$codeFile, 'H', 10); 

    echo '
    <div id="div_print">
        <p><strong>UACYA<br>2023</strong></p>
        <p><strong>Nombre completo:</strong> ' . $_POST['nombre'] . ' ' . $_POST['apellidos'] . '</p>
        <p><strong>Tipo de sangre:</strong> ' . $_POST['tipo_sangre'] . '</p>
        <p><strong>Pólvora solicitada:</strong> ' . $_POST['cantidad_polvora'] . '</p>
        <p class="text-center"><img class="img-thumbnail" src="'.$codesDir.$codeFile.'" /></p>
    </div>'
    ;

$queryAsistentes = "INSERT INTO asistentes(nombre,apellidos,tipo_sangre,semestre,unidad_academica,carrera,numero_control,evento) VALUES('$nombre','$apellidos','$tipo_sangre','$semestre','$unidad_academica','$carrera','$num_control','$evento')";
$resultadoAsistentes = $conn->query($queryAsistentes);

if($resultadoAsistentes){


    echo "<script type=\"text/javascript\">
    Swal.fire({
        icon: 'success',
        imageUrl: '../assets/brand/img/logo.png',
        imageHeight: 200,
        imageAlt: 'UACYA UAZ',
        title: 'Asistente agregado',
        text: 'Se dio de alta el asistente',
        confirmButtonColor: '#3085d6',
        footer: 'UACYA UAZ'
    }).then(function(){window.location='../lista_asistentes.php';});</script>";
        }
else{
    echo 'No se registró ningún cambio';
}

?>

</body>
</html>