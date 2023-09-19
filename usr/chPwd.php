<html>
    <header>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>

    <?php
        require('../admin/prcd/qc.php');
        $id = $_POST['id'];
        $pwd = $_POST['pwd'];
        $dato = "UPDATE usuarios SET pwd = '$pwd' WHERE id = '$id'";
        $resultadoDato = $conn->query($dato);
        
        if($resultadoDato){
            echo "<script type=\"text/javascript\">
            Swal.fire({
                icon: 'success',
                imageUrl: '../../assets/brand/img/somos_fca_halcon_azul_15.png',
                imageHeight: 200,
                imageAlt: 'UACYA UAZ',
                title: 'Datos del evento actualizado',
                text: 'Se actualizó el evento',
                confirmButtonColor: '#3085d6',
                footer: 'UACYA  UAZ'
            }).then(function(){window.location='index.php';});</script>";
                }
        else{
            echo 'No se registró ningún cambio';

        }
    ?>
</html>