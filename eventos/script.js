
            //   abrir la cámara
              function abrirCamara(){

              document.getElementById("imagenFCA").hidden = true;  
              document.getElementById("preview").hidden = false;  

              let scanner = new Instascan.Scanner({video:document.getElementById('preview') });
              scanner.addListener('scan', function (content) {
                console.log(content);
              });
              Instascan.Camera.getCameras().then(function(cameras) {
                if (cameras.length > 0) {
                  scanner.start(cameras[0]);
                } else {
                  // console.error('No cameras found.');
                  alert("No se encontró cámara");
                }
              }).catch(function (e){
                console.error(e);
              }); 

              scanner.addListener('scan',function(c){ //lee code
                var evento = document.getElementById('evento').value;
                document.getElementById('textQR').value=c; //valor del QR
                document.getElementById("myAudio").play(); //ejecuta audio
                $.ajax({
                  type:"POST",
                  url:"prcd/checkin.php",
                  data:{
                    c:c,
                    evento:evento
                  },
                  dataType: "html",
                  async:true,
                  cache: false,
                    success: function(response)
                    {
                        var jsonData = JSON.parse(response);
         
                        // user is logged in successfully in the back-end
                        // let's redirect
                        if (jsonData.success == "0")
                        {
                          Swal.fire({
                            icon: 'error',
                            title: 'Usuario registrado previamente',
                            text: 'Ya tenía acceso registrado',
                            footer: 'UACYA | UAZ'
                          // }).then(function(){window.location='../index.php';});
                          });
                        }
                        else if (jsonData.success == "1")
                        {
                            // location.href = 'my_profile.php';
                            Swal.fire({
                                icon: 'success',
                                title: 'Usuario correcto',
                                text: 'Credenciales correctas',
                                footer: 'INJUVENTUD</a>'
                            });
                        }
                        else if (jsonData.success == "3")
                        {
                            // location.href = 'my_profile.php';
                            Swal.fire({
                                icon: 'error',
                                title: 'NO EXISTE REGISTRO',
                                text: 'Credenciales incorrectas',
                                footer: 'UACYA | UAZ'
                            });
                        }
                        
                   }           
                  });
                  // event.preventDefault();
                // scanner.stop();
                });

                $('#botonCerrar').click(function () { 
                  scanner.stop();
                  document.getElementById("imagenFCA").hidden = false; 
                  document.getElementById("preview").hidden = true; 
                });
                // $('body').unload(function () { 
                //   scanner.stop();
                // });

            }

            function checkIn(){
              alert('Realizó check-in');
            }