<?php
require('../admin/prcd/qc.php');
if (isset($_POST['nombre']) && isset($_POST['curp'])) {
   
    $nombre = $_POST['nombre'];
    $curp = $_POST['curp'];
    $fecha = 
    
    $sql = "SELECT * FROM visitas WHERE nombre = '$nombre' AND curp ='$curp' and fecha = '$fecha'";
    $resultado_sql = $conn->query($sql);
    $fila = $resultado_sql->num_rows;

    if($fila > 0){
        
        echo json_encode(array('success' =>1));

    } 
        else{
            echo json_encode(array('success' => 0));
        }
   
} else {
    echo json_encode(array('success' => 2));
}