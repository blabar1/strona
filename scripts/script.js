const initSlider = () => {
    const sliders = document.querySelectorAll(".js-banner-slider");
    if (sliders.length > 0) {
        sliders.forEach(slider => {
            $(slider).slick({
                dots: true,
                prevArrow: '<i class="fas fa-angle-left c-banner-slider__arrow c-banner-slider__arrow--left"></i>',
                nextArrow: '<i class="fas fa-angle-right c-banner-slider__arrow c-banner-slider__arrow--right"></i>'
            });
        });
    }

};
initSlider();

const initSliderItems = () => {
    const sliders = document.querySelectorAll(".js-products-slider");

    if (sliders.length > 0) {
        sliders.forEach(slider => {
            $(slider).slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                swipeToSlide: true,
                autoPlay: true,
                responsive: [{

                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
                ]
            });
        });
    }

};
initSliderItems();

var prevScrollpos = window.pageYOffset;

const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
{/* <i class="bi bi-eye-slash" id="togglePassword" ></i> */ }


const togglePassword2 = document.querySelector('#togglePassword_new');
const password2 = document.querySelector('#password_new');

togglePassword2.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
{/* <i class="bi bi-eye-slash" id="togglePassword_new" ></i> */ }

const togglePassword3 = document.querySelector('#togglePassword_newSND');
const password3 = document.querySelector('#password_newSND');

togglePassword3.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password3.getAttribute('type') === 'password' ? 'text' : 'password';
    password3.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
{/* <i class="bi bi-eye-slash" id="togglePassword_newSND" ></i> */ }


var passwd = document.querySelector('#password_new');
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
    let passwdLength = document.querySelector('#password_new').value.length;
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