<?php
include('../prcd/qc.php');

$evento = $_POST['evento'];

$queryEventos = "SELECT * FROM asistentes WHERE evento = '$evento'";
$resultadoEvento = $conn->query($queryEventos);
$numRows = $resultadoEvento->num_rows;
if($numRows >= 1){
$x = 0;
    while($rowEventos = $resultadoEvento->fetch_assoc()){
        $x++;
        echo'
        <tr class="text-center">
            <td>'.$x.'</td>
            <td>'.$rowEventos['apellidos'].'</td>
            <td>'.$rowEventos['nombre'].'</td>
            <td>'.$rowEventos['tipo_sangre'].'</td>
            <td>'.$rowEventos['semestre'].'</td>
            <td>'.$rowEventos['unidad_academica'].'</td>
            <td>'.$rowEventos['numero_control'].'</td>
            <td>'.$rowEventos['carrera'].'</td>
            <td><a href="prcd/constancia_pdf.php?id='.$rowEventos['id'].'"><i class="bi bi-filetype-pdf"></i></a></td>
        </tr>
        ';
    }
}
else{
    echo'
    <script>
        alert("No hay personas registradas a este evento");
    </script>

    ';
}

?>