<?php
include('../prcd/qc.php');

$evento = $_POST['evento'];

$queryEventos = "SELECT * FROM asistentes WHERE evento = '$evento'";
$resultadoEvento = $conn->query($queryEventos);
$x = 0;
while($rowEventos = $resultadoEvento->fetch_assoc()){
    $x++;
    echo'
    <tr class="text-center">
        <td>'.$x.'</td>
        <td>'.$rowEventos['apellidos'].'</td>
        <td>'.$rowEventos['nombre'].'</td>
        <td>'.$rowEventos['semestre'].'</td>
        <td>'.$rowEventos['especialidad'].'</td>
        <td>'.$rowEventos['carrera'].'</td>
        <td><a href="prcd/constancia_pdf.php?id='.$rowEventos['id'].'"><i class="bi bi-filetype-pdf"></i></a></td>
    </tr>
    ';
}

?>