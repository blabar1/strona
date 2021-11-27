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

const initGallery = () => {
    const sliders = document.querySelectorAll(".js-gallery-product");
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
initGallery();

