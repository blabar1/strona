<div class=" col-xs-12 col-sm-12 col-xl-9 col-lg-9 col-md-9">
    <div class="c-categoryProducts-list">
        <div class="c-categoryProducts-list__thumbnail" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
        <div class="c-categoryProducts-list__inside">

            <div class="c-categoryProducts-list__content">
                <div class="c-categoryProducts-list__name-container">
                    <div class="c-categoryProducts-list__name">
                        <h3 title="<?php echo $name; ?>"><span class="c-categoryProducts-list__name-span">
                                <?php echo $name; ?>
                            </span></h3>
                    </div>
                    <div class="c-categoryProducts-list__description">
                        <ul>
                            <li class="c-categoryProducts-list__description-element"><?php echo $description1; ?></li>
                            <li class="c-categoryProducts-list__description-element"><?php echo $description1; ?></li>
                            <li class="c-categoryProducts-list__description-element"><?php echo $description1; ?></li>
                            <li class="c-categoryProducts-list__description-element"><?php echo $description1; ?></li>

                        </ul>
                    </div>
                </div>
                <div class="c-categoryProducts-list__price-container">
                    <div class="c-categoryProducts-list__price"><?php echo ($price . " zł"); ?></div>
                    <div class="c-categoryProducts-list__button-container">
                        <?php get_element("elements/element-basket-button.php", array(
                            'id' => "XD"
                        )); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php get_element("elements/element-basket-button-modal.php", array(
    'thumbnail' => "images/komputerek.jpg",
    'name' => "nazwa",
    'price' => "cena"
)); ?>