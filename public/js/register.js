function setId(x){
    if(x == 1){
        document.getElementById('id').disabled = false;
        document.getElementById('id').style.background="#fff";
    }else{
        document.getElementById('id').disabled = true;
        document.getElementById('id').style.background="#cfcfcf";
    }
}

function checkRegister(){
    if(document.getElementById("pwd").value != document.getElementById("pwd_confrim").value){
        document.getElementById("textpassword").innerHTML = "รหัสผ่านไม่ตรงกัน";
        return false;
    }
}