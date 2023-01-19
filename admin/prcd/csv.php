<?php    
    session_start();
    include('qconn/qc.php');

    date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
$id = $_POST['id'];

//                   if (isset($_POST['submit']))
// {
 
    // Allowed mime types
    $fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );
 
    // Validate whether selected file is a CSV file
    if (!empty($_FILES['csv']['name']) && in_array($_FILES['csv']['type'], $fileMimes))
    {
 
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['csv']['tmp_name'], 'r');
 
            // Skip the first line
            fgetcsv($csvFile);
 
            // Parse data from CSV file line by line
             // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE)
            {
                // Get row data
                $nombre = $getData[0];
                $apellido_p = $getData[1];
                $apellido_m = $getData[2];
                $celular = $getData[3];
                $tipo_invitado = $getData[4];
                $id_evento = $getData[5];
 
                // If user already exists in the database with the same email
                // $query = "SELECT id FROM invitados WHERE id_evento = '" . $getData[5] . "'";
 
                $check = mysqli_query($conn, $query);
 
                // if ($check->num_rows > 0)
                // {
                //     mysqli_query($conn, "UPDATE users SET name = '" . $name . "', phone = '" . $phone . "', status = '" . $status . "', created_at = NOW() WHERE email = '" . $email . "'");
                // }
                // else
                // {
                     mysqli_query($conn, "INSERT INTO invitados (nombre, apellido_p, apellido_m, celular, tipo_invitado, id_evento) VALUES ('" . $nombre . "', '" . $apellido_p . "', '" . $apellido_m . "', '" . $celular . "', '" . $tipo_invitado . "', '" . $id_evento . "')");
 
                // }
            }
 
            // Close opened CSV file
            fclose($csvFile);
 
            header("Location: ../home_events.php?id=$id");
         
    }
    else
    {
        echo "Please select valid file";
    }
// }
?>