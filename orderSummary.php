<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>
<?php
$data = date("Y-m-d");
$query = $conn->query("SELECT max(id_zamowienia) as maks FROM zamowienie");
$result = $query->fetch(PDO::FETCH_ASSOC);
if (!empty($result))
    $i = $result['maks'] + 1;
else
    $i = 1;
if (isset($_SESSION['user'])) {
    $conn->query("INSERT INTO `zamowienie`(`id_zamowienia`, `imie`, `nazwisko`, `adres`, `miasto`, `kod_pocztowy`, `mail`, `dostawa`, `metoda`, `data_zlozenia`, `data_wyslania`, `koszt`, `status`) VALUES ($i, '" . $_POST['inputfname'] . "','" . $_POST['inputlname'] . "','" . $_POST['inputadress'] . "','" . $_POST['inputcity'] . "','" . $_POST['inputpostalcode'] . "','" . $_SESSION['user'] . "','" . $_POST['delivery'] . "','" . $_POST['payment'] . "', CAST('$data' AS DATE) , NULL ,'" . $_POST['total'] . "','W trakcie realizacji')");
    $query = $conn->query("SELECT produkt, ilosc FROM koszyk WHERE konto = (SELECT id_konta FROM dane_konta WHERE mail = '" . $_SESSION['user'] . "')");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row)
        $conn->query("INSERT INTO `zamowienie_produkt`(`zamowienie`, `produkt`, `ilosc`) VALUES ($i,'" . $row['produkt'] . "','" . $row['ilosc'] . "')");
    $conn->query("DELETE FROM koszyk WHERE konto = (SELECT id_konta FROM dane_konta WHERE mail = '".$_SESSION['user']."')");
    } else {
    $conn->query("INSERT INTO `zamowienie`(`id_zamowienia`, `imie`, `nazwisko`, `adres`, `miasto`, `kod_pocztowy`, `mail`, `dostawa`, `metoda`, `data_zlozenia`, `data_wyslania`, `koszt`, `status`) VALUES ($i, '" . $_POST['inputfname'] . "','" . $_POST['inputlname'] . "','" . $_POST['inputadress'] . "','" . $_POST['inputcity'] . "','" . $_POST['inputpostalcode'] . "','" . $_POST['inputemail'] . "','" . $_POST['delivery'] . "','" . $_POST['payment'] . "', CAST('$data' AS DATE) , NULL ,'" . $_POST['total'] . "','W trakcie realizacji')");
    $a = array_keys($_SESSION['koszyk']);
    for ($j = 0; $j < sizeof($a); $j++) {
        $conn->query("INSERT INTO `zamowienie_produkt`(`zamowienie`, `produkt`, `ilosc`) VALUES ($i,'" . $a[$j] . "','" . $_SESSION['koszyk'][$a[$j]] . "')");
    }
    unset($_SESSION['koszyk']);
    $_SESSION['koszyk'] = array();
}
?>
<div class="o-wrapper">
    <div class="c-basket-wrapper">
        <div class="c-basket">
            <div id="basket_con" class="c-basket-container">
                <div class="row">
                    <div class="c-basket-empty">
                        <div class="c-basket-empty-container">
                            <div class="c-basket-empty-container__title">Twój zamówienie o numerze <?php echo $i ?> zostało przyjęte do realizacji</div>
                            <div class="c-basket-empty-container__subtext">Dziękujemy za wybranie naszego sklepu</div>
                            <div class="c-basket-empty-container__button"><a href="index.php"><button class="c-basket-empty-container__button-element">Przejdź do strony głównej </button></a></div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>



</div>

<?php include_once "footer.php"; ?>