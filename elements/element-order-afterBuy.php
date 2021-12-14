<?php
include 'database.php';
$query = $conn->query('SELECT nazwa FROM dostawa WHERE id_dostawa = "'.$deliveryMethod.'"');
$result= $query->fetch(PDO::FETCH_ASSOC);
$query2 = $conn->query('SELECT nazwa FROM metoda_platnosci WHERE id_metoda = "'.$paymentMethod.'"');
$result2= $query2->fetch(PDO::FETCH_ASSOC);
?>
<div class="row c-ordersPage-container-footer-desc">
    <div class="col-sm-4 col-md-4 col-lg-4 c-ordersPage-container-footer-desc-block">
        <div class="c-ordersPage-container-footer-desc__title">Imie</div>
        <div class="">
            <?php echo $ordererName; ?>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 c-ordersPage-container-footer-desc-block">
        <div class="c-ordersPage-container-footer-desc__title"> Metoda Dostawy</div>
        <div class="">
            <?php echo $result['nazwa']; ?>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 c-ordersPage-container-footer-desc-block">
        <div class="c-ordersPage-container-footer-desc__title">Adres</div>
        <div class="">
            <?php echo $adress; ?>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 c-ordersPage-container-footer-desc-block">
        <div class="c-ordersPage-container-footer-desc__title"> Nazwisko</div>
        <div class="">
            <?php echo $ordererSurname; ?>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 c-ordersPage-container-footer-desc-block">
        <div class="c-ordersPage-container-footer-desc__title"> Metoda Płatności</div>
        <div class="">
            <?php echo $result2['nazwa']; ?>
        </div>
    </div>

</div>
<div class="c-ordersPage-container-footer">
    <h6>Koszt zamówienia: <?php echo $wholeCost; ?> zł</h6>
</div>
</div>