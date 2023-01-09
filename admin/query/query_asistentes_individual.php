<?php
// include('../prcd/qc.php');

// $evento = $_POST['evento'];

// $sqlContar = "SELECT tenis.marca AS marcaP,tenis.modelo AS modeloP,talla.inventario AS talla ,producto.cantidad AS cantidadP,talla.cantidad AS cantidadV FROM producto INNER JOIN talla ON producto.id = talla.id_ext";

$queryEventos = "SELECT asistentes.id AS id, asistentes.apellidos AS apellidos, asistentes.nombre AS nombre, asistentes.tipo_sangre as tipo_sangre, asistentes.semestre AS semestre, asistentes.unidad_academica AS unidad_academica, asistentes.numero_control AS numero_control, asistentes.carrera AS carrera, registro.asistente AS asistente, registro.evento AS evento, registro.asistencia AS asistencia, registro.fecha_registro AS fecha_registro FROM asistentes INNER JOIN registro ON asistentes.id = registro.asistente WHERE registro.evento = '$evento'";
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