<?php include_once "header.php";

include_once "templates/menu.php"; ?>
<div class="o-wrapper">
    <div class="c-ordersPage-wrapper">
        <div class="c-ordersPage-container">
            <div class="c-ordersPage-title">
                <div class="c-ordersPage-title o-title">Twoje zamówienie</div>
                <span class="o-separator"></span>
            </div>

            <div class="c-ordersPage-body">
                <!-- <div class="c-ordersPage-notFound-text">
                    <div class=" o-title">Nie masz zamówień <span><img class="o-notFound-image" src="images/imageNotFound.svg"></span></div>
                    <h6 class="c-ordersPage-notFound-sub-text"> Wygląda na to że nic jeszcze nie zamawiałeś :(</h6>
                </div> -->

                <span class="linia">
                    <div class="c-ordersPage-body">
                        <?php
                        get_element("elements/element-order-afterBuy.php", array(
                            'thumbnail' => "images/produkty/p1.jpg",
                            'name' => "nazwa LMAO",
                            'price' => "Ano niezła cena",
                            'quantity' => "4 szt",
                            'id' => "XDDDDDD",
                            'ordererName' => "Błażej ogółem",
                            'deliveryMethod' => 'no nie przelew bo karty nie mam :(',
                            'adress' => 'Kotun Boży',
                            'city'  => 'Radom',
                            'ordererSurname' => "Breja",
                            'paymentMethod' => 'żywa gotówa',
                            'wholeCost' => 'za dużo laptopy kosztuja'
                        ));
                        ?>

                    </div>


            </div>
        </div>
    </div>

</div>
</div>

<?php get_element("templates/footer.php");
include_once "footer.php"; ?>