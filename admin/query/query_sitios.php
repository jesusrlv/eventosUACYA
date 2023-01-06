<?php

include('prcd/qc.php');

// sitios
$sqlSitios = "SELECT * FROM sitio ORDER BY id ASC";
$resultadoSitio = $conn->query($sqlSitios);

?>