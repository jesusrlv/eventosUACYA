<?php
    require('../admin/prcd/qc.php');

    $sql = "SELECT * FROM asistentes WHERE numero_control = '$usr'";
    $resultado = $conn -> query($sql);
    $rowSQL = $resultado -> fetch_assoc();


?>