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
        
        if($row_sql['perfil'] == 1){
            echo json_encode(array('success' => 1));
        }
        else if($row_sql['perfil'] == 2){
            echo json_encode(array('success' => 2));
        }
        else if($row_sql['perfil'] == 3){
            echo json_encode(array('success' => 3));
        }
        else if($row_sql['perfil'] == 4){
            echo json_encode(array('success' => 4));
        }
        else if($row_sql['perfil'] == 5){
            echo json_encode(array('success' => 5));
        }
        else if($row_sql['perfil'] == 6){
            $_SESSION['usr'] = $row_sql['usr'];
            echo json_encode(array('success' => 6));
        }
    } 
        else{
            echo json_encode(array('success' => 0));
        }
   
} else {
    echo json_encode(array('success' => 0));
}