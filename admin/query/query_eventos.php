<?php
include('prcd/qc.php');

    $queryEventos = "SELECT * FROM eventos WHERE activo = 1";
    $resultadoEvento = $conn->query($queryEventos);

?>