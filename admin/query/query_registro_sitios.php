<?php

    include('../prcd/qc.php');

    date_default_timezone_set('America/Mexico_City');
    setlocale(LC_TIME, 'es_MX.UTF-8');
    $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

    $sitio = $_POST['sitio'];

    $annio = substr($fecha_sistema, 0, 4);
    $mes = substr($fecha_sistema, 5, 2);
    $dia = DAY(CURRENT_DATE);

    // por año
    $annio = "SELECT * FROM registro_sitios WHERE YEAR(fecha_registro) = $annio AND sitio = '$sitio'";
    $resultadoAnnio = $conn->query($annio);
    $rowsAnnio = $resultadoAnnio->num_rows;

    // por mes
    $mesSql = "SELECT * FROM registro_sitios WHERE MONTH(fecha_registro) = $mes AND sitio = '$sitio";
    $resultadomes = $conn->query($mesSql);
    $rowsmes = $resultadomes->num_rows;

    // por día
    $diaSql = "SELECT * FROM registro_sitios WHERE DAY(fecha_registro) = $dia AND sitio = '$sitio";
    $resultadodia = $conn->query($diaSql);
    $rowsdia = $resultadodia->num_rows;
        echo json_encode (array(
            'dia'=>$rowsdia,
            'mes'=>$rowsmes,
            'annio'=>$rowsAnnio
        ));

?>