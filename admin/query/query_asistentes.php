<?php
include('../prcd/qc.php');

$evento = $_POST['evento'];

// $sqlContar = "SELECT tenis.marca AS marcaP,tenis.modelo AS modeloP,talla.inventario AS talla ,producto.cantidad AS cantidadP,talla.cantidad AS cantidadV FROM producto INNER JOIN talla ON producto.id = talla.id_ext";

$queryEventos = "SELECT asistentes.id AS id, asistentes.apellidos AS apellidos, asistentes.nombre AS nombre, asistentes.tipo_sangre as tipo_sangre, asistentes.semestre AS semestre, asistentes.grupo AS grupo, asistentes.unidad_academica AS unidad_academica, asistentes.numero_control AS numero_control, asistentes.carrera AS carrera, registro.asistente AS asistente, registro.evento AS evento, registro.asistencia AS asistencia, registro.fecha_registro AS fecha_registro FROM asistentes INNER JOIN registro ON asistentes.id = registro.asistente WHERE registro.evento = '$evento'";
$resultadoEvento = $conn->query($queryEventos);
$numRows = $resultadoEvento->num_rows;
if($numRows >= 1){
$x = 0;
    while($rowEventos = $resultadoEvento->fetch_assoc()){
        $x++;
        echo'
        <tr class="text-center">
            <td><small>'.$x.'</small></td>
            <td><small>'.$rowEventos['apellidos'].'</small></td>
            <td><small>'.$rowEventos['nombre'].'</small></td>';
            $sangre = $rowEventos['tipo_sangre'];
            $sqlSangre = "SELECT * FROM sangre WHERE id = $sangre";
            $resultadoSangre = $conn->query($sqlSangre);
            $rowSangre = $resultadoSangre->fetch_assoc();
            echo'
            <td><small>'.$rowSangre['tipo_sangre'].'</small></td>';

            $semestre = $rowEventos['semestre'];
            $sqlSemestre = "SELECT * FROM semestre WHERE id = $semestre";
            $resultadoSemestre = $conn->query($sqlSemestre);
            $rowSemestre = $resultadoSemestre->fetch_assoc();
            echo'
            <td><small>'.$rowSemestre['semestre'].'</small></td>';

            echo'<td><small>'.$rowEventos['grupo'].'</small></td>';

            $unidad_academica = $rowEventos['unidad_academica'];
            $sqlUnidad_academica = "SELECT * FROM unidad_academica WHERE id = $unidad_academica";
            $resultadoUnidad_academica = $conn->query($sqlUnidad_academica);
            $rowUnidad_academica = $resultadoUnidad_academica->fetch_assoc();
            echo'
            <td><small>'.$rowUnidad_academica['unidad_academica'].'</small></td>';

            echo'<td><small>'.$rowEventos['numero_control'].'</small></td>';

            $carrera = $rowEventos['carrera'];
            $sqlPrograma = "SELECT * FROM programa WHERE id = $carrera";
            $resultadoPrograma = $conn->query($sqlPrograma);
            $rowPrograma = $resultadoPrograma->fetch_assoc();
            echo'
            <td><small>'.$rowPrograma['programa'].'</small></td>'
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