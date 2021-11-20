<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>

<?php get_element("elements/element-banner-slider.php", array(
    'images' => ['images/slider_item_1.jpg', 'images/slider_item_1.jpg', 'images/slider_item_3.jpg']
)); ?>

<!-- small gallery -->
<div class="o-sideBySide">

    <div class="c-small-gallery">
        <div class="o-wrapper">

            <div class="c-small-gallery-container">
                <div class=c-small-gallery-container-decor style="background-image: url('images/ozdoba_corgi_1.png');"></div>

                <div class="c-small-gallery__slider js-small-gallery-slider">
                    <div class="c-small-gallery__slider-item" style="background-image: url('images/karma_dla_kota.png');"></div>
                    <div class="c-small-gallery__slider-item" style="background-image: url('images/karma_dla_psa.png');"></div>
                    <div class="c-small-gallery__slider-item" style="background-image: url('images/karma_dla_kota.png');"></div>
                    <div class="c-small-gallery__slider-item" style="background-image: url('images/karma_dla_kota.png');"></div>
                </div>
                <div class="c-small-gallery__slider-nav js-small-gallery-slider-nav">
                    <div class="c-small-gallery__slider-item-nav" style="background-image: url('images/karma_dla_kota.png');"></div>
                    <div class="c-small-gallery__slider-item-nav" style="background-image: url('images/karma_dla_psa.png');"></div>
                    <div class="c-small-gallery__slider-item-nav" style="background-image: url('images/karma_dla_kota.png');"></div>
                    <div class="c-small-gallery__slider-item-nav" style="background-image: url('images/karma_dla_kota.png');"></div>
                </div>
            </div>
        </div>
    </div>
   
</div>

<?php get_element("templates/footer.php"); ?>

<?php include_once "footer.php"; ?>