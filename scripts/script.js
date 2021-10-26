
$(function () {

    var width = window.innerWidth;
    $(window).resize(function () {
        width = window.innerWidth;
        $slideContainer.css("margin-left", -3 * width);
        console.log(width);

    });

    var margin = -3 * window.innerWidth;
    var animationSpeed = 500;
    var pause = 7000;
    var currentSlide = 0;
    var $slider = $('.c-banner-slider');
    var $slideContainer = $('.c-banner-slider__slider', $slider);
    var $slides = $('.c-banner-slider__item', $slider);
    var interval;

    function nextSlide() {
        $(window).resize(function () {
            margin = -3 * width;
        });
        margin += width;
        if (margin === 0) {
            margin = -3 * width;
            $slideContainer.animate({"margin-left": -3 * width}, animationSpeed);
        } else {
            $slideContainer.animate({'margin-left': '-=' + width}, animationSpeed);
            currentSlide++;
        }

    }


    function prevSlide() {
        $(window).resize(function () {
            margin = -3 * width;
        });
        margin += width;
        if (margin === 0) {
            margin = -3 * width;
            $slideContainer.animate({"margin-left": -3 * width}, animationSpeed);
        } else {
            $slideContainer.animate({'margin-left': '+=' + width}, animationSpeed);
            currentSlide--;
        }

    }


    function initSlider() {
        $slideContainer.append($slides.clone(true, true));
        $slideContainer.prepend($slides.clone(true, true));
        $slideContainer.css("margin-left", -3 * width);
        $slideContainer.css("width", $('.c-banner-slider__item', $slider).length * width);
        $('.c-banner-slider__arrow--right').on('click', function () {
            nextSlide();

        });
        $('.c-banner-slider__arrow--left').on('click', function () {
            prevSlide();
        });

    }
    initSlider();




    function startSlider() {
        interval = setInterval(function () {
            nextSlide();
        }, pause);
    }

    function pauseSlider() {
        clearInterval(interval);
    }

    $slideContainer
            .on('mouseenter', pauseSlider)
            .on('mouseleave', startSlider);



    startSlider();
});







const initTextOptions = () => {
    const textOptions = document.querySelectorAll(".js-text-options");

    if (textOptions.length > 0) {
        textOptions.forEach(textOption => {
            var menuItems = textOption.querySelectorAll(".js-text-options-menu-item");
            var textItems = textOption.querySelectorAll(".js-text-options-item");

            menuItems.forEach(menuItem => {
                var target = menuItem.dataset.target;
                var targetItem = textOption.querySelector(".js-text-options-item[data-id='" + target + "'");

                menuItem.addEventListener("click", () => {
                    textItems.forEach(el => {
                        el.classList.remove("is-open");
                    });
                    menuItems.forEach(el => {
                        el.classList.remove("is-open");
                    });
                    targetItem.classList.add("is-open");
                    menuItem.classList.add("is-open");
                });
            });
        });
    }
};
initTextOptions();

const initSliderItems = () => {
    const sliders = document.querySelectorAll(".js-products-slider");

    if (sliders.length > 0) {
        sliders.forEach(slider => {
            $(slider).slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoPlay: true,
                responsive: [
                    {
                        breakpoint: 1000,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    }

};
initSliderItems();

const initSliderGallery = () => {
    const slidersGallery = document.querySelectorAll(".js-small-gallery-slider");
    if (slidersGallery.length > 0) {
        slidersGallery.forEach(slidersGallery => {
            $(slidersGallery).slick({
                slidesToScroll: 1,
                prevArrow: '<i class="fas fa-angle-left c-banner-slider__arrow c-banner-slider__arrow--left"></i>',
                nextArrow: '<i class="fas fa-angle-right c-banner-slider__arrow c-banner-slider__arrow--right"></i>',
                asNavFor: '.js-small-gallery-slider-nav',
                fade: true
            });
        });
    }
    const miniSliders = document.querySelectorAll(".js-small-gallery-slider-nav");
    if (miniSliders.length > 0) {
        miniSliders.forEach(miniSliders => {
            $(miniSliders).slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.js-small-gallery-slider',

                dots: false,
                centerMode: true,
                focusOnSelect: true
            });
        });
    }
};
initSliderGallery();

const initHamburger = () => {
    const hamburger = document.querySelector('.o-hamburger');
    const list = document.querySelector('.c-menu__list');
    const basketIcon = document.querySelector('.c-icon-basket');
    const basketMenu = document.querySelector('.c-menu-basket');
    const startList = document.querySelector('.c-menu-start-list');
    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle('is-active');
        list.classList.toggle('is-active');
        basketIcon.classList.toggle('is-active');
        basketMenu.classList.toggle('is-active');
        startList.classList.toggle('is-active');
    });
};
initHamburger();

const initExtendPhoto = (imgs) => {
    const photo = document.getElementById("expandedImg");
    photo.src = imgs.src;
    document.querySelector('.js-gallery-extended-container').style.display = "flex";

};
const initExtendPhotoProduct = (imgs) => {
    const photo = document.getElementById("expandedImg");
    photo.src = imgs.src;
    document.querySelector('.js-product-extended-container').style.display = "flex";

};
$(document).ready(function () {
    $('#smallPhotos img').on({
        mouseover: function () {
            $(this).css({
                'cursor': 'pointer',
                'border-Color': '#676767'
            });
        },
        mouseout: function () {
            $(this).css({
                'cursor': 'default',
                'border-color': '#cfcfcf'
            });
        },
        click: function () {
            var image = $(this).attr('src');
            $('.mainImage').fadeOut(500, function () {
                $(this).attr('src', image);
            }).fadeIn(500);
        }
    });
});