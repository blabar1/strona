var loging = document.getElementById("loging");
var registerg = document.getElementById("registerg");
var login = document.getElementById("login");
var register = document.getElementById("register");
loging.addEventListener("click", loginf);
registerg.addEventListener("click", registerf);
function loginf(){
    loging.classList.add("c-button-clicked");
    registerg.classList.remove("c-button-clicked");
    login.style.display='block';
    register.style.display='none';
}
function registerf(){
    registerg.classList.add("c-button-clicked");
    loging.classList.remove("c-button-clicked");
    register.style.display='block';
    login.style.display='none';
}
