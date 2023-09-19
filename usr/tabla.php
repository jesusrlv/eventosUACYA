<?php
    require('../admin/prcd/qc.php');

    $sql = "SELECT * FROM asistentes WHERE numero_control = '$usr'";
    $resultado = $conn -> query($sql);
    $rowSQL = $resultado -> fetch_assoc();

    $sql2 = "SELECT * FROM usuarios WHERE usr = '$usr'";
    $resultado2 = $conn -> query($sql2);
    $rowSQL2 = $resultado2 -> fetch_assoc();

?>