<?php

use function PHPSTORM_META\map;

include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>

<div class="o-wrapper">
    <div class="c-orderDetails-wrapper">
        <form action="orderSummary.php" method="POST">
            <div class="row">
                <div class="c-orderDetails-form col-xs-12 col-sm-12 col-xl-5 col-lg-5 col-md-5">
                    <div class="c-orderDetails-form-elements-payment">
                        <div class="o-title">1.Metody Płatności</div>
                        <div class="c-orderDetails-form-payment">
                            <div class="c-orderDetails-form-payment-element">
                                <div class="c-orderDetails-form-payment-radio-wrapper">
                                    <input type="radio" name="payment" class="o-radio" value="1" required checked>
                                </div>
                                <div class="c-orderDetails-form-payment-text">BLIK</div>
                            </div>
                            <div class="c-orderDetails-form-payment-element">
                                <div class="c-orderDetails-form-payment-radio-wrapper">
                                    <input type="radio" name="payment" class="o-radio" value="2">
                                </div>
                                <div class="c-orderDetails-form-payment-text">Karta płatnicza online</div>
                            </div>
                            <div class="c-orderDetails-form-payment-element">
                                <div class="c-orderDetails-form-payment-radio-wrapper">
                                    <input type="radio" name="payment" class="o-radio" value="3">
                                </div>
                                <div class="c-orderDetails-form-payment-text">Płatność online</div>
                            </div>
                            <div class="c-orderDetails-form-payment-element">
                                <div class="c-orderDetails-form-payment-radio-wrapper">
                                    <input type="radio" name="payment" class="o-radio" value="4">
                                </div>
                                <div class="c-orderDetails-form-payment-text">Przy odbiorze</div>
                            </div>
                        </div>
                    </div>



                    <div class="c-orderDetails-form-elements-delivering">
                        <div class="o-title">2.Metody dostawy</div>
                        <div class="c-orderDetails-form-delivery">

                            <div class="c-orderDetails-form-delivery-element">
                                <div class="c-orderDetails-form-delivery-radio-wrapper">
                                    <input onclick="delivery12(0.00)" type="radio" name="delivery" value="2" class="o-radio" required checked>
                                </div>
                                <div class="c-orderDetails-form-delivery-text">Odbiór osobisty w salonie </div>
                                <div class="c-orderDetails-form-delivery-price">0.00 zł</div>
                            </div>
                            <div class="c-orderDetails-form-delivery-element">
                                <div class="c-orderDetails-form-delivery-radio-wrapper">
                                    <input onclick="delivery12(25.00)" type="radio" name="delivery" value="1" class="o-radio">
                                </div>
                                <div class="c-orderDetails-form-delivery-text">Kurier – InPost, UPS, FedEx, DTS lub Poczta Polska</div>
                                <div class="c-orderDetails-form-delivery-price">25.00 zł</div>
                            </div>


                            <div class="c-orderDetails-form-delivery-element">
                                <div class="c-orderDetails-form-delivery-radio-wrapper">
                                    <input onclick="delivery12(16.99)" type="radio" name="delivery" value="3" class="o-radio">
                                </div>
                                <div class="c-orderDetails-form-delivery-text">Paczkomaty 24/7</div>
                                <div class="c-orderDetails-form-delivery-price">16.99 zł</div>
                            </div>
                            <div class="c-orderDetails-form-delivery-element">
                                <div class="c-orderDetails-form-delivery-radio-wrapper">
                                    <input onclick="delivery12(10.99)" type="radio" name="delivery" value="4" class="o-radio">
                                </div>
                                <div class="c-orderDetails-form-delivery-text">Punkty odbioru – Poczta Polska, Żabka, Ruch, Orlen i inne</div>
                                <div class="c-orderDetails-form-delivery-price">10.99 zł</div>
                            </div>
                        </div>
                    </div>
                    <div class="c-orderDetails-form-elements-informations ">
                        <div class="o-title">3.Dane Zamówienia</div>
                        <?php
                        if (isset($_SESSION['user'])) {
                            $query = $conn->query("SELECT * FROM dane_konta WHERE mail = '" . $_SESSION['user'] . "'");
                            $result = $query->fetch(PDO::FETCH_ASSOC);
                            print('<div class="form-group">
                            <input type="text" value="' . $result['imie'] . '" class="form-control c-orderDetails-form__form-input" name="inputfname" placeholder="Imie" required>
                        </div>
                        <div class="form-group">
                            <input type="text" value="' . $result['nazwisko'] . '" class="form-control c-orderDetails-form__form-input" name="inputlname" placeholder="Nazwisko" required>
                        </div>
                        <div class="form-group">
                            <input type="text" value="' . $result['adres'] . '" class="form-control c-orderDetails-form__form-input" name="inputadress" placeholder="Ulica i numer domu" required>
                        </div>
                        <div class="form-group">
                            <input type="text" value="' . $result['miasto'] . '" class="form-control c-orderDetails-form__form-input" name="inputcity" placeholder="Miejscowość" required>
                        </div>
                        <div class="form-group">
                            <input type="text" value="' . $result['kod_pocztowy'] . '" class="form-control c-orderDetails-form__form-input" name="inputpostalcode" placeholder="Kod pocztowy" required>
                        </div>
                        <div class="form-group">
                            <input type="email" value="' . $result['mail'] . '" class="form-control c-orderDetails-form__form-input" name="inputemail" placeholder="Email" required disabled>
                        </div>');
                        } else {
                            print('<div class="form-group">
                            <input type="text" class="form-control c-orderDetails-form__form-input" name="inputfname" placeholder="Imie" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control c-orderDetails-form__form-input" name="inputlname" placeholder="Nazwisko" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control c-orderDetails-form__form-input" name="inputadress" placeholder="Ulica i numer domu" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control c-orderDetails-form__form-input" name="inputcity" placeholder="Miejscowość" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control c-orderDetails-form__form-input" name="inputpostalcode" placeholder="Kod pocztowy" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control c-orderDetails-form__form-input" name="inputemail" placeholder="Email" required>
                        </div>');
                        }
                        ?>
                    </div>
                </div>
                <div class="c-orderDetails-payment col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7">
                    <div class="c-orderDetails-payment-wrapper">
                        <div class="o-wrapper">
                            <div class="c-orderDetails-payment-text">
                                <div class="c-orderDetails-payment-text-row">
                                    <div class="c-orderDetails-payment-basket-value__text"> Wartość koszyka: </div>
                                    <div class="c-orderDetails-payment-basket-value__value"> <?php echo $_POST['total']; ?> zł </div>
                                </div>
                                <div class="c-orderDetails-payment-text-row">
                                    <div class="c-orderDetails-payment-basket-value__text"> Dostawa: </div>
                                    <div id="dostawa" class="c-orderDetails-payment-basket-value__value"> 0.00 zł </div>
                                </div>
                                <div class="c-orderDetails-payment-text-row">
                                    <div class="c-orderDetails-payment-basket-value__text-last">
                                        <h2>Do zapłaty:</h2>
                                    </div>
                                    <div class="c-orderDetails-payment-basket-value__value-last">
                                        <h2 id="wszystko"><?php echo $_POST['total']; ?></h2>
                                    </div>
                                </div>
                            </div>
                            <input id="koszyk" type="hidden" value="<?php echo $_POST['total']; ?> zł">
                            <input id="total" type="hidden" name="total" value="<?php echo $_POST['total']; ?> zł">
                            <div class="form-group">
                                <div class="c-orderDetails-form__form-button-container">
                                    <button type="submit" class="c-orderDetails-form__form-button">Przejdź do podsumowania</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </form>
    </div>
</div>



<?php get_element("templates/footer.php"); ?>
<?php include_once "footer.php"; ?>