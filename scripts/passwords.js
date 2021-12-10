function check(){
    p1 = document.getElementById('password_new').value;
    p2 = document.getElementById('password_newSND').value;
    if(p1==p2){
        document.getElementById('guzik').disabled = false;
        document.getElementById('alert').style.visibility = "hidden";
    }else{
        document.getElementById('guzik').disabled = true;
        document.getElementById('alert').style.visibility = "visable";
    }
}