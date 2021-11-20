<!-- slider -->

<?php if (!empty($images)) : ?>

    <div class="o-wrapper">
        <div class="c-banner-slider">
            <div class="c-banner-slider__slider js-banner-slider">
                <?php foreach ($images as $image) : ?>
                    <div class="c-banner-slider__item" style="background-image: url(<?php echo $image; ?>);"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php endif; ?>