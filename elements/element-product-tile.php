<a href="productPage.php">
    <div class="c-product-tile">

        <div class="c-product-tile__thumbnail" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
        <div class="c-product-tile__content">
            <div class="c-product-tile__category"><?php echo $category; ?></div>
            <div class="c-product-tile__name"><?php echo $name; ?></div>
            <div class="c-product-tile__price"><?php echo ($price . " zł"); ?></div>
        </div>
    </div>
</a>