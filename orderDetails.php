<?php

use function PHPSTORM_META\map;

include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>

<div class="o-wrapper">
    <div class="c-orderDetails-wrapper">
        <div class="row">
            <div class="c-orderDetails-form col-xs-12 col-sm-12 col-xl-5 col-lg-5 col-md-5">
                <div class="c-orderDetails-form-elements-payment">
                    <div class="o-title">1.Metody Płatności</div>
                    <div class="c-orderDetails-form-payment">
                        <form>
                            <div class="c-orderDetails-form-payment-element">
                                <div class="c-orderDetails-form-payment-radio-wrapper">
                                    <input type="radio" name="payment" class="o-radio">
                                </div>
                                <div class="c-orderDetails-form-payment-text">BLIK</div>
                            </div>
                            <div class="c-orderDetails-form-payment-element">
                                <div class="c-orderDetails-form-payment-radio-wrapper">
                                    <input type="radio" name="payment" class="o-radio">
                                </div>
                                <div class="c-orderDetails-form-payment-text">Karta płatnicza online</div>
                            </div>
                            <div class="c-orderDetails-form-payment-element">
                                <div class="c-orderDetails-form-payment-radio-wrapper">
                                    <input type="radio" name="payment" class="o-radio">
                                </div>
                                <div class="c-orderDetails-form-payment-text">Płatność online</div>
                            </div>
                            <div class="c-orderDetails-form-payment-element">
                                <div class="c-orderDetails-form-payment-radio-wrapper">
                                    <input type="radio" name="payment" class="o-radio">
                                </div>
                                <div class="c-orderDetails-form-payment-text">Przy odbiorze</div>
                            </div>
                        </form>
                    </div>
                </div>



                <div class="c-orderDetails-form-elements-delivering">
                    <div class="o-title">2.Metody dostawy</div>
                    <div class="c-orderDetails-form-delivery">
                        <form>
                            <div class="c-orderDetails-form-delivery-element">
                                <div class="c-orderDetails-form-delivery-radio-wrapper">
                                    <input type="radio" name="delivery" class="o-radio">
                                </div>
                                <div class="c-orderDetails-form-delivery-text">Kurier – InPost, UPS, FedEx, DTS lub Poczta Polska</div>
                                <div class="c-orderDetails-form-delivery-price">(cena)</div>
                            </div>

                            <div class="c-orderDetails-form-delivery-element">
                                <div class="c-orderDetails-form-delivery-radio-wrapper">
                                    <input type="radio" name="delivery" class="o-radio">
                                </div>
                                <div class="c-orderDetails-form-delivery-text">Odbiór osobisty w salonie </div>
                                <div class="c-orderDetails-form-delivery-price">(cena)</div>
                            </div>
                            <div class="c-orderDetails-form-delivery-element">
                                <div class="c-orderDetails-form-delivery-radio-wrapper">
                                    <input type="radio" name="delivery" class="o-radio">
                                </div>
                                <div class="c-orderDetails-form-delivery-text">Paczkomaty 24/7</div>
                                <div class="c-orderDetails-form-delivery-price">(cena)</div>
                            </div>
                            <div class="c-orderDetails-form-delivery-element">
                                <div class="c-orderDetails-form-delivery-radio-wrapper">
                                    <input type="radio" name="delivery" class="o-radio">
                                </div>
                                <div class="c-orderDetails-form-delivery-text">Punkty odbioru – Poczta Polska, Żabka, Ruch, Orlen i inne</div>
                                <div class="c-orderDetails-form-delivery-price">(cena)</div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="c-orderDetails-form-elements-informations ">
                    <div class="o-title">3.Dane Zamówienia</div>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control c-orderDetails-form__form-input" id="inputname" placeholder="Imie i nazwisko ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control c-orderDetails-form__form-input" id="inputaddress" placeholder="Ulica i numer domu">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control c-orderDetails-form__form-input" id="inputpostalcode" placeholder="Kod pocztowy">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control c-orderDetails-form__form-input" id="inputplace" placeholder="Miejscowość">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control c-orderDetails-form__form-input" id="inputemail" placeholder="Email">
                        </div>
                    </form>
                </div>
            </div>
            <div class="c-orderDetails-payment col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7">
                <div class="c-orderDetails-payment-wrapper">
                    <div class="o-wrapper">
                        <div class="c-orderDetails-payment-text">
                            <div class="c-orderDetails-payment-text-row">
                                <div class="c-orderDetails-payment-basket-value__text"> Wartość koszyka: </div>
                                <div class="c-orderDetails-payment-basket-value__value"> cena </div>
                            </div>
                            <div class="c-orderDetails-payment-text-row">
                                <div class="c-orderDetails-payment-basket-value__text"> Dostawa: </div>
                                <div class="c-orderDetails-payment-basket-value__value"> cena </div>
                            </div>
                            <div class="c-orderDetails-payment-text-row">
                                <div class="c-orderDetails-payment-basket-value__text-last">
                                    <h2>Do zapłaty:</h2>
                                </div>
                                <div class="c-orderDetails-payment-basket-value__value-last">
                                    <h2>cena</h2>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="c-orderDetails-form__form-button-container">
                                <button type="submit" class="c-orderDetails-form__form-button">Przejdź do podsumowania</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>



<?php get_element("templates/footer.php"); ?>
<?php include_once "footer.php"; ?>