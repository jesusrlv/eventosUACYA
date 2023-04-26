<?php
include('../prcd/qc.php');
if(empty($_POST['busqueda']) || ($_POST['busqueda'] == null)){
    echo'
        <tr>
            <td colspan="7" class="text-center table-danger">Sin datos</td>
        </tr>
        ';

}
else if(isset($_POST['busqueda'])){
$variable = $_POST['busqueda'];
$var = "SELECT * FROM asistentes WHERE nombre = '$variable' OR apellidos = '$variable' OR apellido_m = '$variable' OR curp = '$variable' OR numero_control = '$variable' ";
$resultadoVariable = $conn->query($var);
$filaVar = $resultadoVariable->num_rows;
    if($filaVar > 0){
    $x=0;
        while($rowVar = $resultadoVariable->fetch_assoc()){
            $x++;
            echo'
            <tr>
                <td>'.$x.'</td>
                <td>'.$rowVar['numero_control'].'</td>
                <td>'.$rowVar['apellidos'].'</td>
                <td>'.$rowVar['apellido_m'].'</td>
                <td>'.$rowVar['nombre'].'</td>
                <td>'.$rowVar['carrera'].'</td>
                <td>'.$rowVar['curp'].'</td>
                <td><i class="bi bi-pencil-square"></i></td>
            </tr>
        ';
        }
    }
    else{
        echo'
        <tr>
            <td colspan="7" class="text-center table-danger">Sin datos</td>
        </tr>
        ';
    }
}
