<?php

use function PHPSTORM_META\map;

include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>

<div class="o-wrapper">
    <div class="c-orderDetails-wrapper">
        <div class="row">
            <div class="c-orderDetails">
                <div class="c-orderDetails-form col-xs-12 col-sm-12 col-xl-5 col-lg-5 col-md-5">
                    <div class="c-orderDetails-form-elements-delivering">
                        <div class="o-title">Metody dostawy</div>
                    </div>
                    <div class="c-orderDetails-form-elements-informations">
                        <div class="o-title">Dane Zamówienia</div>
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
                            <div class="form-group">
                                <input type="tel" class="form-control c-orderDetails-form__form-input" id="inputnumber" placeholder="Telefon">
                            </div>
                            <div class="form-group">
                                <div class="c-orderDetails-form__form-button-container">
                                    <button type="submit" class="c-orderDetails-form__form-button">Przejdź do podsumowania</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="c-orderDetails-payment col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7">

                </div>

            </div>
        </div>
    </div>
</div>



<?php get_element("templates/footer.php"); ?>
<?php include_once "footer.php"; ?>