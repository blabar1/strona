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