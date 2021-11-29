<div class="c-basket-list-wrapper">
    <div>

        <div class="c-basket-list ">
            <div class="c-basket-list__thumbnail" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
            <div class="c-basket-list__inside">

                <div class="c-basket-list__content">
                    <div class="c-basket-list__name-container">
                        <div class="c-basket-list__name">
                            <h3 title="<?php echo $name; ?>"><span class="c-basket-list__name-span">
                                    <?php echo $name; ?>
                                </span></h3>
                        </div>
                    </div>
                    <div class="c-basket-list__price-container">
                        <div class="c-basket-list__price"><?php echo ($price . " zł"); ?></div>
                        <div class="c-basket-list__select-container">

                            <select class="c-basket-list__select">
                                <option>1</option>
                                <option>1</option>
                                <option>1</option>
                                <option>1</option>
                                <option>1</option>
                                <option>1</option>
                            </select>
                        </div>
                        <div class="c-basket-list__button-container">
                            <?php get_element("elements/element-basket-delete-button.php", array(
                                'id' => "XD"
                            )); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>