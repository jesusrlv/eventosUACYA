<?php
    include('../prcd/qc.php');

    $id = $_POST['id'];

    $sql = "SELECT * FROM asistentes WHERE idQr = '$id'";
    $resultadoSql = $conn->query($sql);
    $rowSql = $resultadoSql->fetch_assoc();

    $matricula = $rowSql['numero_control'];
    $apellido_paterno = $rowSql['apellidos'];
    $apellido_materno = $rowSql['apellido_m'];
    $curp = $rowSql['curp'];
    $nombre = $rowSql['nombre'];
    $carrera = $rowSql['carrera'];
    $concatenado = $rowSql['idQr'];

    echo json_encode(
        array(
            'matricula'=>$matricula,
            'apellido_paterno'=>$apellido_paterno,
            'apellido_materno'=>$apellido_materno,
            'nombre'=>$nombre,
            'carrera'=>$carrera,
            'curp'=>$curp,
            'nombre'=>$nombre,
            'concatenado'=>$concatenado
        ));

?>