<?php
require('../admin/prcd/qc.php');
if (isset($_POST['nombre']) && isset($_POST['curp'])) {

    date_default_timezone_set('America/Mexico_City');
    setlocale(LC_TIME, 'es_MX.UTF-8');

    $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
   
    $nombre = $_POST['nombre'];
    $curp = $_POST['curp'];
    
    $sql = "SELECT * FROM visitas WHERE curp = '$curp' AND fecha = '$fecha_sistema'";
    $resultado_sql = $conn->query($sql);
    $fila = $resultado_sql->num_rows;

    if($fila == 0){
        $sqlInsert = "INSERT INTO visitas (
            nombre, 
            curp,
            fecha
            )
             VALUES(
                '$nombre',
                '$curp',
                '$fecha_sistema'
             )";
             $resultadoInsert = $conn->query($sqlInsert);

             if($resultadoInsert){
                // cero es que agregará el campo a la db
                 echo json_encode(array('success' => 0));
             }
             else{
                // error
                echo json_encode(array('success' => 2));
             }
    } 
        else if($fila >= 0){
            // uno significa que ya estaba agregado
            echo json_encode(array('success' => 1));
        }
   
} else {
    echo json_encode(array('success' => 2));
}