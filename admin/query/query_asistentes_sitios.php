<?php
include('../prcd/qc.php');

$sitio = $_POST['sitio'];

$querysitio = "SELECT asistentes.id AS id, asistentes.apellidos AS apellidos, asistentes.nombre AS nombre, asistentes.tipo_sangre as tipo_sangre, asistentes.semestre AS semestre, asistentes.grupo AS grupo, asistentes.unidad_academica AS unidad_academica, asistentes.numero_control AS numero_control, asistentes.carrera AS carrera, registro_sitios.asistente AS asistente, registro_sitios.sitio AS sitio, registro_sitios.asistencia AS asistencia, registro_sitios.fecha_registro AS fecha_registro FROM asistentes INNER JOIN registro_sitios ON asistentes.id = registro_sitios.asistente WHERE registro_sitios.sitio = '$sitio'";
$resultadositio = $conn->query($querysitio);
$numRows = $resultadositio->num_rows;
if($numRows >= 1){
$x = 0;
    while($rowsitio = $resultadositio->fetch_assoc()){
        $x++;
        echo'
        <tr class="text-center">
            <td><small>'.$x.'</small></td>
            <td><small>'.$rowsitio['apellidos'].'</small></td>
            <td><small>'.$rowsitio['nombre'].'</small></td>';
          
            echo'
            <td><small>'.$rowsitio['tipo_sangre'].'</small></td>';

            $semestre = $rowsitio['semestre'];
            
            echo'
            <td><small>'.$rowsitio['semestre'].'</small></td>';

            echo'<td><small>'.$rowsitio['grupo'].'</small></td>';

           
            echo'
            <td><small>'.$rowsitio['unidad_academica'].'</small></td>';

            echo'<td><small>'.$rowsitio['numero_control'].'</small></td>';

            
            echo'
            <td><small>'.$rowsitio['carrera'].'</small></td>'
            ;
            echo'
            <td><small>'.$rowsitio['fecha_registro'].'</small></td>'
            ;

            echo'
            
            <td><a href="constanciaPDF.php?id='.$rowsitio['id'].'&nombre='.$rowsitio['nombre'].'&apellidos='.$rowsitio['apellidos'].'&idevento='.$rowsitio['sitio'].'" target="_blank"><i class="bi bi-filetype-pdf"></i></a></td>
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