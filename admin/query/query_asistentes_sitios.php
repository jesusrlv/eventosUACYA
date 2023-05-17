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
            <td><small>'.$rowEventos['apellidos'].'</small></td>
            <td><small>'.$rowEventos['nombre'].'</small></td>';
          
            echo'
            <td><small>'.$rowEventos['tipo_sangre'].'</small></td>';

            $semestre = $rowEventos['semestre'];
            
            echo'
            <td><small>'.$rowEventos['semestre'].'</small></td>';

            echo'<td><small>'.$rowEventos['grupo'].'</small></td>';

           
            echo'
            <td><small>'.$rowEventos['unidad_academica'].'</small></td>';

            echo'<td><small>'.$rowEventos['numero_control'].'</small></td>';

            
            echo'
            <td><small>'.$rowEventos['carrera'].'</small></td>'
            ;
            echo'
            <td><small>'.$rowEventos['fecha_registro'].'</small></td>'
            ;

            echo'
            
            <td><a href="constanciaPDF.php?id='.$rowEventos['id'].'&nombre='.$rowEventos['nombre'].'&apellidos='.$rowEventos['apellidos'].'&idevento='.$rowEventos['evento'].'" target="_blank"><i class="bi bi-filetype-pdf"></i></a></td>
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