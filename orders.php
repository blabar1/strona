<?php include_once "header.php";

include_once "templates/menu.php"; ?>
<div class="o-wrapper">
    <div class="c-ordersPage-wrapper">
        <div class="c-ordersPage-container">
            <div class="c-ordersPage-title">
                <div class="c-ordersPage-title o-title">Twoje zamówienia</div>
                <span class="o-separator"></span>
            </div>
            <?php
            if (isset($_SESSION['user'])) {
                $query = $conn->query("SELECT * FROM zamowienie WHERE mail ='" . $_SESSION['user'] . "' ORDER BY id_zamowienia DESC");
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                if (empty($result)) {
                    print('<div class="c-ordersPage-body">
                        <div class="c-ordersPage-notFound-text">
                            <div class=" o-title">Nie masz zamówień <span><img class="o-notFound-image" src="images/imageNotFound.svg"></span></div>
                            <h6 class="c-ordersPage-notFound-sub-text"> Wygląda na to że nic jeszcze nie zamawiałeś :(</h6>
                        </div>
                    </div>');
                } else {
                    foreach ($result as $row) {
                        $query3 = $conn->query("SELECT nazwa FROM zamowienie_status WHERE id_status = '".$row['status']."'");
                        $result3 = $query3->fetch(PDO::FETCH_ASSOC);
                        print('<span class="linia">
                            <div class="c-ordersPage-body"><a href="orderDetails-afterBuy.php?nr_zamowienie='.$row['id_zamowienia'].'">');
                        get_element("elements/element-orders-date.php", array(
                            'date' => "Zamówienie nr ".$row['id_zamowienia']." - ".$row['data_zlozenia'] . " - " . $result3['nazwa']
                        ));
                        print('</a>');
                        $query2 = $conn->query("SELECT id_produkt, produkt.nazwa, produkt.cena, produkt.miniaturka, zamowienie_produkt.ilosc FROM produkt INNER JOIN zamowienie_produkt ON produkt.id_produkt = zamowienie_produkt.produkt WHERE zamowienie = '".$row['id_zamowienia']."'");
                        $result2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($result2 as $row2) {
                            get_element("elements/element-orders-orderedItem.php", array(
                                'thumbnail' => "images/produkty/" . $row2['miniaturka'],
                                'name' => $row2['nazwa'],
                                'price' => $row2['cena'],
                                'quantity' => $row2['ilosc'],
                                'id' => $row2['id_produkt']
                            ));
                        }
                        print('<div class="c-ordersPage-container-footer">
                        <h6>Koszt zamówienia: ' . $row['koszt'] . ' zł</h6>
                    </div></div>');
                    }
                }
            } else {
                header("Location login.php");
            }
            ?>

        </div>
    </div>
</div>
        
</div>








<?php get_element("templates/footer.php");
include_once "footer.php"; ?>