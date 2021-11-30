<!-- slider -->

<?php if (!empty($images)) : ?>

    <div class="o-wrapper">
        <div class="c-banner-slider">
            <div class="c-banner-slider__slider js-banner-slider">
                <?php foreach ($images as $image) : ?>
                    <img class="c-banner-slider__item" src="<?php echo $image; ?>">

                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php endif; ?>