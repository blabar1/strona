<!-- product gallery-->
<div class="col-xs-12 col-sm-6 col-xl-4 col-lg-5 col-md-5">
    <div class="c-productPage-container-gallery-block">
        <?php if (!empty($images)) : ?>

            <div class="o-wrapper">
                <div class="c-productPage-container-gallery">
                    <div class="c-productPage-container-gallery__slider js-gallery-product">
                        <img ondblclick="initExtendPhoto(this);" class="c-productPage-slider__item" src="<?php echo $thumbnail; ?>">
                        <?php foreach ($images as $image) : ?>
                            <img ondblclick="initExtendPhoto(this);" class="c-productPage-slider__item" src="<?php echo $image; ?>">
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        <?php endif; ?>

        <div class="c-gallery-extended-container js-gallery-extended-container " onclick="document.querySelector('.js-gallery-extended-container').style.display = 'none'">
            <div class="c-gallery-extended-container-photo">
                <span onclick="document.querySelector('.js-gallery-extended-container').style.display = 'none'" class="close-button">&times;</span>
                <img id="expandedImg" alt="zdjecie" onclick="">
            </div>
        </div>
    </div>
</div>