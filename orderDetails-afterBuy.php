<?php include_once "header.php";

include_once "templates/menu.php"; 
$query = $conn->query('SELECT * FROM zamowienie WHERE id_zamowienia = "'.$_GET['nr_zamowienie'].'"');
$result = $query->fetch(PDO::FETCH_ASSOC);
?>
<div class="o-wrapper">
    <div class="c-ordersPage-wrapper">
        <div class="c-ordersPage-container">
            <div class="c-ordersPage-title">
                <div class="c-ordersPage-title o-title"> <?php echo "Zamówienie nr ".$result['id_zamowienia']." - ".$result['data_zlozenia'] . " - " . $result['status']?></div>
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
                         $query2 = $conn->query("SELECT id_produkt, produkt.nazwa, produkt.cena, produkt.miniaturka, zamowienie_produkt.ilosc FROM produkt INNER JOIN zamowienie_produkt ON produkt.id_produkt = zamowienie_produkt.produkt WHERE zamowienie = '".$_GET['nr_zamowienie']."'");
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
                        
                        get_element("elements/element-order-afterBuy.php", array(
<<<<<<< HEAD
                            'ordererName' => $result['imie'],
                            'deliveryMethod' => $result['dostawa'],
                            'adress' => $result['adres'].", ".$result['miasto']." ".$result['kod_pocztowy'],
                            'ordererSurname' => $result['nazwisko'],
                            'paymentMethod' => $result['metoda'],
                            'wholeCost' => $result['koszt']
=======
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
>>>>>>> d90eab88fcda219e0df6a78861d70becbd650ebc
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