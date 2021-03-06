<div class="c-categoryProducts-list-wrapper">
    <div>
        <div class="c-categoryProducts-list fade-in ">

            <div class="c-categoryProducts-list__thumbnail" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
            <div class="c-categoryProducts-list__inside">
                <?php
                $named = str_replace(' ', '-', $name);
                ?> <a href="productPage.php?name=<?php echo $named; ?>&id=<?php echo $id; ?>">
                    <div class="c-categoryProducts-list__content">
                        <div class="c-categoryProducts-list__name-container">

                            <div class="c-categoryProducts-list__name">
                                <h3 title="<?php echo $name; ?>"><span class="c-categoryProducts-list__name-span">
                                        <?php echo $name; ?>
                                    </span></h3>
                            </div>
                </a>
                <div class="c-categoryProducts-list__description">
                    <ul>
                        <?php
                        $ilosc = sizeof($description);
                        if ($ilosc)
                            for ($i = 0; $i < $ilosc; $i++) {
                                print('<p class="c-categoryProducts-list__description-span">
                                            <li class="c-categoryProducts-list__description-element">' . $description[$i] . ' </li>
                                            </p>');
                            }
                        ?>
                    </ul>
                </div>
            </div>


            <div class="c-categoryProducts-list__price-container">
                <div class="c-categoryProducts-list__price"><?php echo ($price . " zł"); ?></div>

                <div class="c-categoryProducts-list__button-container">
                    <?php get_element("elements/element-basket-button.php", array(
                        'id' => $id
                    )); ?>
                </div>
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