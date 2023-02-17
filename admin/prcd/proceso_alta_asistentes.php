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
$grupo = $_POST['grupo'];
$unidad_academica = $_POST['unidad_academica'];
$num_control = $_POST['num_control'];
$carrera = $_POST['carrera'];
// $evento = $_POST['evento'];

$codesDir = "QR/codes/";
$contatena = $num_control.'_'.$curp;   
    $codeFile = $num_control.'_'.$curp.'.png';
    $DirFisico = $codesDir.'/'.$codeFile;
    QRcode::png($contatena, $codesDir.$codeFile, 'H', 10); 

    echo '
    <div id="div_print" style=/"background-image: url(../../assets/brand/img/somos_fca_halcon_azul_15.png");/">
        <p><strong>UACYA 2023</strong></p>
        <p><strong>Nombre completo:</strong> ' . $_POST['nombre'] . ' ' . $_POST['apellidos'] . '</p>
        <p class="text-center"><img class="img-thumbnail" src="'.$codesDir.$codeFile.'" /></p>
    </div>'
    ;

$queryAsistentes = "INSERT INTO asistentes(nombre,apellidos,curp,tipo_sangre,semestre,grupo,unidad_academica,carrera,numero_control,idQr) VALUES('$nombre','$apellidos','$curp','$tipo_sangre','$semestre','$grupo','$unidad_academica','$carrera','$num_control','$contatena')";
$resultadoAsistentes = $conn->query($queryAsistentes);

if($resultadoAsistentes){


    echo "<script type=\"text/javascript\">
    Swal.fire({
        icon: 'success',
        imageUrl: '../../assets/brand/img/somos_fca_halcon_azul_15.png',
        imageHeight: 200,
        imageAlt: 'UACYA UAZ',
        title: 'Asistente agregado',
        text: 'Se dio de alta el asistente',
        confirmButtonColor: '#3085d6',
        footer: 'UACYA UAZ'
    }).then(function(){window.location='../alta_asistentes.php';});</script>";
        }
else{
    echo 'No se registró ningún cambio';
}

?>

</body>
</html>