<?php

    include('../prcd/qc.php');

    date_default_timezone_set('America/Mexico_City');
    setlocale(LC_TIME, 'es_MX.UTF-8');
    $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

    $annio = substr($fecha_sistema, 0, 4);
    $mes = substr($fecha_sistema, 5, 2);
    $dia = DAY(CURRENT_DATE);

    // por año
    $annio = "SELECT * FROM registro_sitios WHERE YEAR(fecha_registro) = $annio";
    $resultadoAnnio = $conn->query($annio);
    $rowsAnnio = $resultadoAnnio->num_rows;

    // por mes
    $mesSql = "SELECT * FROM registro_sitios WHERE YEAR(fecha_registro) = $mes";
    $resultadomes = $conn->query($mesSql);
    $rowsmes = $resultadomes->num_rows;

    // por día
    $diaSql = "SELECT * FROM registro_sitios WHERE YEAR(fecha_registro) = $dia";
    $resultadodia = $conn->query($diaSql);
    $rowsdia = $resultadodia->num_rows;


    //mes y año actual venta Admin
    $sql = "SELECT * FROM venta_gral WHERE YEAR(fecha_venta) = YEAR(CURRENT_DATE()) 
    AND MONTH(fecha_venta)  = MONTH(CURRENT_DATE()) AND vendedor = '$id_sess' ORDER BY id DESC";
    $resultado_sql = $conn->query($sql);

    //por fecha
    if(isset($_POST['fecha'])){
        $fechaBusqueda = $_POST['fecha'];
        $annio = substr($fechaBusqueda, 0, 4);
        $mes = substr($fechaBusqueda, 5, 2); 
        $sqlBusqueda = "SELECT * FROM venta_gral WHERE YEAR(fecha_venta) = $annio 
        AND MONTH(fecha_venta)  = $mes AND vendedor = '$id_sess' ORDER BY id DESC";
        $resultadoBusqueda = $conn->query($sqlBusqueda);
    }


?>