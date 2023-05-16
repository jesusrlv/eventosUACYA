<?php
include('prcd/qc.php');

$id = $_POST['id'];

$sql = "SELECT * FROM asistentes WHERE idQr = '$id'";
$resultadoSql = $conn->query($sql);


   

?>