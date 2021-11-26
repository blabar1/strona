<!-- product gallery-->
<div class="c-productPage-container-gallery-block">
    <?php if (!empty($images)) : ?>

        <div class="o-wrapper">
            <div class="c-productPage-container-gallery">
                <div class="c-productPage-container-gallery__slider js-gallery-product">
                    <div class="c-productPage-slider__item" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
                    <?php foreach ($images as $image) : ?>
                        <div class="c-productPage-slider__item" style="background-image: url(<?php echo $image; ?>);"></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    <?php endif; ?>
</div>