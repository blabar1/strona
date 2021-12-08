
const togglePassword4 = document.querySelector('#togglePassword_new2');
const password4 = document.querySelector('#password_new2');
togglePassword4.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password4.getAttribute('type') === 'password' ? 'text' : 'password';
    password4.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
{/* <i class="bi bi-eye-slash" id="togglePassword_new" ></i> */ }



var passwd = document.querySelector('#password_new2');
var ele1 = document.querySelector('#element-1');
var ele2 = document.querySelector('#element-2');
var ele3 = document.querySelector('#element-3');
var ele4 = document.querySelector('#element-4');
var ele5 = document.querySelector('#element-5');
var ele6 = document.querySelector('#element-6');
var ele7 = document.querySelector('#element-7');
var ele8 = document.querySelector('#element-8');
var ele9 = document.querySelector('#element-9');
passwd.addEventListener('input', function () {
    let passwdLength = document.querySelector('#password_new2').value.length;
    if (passwdLength >= 0 && passwdLength <= 6) {
        ele1.style.backgroundColor = "red";

        ele2.style.backgroundColor = "rgb(221, 221, 221)";
        ele3.style.backgroundColor = "rgb(221, 221, 221)";
        ele4.style.backgroundColor = "rgb(221, 221, 221)";
        ele5.style.backgroundColor = "rgb(221, 221, 221)";
        ele6.style.backgroundColor = "rgb(221, 221, 221)";
        ele7.style.backgroundColor = "rgb(221, 221, 221)";
        ele8.style.backgroundColor = "rgb(221, 221, 221)";
        ele9.style.backgroundColor = "rgb(221, 221, 221)";
        document.getElementById('c-account-passMeter-feedback').innerHTML = "<div style='color:red;'>słabe</div>";
    }
    if (passwdLength >= 6 && passwdLength <= 7) {
        ele1.style.backgroundColor = "red";
        ele2.style.backgroundColor = "red";
        ele3.style.backgroundColor = "rgb(221, 221, 221)";
        ele4.style.backgroundColor = "rgb(221, 221, 221)";
        ele5.style.backgroundColor = "rgb(221, 221, 221)";
        ele6.style.backgroundColor = "rgb(221, 221, 221)";
        ele7.style.backgroundColor = "rgb(221, 221, 221)";
        ele8.style.backgroundColor = "rgb(221, 221, 221)";
        ele9.style.backgroundColor = "rgb(221, 221, 221)";
        document.getElementById('c-account-passMeter-feedback').innerHTML = "<div style='color:red;'>słabe</div>";
    }
    if (passwdLength >= 7 && passwdLength <= 8) {
        ele1.style.backgroundColor = "red";
        ele2.style.backgroundColor = "red";
        ele3.style.backgroundColor = "red";

        ele4.style.backgroundColor = "rgb(221, 221, 221)";
        ele5.style.backgroundColor = "rgb(221, 221, 221)";
        ele6.style.backgroundColor = "rgb(221, 221, 221)";
        ele7.style.backgroundColor = "rgb(221, 221, 221)";
        ele8.style.backgroundColor = "rgb(221, 221, 221)";
        ele9.style.backgroundColor = "rgb(221, 221, 221)";
        document.getElementById('c-account-passMeter-feedback').innerHTML = "<div style='color:red;'>słabe</div>";
    }

    if (passwdLength >= 8 && passwdLength <= 9) {
        ele4.style.backgroundColor = "yellow";
        ele3.style.backgroundColor = "yellow";
        ele2.style.backgroundColor = "yellow";
        ele1.style.backgroundColor = "yellow";

        ele5.style.backgroundColor = "rgb(221, 221, 221)";
        ele6.style.backgroundColor = "rgb(221, 221, 221)";
        ele7.style.backgroundColor = "rgb(221, 221, 221)";
        ele8.style.backgroundColor = "rgb(221, 221, 221)";
        ele9.style.backgroundColor = "rgb(221, 221, 221)";
        document.getElementById('c-account-passMeter-feedback').innerHTML = "dobre";
    }
    if (passwdLength >= 9 && passwdLength <= 10) {
        ele5.style.backgroundColor = "yellow";
        ele4.style.backgroundColor = "yellow";
        ele3.style.backgroundColor = "yellow";
        ele2.style.backgroundColor = "yellow";
        ele1.style.backgroundColor = "yellow";

        ele6.style.backgroundColor = "rgb(221, 221, 221)";
        ele7.style.backgroundColor = "rgb(221, 221, 221)";
        ele8.style.backgroundColor = "rgb(221, 221, 221)";
        ele9.style.backgroundColor = "rgb(221, 221, 221)";
        document.getElementById('c-account-passMeter-feedback').innerHTML = "słabe";
    }

    if (passwdLength >= 10 && passwdLength <= 11) {
        ele6.style.backgroundColor = "yellow";
        ele5.style.backgroundColor = "yellow";
        ele4.style.backgroundColor = "yellow";
        ele3.style.backgroundColor = "yellow";
        ele2.style.backgroundColor = "yellow";
        ele1.style.backgroundColor = "yellow";

        ele7.style.backgroundColor = "rgb(221, 221, 221)";
        ele8.style.backgroundColor = "rgb(221, 221, 221)";
        ele9.style.backgroundColor = "rgb(221, 221, 221)";
        document.getElementById('c-account-passMeter-feedback').innerHTML = "słabe";
    }
    if (passwdLength >= 11 && passwdLength <= 12) {
        ele7.style.backgroundColor = "green";
        ele6.style.backgroundColor = "green";
        ele5.style.backgroundColor = "green";
        ele4.style.backgroundColor = "green";
        ele3.style.backgroundColor = "green";
        ele2.style.backgroundColor = "green";
        ele1.style.backgroundColor = "green";


        ele8.style.backgroundColor = "rgb(221, 221, 221)";
        ele9.style.backgroundColor = "rgb(221, 221, 221)";
        document.getElementById('c-account-passMeter-feedback').innerHTML = "idealne";
    }
    if (passwdLength >= 12 && passwdLength <= 13) {
        ele8.style.backgroundColor = "green";
        ele7.style.backgroundColor = "green";
        ele6.style.backgroundColor = "green";
        ele5.style.backgroundColor = "green";
        ele4.style.backgroundColor = "green";
        ele3.style.backgroundColor = "green";
        ele2.style.backgroundColor = "green";
        ele1.style.backgroundColor = "green";
        ele9.style.backgroundColor = "rgb(221, 221, 221)";
        document.getElementById('c-account-passMeter-feedback').innerHTML = "idealne";
    }
    if (passwdLength >= 13) {
        ele9.style.backgroundColor = "green";
        ele8.style.backgroundColor = "green";
        ele7.style.backgroundColor = "green";
        ele6.style.backgroundColor = "green";
        ele5.style.backgroundColor = "green";
        ele4.style.backgroundColor = "green";
        ele3.style.backgroundColor = "green";
        ele2.style.backgroundColor = "green";
        ele1.style.backgroundColor = "green";
        document.getElementById('c-account-passMeter-feedback').innerHTML = "idealne";
    }
    if (passwdLength == 0) {
        ele1.style.backgroundColor = "rgb(221, 221, 221)";

        ele2.style.backgroundColor = "rgb(221, 221, 221)";
        ele3.style.backgroundColor = "rgb(221, 221, 221)";
        ele4.style.backgroundColor = "rgb(221, 221, 221)";
        ele5.style.backgroundColor = "rgb(221, 221, 221)";
        ele6.style.backgroundColor = "rgb(221, 221, 221)";
        ele7.style.backgroundColor = "rgb(221, 221, 221)";
        ele8.style.backgroundColor = "rgb(221, 221, 221)";
        ele9.style.backgroundColor = "rgb(221, 221, 221)";
        document.getElementById('c-account-passMeter-feedback').innerHTML = "brak";

    }



});

const togglePassword5 = document.querySelector('#togglePassword_new3');
const password5 = document.querySelector('#password_new3');
togglePassword5.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password5.getAttribute('type') === 'password' ? 'text' : 'password';
    password5.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
{/* <i class="bi bi-eye-slash" id="togglePassword_new" ></i> */ }


