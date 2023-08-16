// function cargaWeb(){


// }

function verPwd(){
    document.getElementById("newPass").setAttribute('type','text');
    document.getElementById("btnPwd").setAttribute('onclick','esconderPwd()');
    document.getElementById("eyePwd").setAttribute('class','bi bi-eye-slash');
    
}
function esconderPwd(){
    document.getElementById("newPass").setAttribute('type','password');
    document.getElementById("btnPwd").setAttribute('onclick','verPwd()');
    document.getElementById("eyePwd").setAttribute('class','bi bi-eye-fill');
}