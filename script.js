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
                if (jsonData.success = "1")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Admin',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./admin/';});
                }
                else if (jsonData.success = "2")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Eventos',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./eventos/';});
                }
                else if (jsonData.success = "3")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Caja',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./caja/';});
                }
                else if (jsonData.success = "4")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Biblioteca',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./biblioteca/';});
                }
                else if (jsonData.success = "5")
                {
                    // location.href = 'my_profile.php';
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Centro de Cómputo',
                        text: 'Credenciales correctas',
                        footer: 'UACYA UAZ'
                    }).then(function(){window.location='./centro_computo/';});
                }
                else if (jsonData.success = "6")
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

// valicación CURP
function validarInput(input) {
    var curp = input.value.toUpperCase(),
        resultado = document.getElementById("result-username"),
        valido = "No válido";
    
    if (curpValida(curp)) {
        valido = "Válido";
        alert("CURP válida");
        document.getElementById("btnReg").disabled = false;
        
    } else {
        alert("CURP No válida");
        document.getElementById("btnReg").disabled = true;
        
    }
        
}
function curpValida(curp) {
var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0\d|1[0-2])(?:[0-2]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
    validado = curp.match(re);

if (!validado)  //Coincide con el formato general?
    return false;

//Validar que coincida el dígito verificador
function digitoVerificador(curp17) {
    //Fuente https://consultas.curp.gob.mx/CurpSP/
    var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
        lngSuma      = 0.0,
        lngDigito    = 0.0;
    for(var i=0; i<17; i++)
        lngSuma= lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
    lngDigito = 10 - lngSuma % 10;
    if(lngDigito == 10)
        return 0;
    return lngDigito;
}
if (validado[2] != digitoVerificador(validado[1])) 
    return false;
    
return true; //Validado
}

function validarInputsNombre(n){
    var inputN = n;
    if(inputN == ""){
        alert('Debes llenar el campo nombre');
    }
}