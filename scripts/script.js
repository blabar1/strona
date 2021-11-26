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
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
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

var prevScrollpos = window.pageYOffset;

