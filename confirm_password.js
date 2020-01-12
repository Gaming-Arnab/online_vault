var password = document.getElementById("password")
, cPassword = document.getElementById("cPassword");

function pwdchk(){
    if(password.value != cPassword.value){
        cPassword.setCustomValidity("Passsword doesn't match");
    } else{
        cPassword.setCustomValidity('');
    }
}

password.onchange = pwdchk;
cPassword.onkeyup = pwdchk;