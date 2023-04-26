<?php
include('../prcd/qc.php');
if(empty($_POST['busqueda']) || ($_POST['busqueda'] == null)){
    echo'
        <tr>
            <td colspan="9" class="text-center table-danger">Sin datos</td>
        </tr>
        ';

}
else if(isset($_POST['busqueda'])){
$variable = $_POST['busqueda'];
$var = "SELECT * FROM asistentes WHERE nombre LIKE '%$variable%' OR apellidos LIKE '%$variable%' OR apellido_m LIKE '%$variable%' OR curp LIKE '%$variable%' OR numero_control LIKE '%$variable%' ";
$resultadoVariable = $conn->query($var);
$filaVar = $resultadoVariable->num_rows;
    if($filaVar > 0){
    $x=0;
        while($rowVar = $resultadoVariable->fetch_assoc()){
            $x++;
            echo'
            <tr>
                <td>'.$x.'</td>
                <td>'.$rowVar['numero_control'].'</td>
                <td>'.$rowVar['apellidos'].'</td>
                <td>'.$rowVar['apellido_m'].'</td>
                <td>'.$rowVar['nombre'].'</td>
                <td>'.$rowVar['carrera'].'</td>
                <td>'.$rowVar['curp'].'</td>
                <td><i class="bi bi-pencil-square"></i></td>
                <td><a href="#" style="text-decoration:none" data-bs-toggle="modal" data-bs-target="#exampleModal'.$rowVar['id'].'"><i class="bi bi-qr-code-scan h3"></i></a></td>
            </tr>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal'.$rowVar['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>

        ';

        }
    }
    else{
        echo'
        <tr>
            <td colspan="9" class="text-center table-danger">Sin datos</td>
        </tr>
        ';
    }
}