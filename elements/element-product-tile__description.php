<div class=" col-xs-12 col-sm-6 col-xl-4 col-lg-4 col-md-4">
    <?php
    $named = str_replace(' ', '-', $name);
    ?>

    <div class="c-categoryProducts-tile">
        <a href="productPage.php?name=<?php echo $named; ?>&id=<?php echo $id; ?>">
            <div class="c-categoryProducts-tile__inside">
                <div class="c-categoryProducts-tile__thumbnail" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
                <div class="c-categoryProducts-tile__content">

                    <div class="c-categoryProducts-tile__name">
                        <h3 title="<?php echo $name; ?>"><span class="c-categoryProducts-tile__name-span">
                                <?php echo $name; ?>
                            </span></h3>
                    </div>
        </a>
        <div class="c-categoryProducts-tile__description">
            <ul>
                <?php
                $ilosc = sizeof($description);
                if ($ilosc)
                    for ($i = 0; $i < $ilosc; $i++) {
                        print('<li class="c-categoryProducts-tile__description-element">' . $description[$i] . ' </li>');
                    }
                ?>
            </ul>
        </div>

        <div class="c-categoryProducts-tile__price-container">
            <div class="c-categoryProducts-tile__price"><?php echo ($price . " zł"); ?></div>
            <div class="c-categoryProducts-tile__button-container">
                <?php get_element("elements/element-basket-button.php", array(
                    'id' => $id
                )); ?>
            </div>
        </div>

    </div>
</div>
</div>


</div>
<?php get_element("elements/element-basket-button-modal.php", array(
    'thumbnail' => $thumbnail,
    'name' => $name,
    'price' => $price,
    'id' => $id
)); ?>