<div class="o-wrapper">
    <div class="c-basket-payment-wrapper">
        <div class="c-basket-payment-container">
            <div class="c-basket-payment-desc">
                <div class="c-basket-payment__title">
                    Do zapłaty:
                </div>
                <div class="c-basket-payment__value">
                    <?php echo $price . " zł"; ?>
                </div>
            </div>
            <form action="orderDetails.php" method="POST">
            <input type="hidden" name="total" value="<?php echo $price; ?>">
            <div class="c-basket-payment__button-body">    
                <button type="submit" class="c-basket-payment__button-element">Przejdź do płatności </buttom>
            </div>
            </form>
        </div>
    </div>

</div>