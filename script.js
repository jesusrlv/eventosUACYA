 // LOGIN

 $(document).ready(function() {
    $('#pwdForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'prcd/login.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(JSON.stringify(response));
 
                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData.success == "1")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Admin',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./admin/';});
                }
                else if (jsonData.success == "2")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Eventos',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./eventos/';});
                }
                else if (jsonData.success == "3")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Caja',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./caja/';});
                }
                else if (jsonData.success == "4")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Biblioteca',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./biblioteca/';});
                }
                else if (jsonData.success == "5")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Centro de Cómputo',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./centro_computo/';});
                }
                else if (jsonData.success == "6")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Alumno UACYA',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./usr/';});
                }
                else
                {
                    // alert('Invalid Credentials!');
                    Swal.fire({
                        icon: 'error',
                        title: 'Datos incorrectos',
                        text: 'Credenciales incorrectas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='index.html';});
                    // });
                }
           }
       });
     });
});

// Registro de visitas
function registrarVisitas(){
    var nombre = document.getElementById('nombreVisitas').value;
    var curp = document.getElementById('curpVisitas').value;
    $.ajax({
        type: "POST",
        url: 'prcd/accesosV.php',
        data: {
            nombre:nombre,
            curp:curp
        },
        success: function(response)
        {
            var jsonData = JSON.parse(JSON.stringify(response));
            var success = jsonData.success;

            if(success = 0){
                Swal.fire({
                    icon: 'success',
                    title: 'Registro exitoso',
                    text: 'Usuario externo',
                    footer: 'UACYA UAZ'
                });
            }

            else if(success = 1){
                Swal.fire({
                    icon: 'warning',
                    title: 'Registro anteriormente registrado',
                    text: 'Usuario externo',
                    footer: 'UACYA UAZ'
                });
            }

            else if(success = 2){
                Swal.fire({
                    icon: 'error',
                    title: 'Error al registrar',
                    text: 'Usuario externo',
                    footer: 'UACYA UAZ'
                });
            }
        }
    });

}