<?php
    include('qc.php');

    if (isset($_POST['evento']) && isset($_POST['c'])) {
        date_default_timezone_set('America/Mexico_City');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

        $evento = $_POST['evento'];
        $cadena = $_POST['c'];

        $sql = "SELECT * FROM registro WHERE idQr = '$cadena'";
        $resultadoSql = $conn->query($sql);

        if($resultadoSql){
            echo json_encode(array('success' => 0));
        }
        else{
            $sqlQuery ="SELECT * FROM asistentes WHERE idQr = '$cadena'";
            $resultadoSqlQuery = $conn->query($sqlQuery);
            $rowsqlQuery = $resultadoSqlQuery->fetch_assoc();

            $qr = $rowsqlQuery['idQr'];
            $id = $rowsqlQuery['id'];
            $flag = 1;

            $sqlInsert = "INSERT INTO registro (id,evento,asistencia,fecha_registro,idQr) VALUES ('$id','$evento','$flag','$fecha_sistema','$qr')";
            $resultadoSqlInsert = $conn->query($sqlInsert);

            if($resultadoSqlInsert){
                echo json_encode(array('success' => 1));
            }
        }
    }
    else{
        echo json_encode(array('success' => 3));
    }

?>