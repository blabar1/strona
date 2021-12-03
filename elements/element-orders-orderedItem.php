<div class="c-ordersItem-list-wrapper">
    <div>
        <div class="c-ordersItem-list ">
            <div class="c-ordersItem-list__thumbnail" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
            <div class="c-ordersItem-list__inside">

                <div class="c-ordersItem-list__content">
                    <div class="c-ordersItem-list__name-container">
                        <a href="productPage.php">
                            <div class="c-ordersItem-list__name">
                                <h3 title="<?php echo $name; ?>"><span class="c-ordersItem-list__name-span">
                                        <?php echo $name; ?>
                                    </span></h3>
                            </div>
                        </a>
                        <div class="c-ordersItem-list__quantity-conatiner">
                            <div class="c-ordersItem-list__quantity"><?php echo $quantity; ?></div><span class="times-image"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg></span>
                            <div class="c-ordersItem-list__quantity-price"><?php echo ($price . " zł"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="c-ordersItem-list__price-container">
                        <div class="c-ordersItem-list__price"><?php echo ($price . " zł"); ?></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>