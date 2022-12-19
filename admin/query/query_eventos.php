<?php
include('prcd/qc.php');

    $queryEventos = "SELECT * FROM eventos WHERE activo = 1";
    $resultadoEvento = $conn->query($queryEventos);

    // query eventos cámara qr
    $sqlEventosQR = "SELECT * FROM eventos WHERE id = '$idEventos'";
    $resultadoEventoQR = $conn->query($sqlEventosQR);

?>