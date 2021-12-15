<!DOCTYPE html>
<html lang="en">

<?php include("database.php"); ?>
<?php include("header.php"); ?>
<?php include("topBar.php"); ?>
<!-- Maciek tam jest menu takie jakby z uzytkownikiem -->

<body>
<?php
$conn->beginTransaction();
try {
    if(isset($_POST['status'])){
        $conn->query("UPDATE zamowienie SET status = '".$_POST['status']."' WHERE id_zamowienia =  '".$_POST['order']."'");
        if($_POST['status']==2){
            $query = $conn->query("SELECT id_produkt, produkt.ilosc, zamowienie_produkt.ilosc as odjac FROM produkt inner join zamowienie_produkt ON produkt.id_produkt = zamowienie_produkt.produkt WHERE id_produkt IN (SELECT produkt FROM zamowienie_produkt WHERE zamowienie =  '".$_POST['order']."')");
            $result =$query->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $row){
                $i = $row['ilosc']-$row['odjac'];
                $conn->query("UPDATE produkt SET ilosc = '".$i."' WHERE id_produkt =  '".$row['id_produkt']."'");
            }
            $query = $conn->query("SELECT * FROM zamowienie WHERE id_zamowienia =  '".$_POST['order']."'");
            $result= $query->fetch(PDO::FETCH_ASSOC);
            $info = "Dziękujemy za skorzystanie z naszych usług.\r\n Twoje zamówienie o numerze '".$_POST['order']."' zostało przyjęte do realizacji. \r\n
            Więcej informacji o zamówieniu znajdziesz na: http://www.placeholder.ct8.pl/strona/orderDetails-afterBuy.php?nr_zamowienie=".$_POST['order'];
            mail($result['mail'],"Zamówienie",$info);
        }
    }
    $conn->commit();
    } catch (PDOException) {
        $conn->rollBack();
        print('<script>alert("Wystąpił nieoczekiwany błąd."); window.location.href = Zamówienia-pracownik.php";</script>');
    }
?>

    <!-- offcanvas -->
    <?php include("canvas.php"); ?>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
            </div>
            <div class="row">
            </div>
        </div>

        <div class="card-header">
        </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <span><i class="bi bi-table me-2"></i></span> Data Table
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped data-table " style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>id_zamowienia</th>
                                        <th>mail</th>
                                        <th>data_zlozenia</th>
                                        <th>data_wyslania</th>
                                        <th>koszt</th>
                                        <th>status</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $query = $conn->query("Select * from zamowienie");
                                    $result = $query->fetchAll(\PDO::FETCH_ASSOC);
                                    foreach ($result as $rekord) {
                                        print("<tr><td>");
                                        echo $rekord["id_zamowienia"];
                                        print("</td>");
                                        print("</td><td>");
                                        echo $rekord["mail"];
                                        print("</td>");
                                        print("<td>");
                                        echo $rekord["data_zlozenia"];
                                        print("</td>");
                                        print("</td><td>");
                                        echo $rekord["data_wyslania"];
                                        print("</td>");
                                        print("</td><td>");
                                        echo $rekord["koszt"];
                                        print("</td>");
                                        print("</td><td>");
                                        print("<select id ='jd".$rekord["id_zamowienia"]."' name='status' onchange='stateChagne(".$rekord["id_zamowienia"].")'>");
                                        $query1 = $conn->query("SELECT * FROM zamowienie_status");
                                        $result1 = $query1->fetchAll(PDO::FETCH_ASSOC);
                                        foreach($result1 as $row){
                                            if($row['id_status']==$rekord['status']){
                                                print(" <option selected disabled value='" . $row["id_status"] . "'>" . $row["nazwa"] . "</option>");
                                            }else{
                                                if($rekord['status']>$row['id_status'] || $row['id_status']-$rekord['status']!=1)
                                                print(" <option  disabled value='" .  $row["id_status"] . "'>" . $row["nazwa"] . "</option>");
                                                else
                                                print(" <option  value='" . $row["id_status"] . "'>" . $row["nazwa"] . "</option>");
                                            }
                                        }

                                        print("</select></td>");

                                        print("</td><td>");
                                        echo "<div class='functional-buttons'><button data-bs-toggle='modal' data-bs-target='#exampleModal" . $rekord['id_zamowienia'] . "' name='zamowienie-szczegoly' class='submit  btn btn-primary edycja' value='" . $rekord['id_zamowienia'] . "'>szczegóły</button></div>";
                                        print("</td>");
                                    }
                                    print("</tr>");
                                    foreach ($result as $rekord) {
                                        $query=$conn->query("SELECT nazwa FROM metoda_platnosci WHERE id_metoda = '".$rekord["metoda"]."'");
                                        $result = $query->fetch(PDO::FETCH_ASSOC);
                                        $query1=$conn->query("SELECT nazwa FROM dostawa WHERE id_dostawa = '".$rekord["dostawa"]."'");
                                        $result1 = $query1->fetch(PDO::FETCH_ASSOC);
                                        print('
                                    <div class="modal fade" id="exampleModal' . $rekord["id_zamowienia"] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Szczegóły zamówienia o id ' . $rekord["id_zamowienia"] . '</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" style="padding: 0;">
                                                    <div class="modal-order__desc row">
                                                    <div class="modal-order__desc-element modal-order__desc-name col-4"><div class="modal-sub-title">Imie: </div>' . $rekord["imie"] . '</div>
                                                    <div class="modal-order__desc-element modal-order__desc-delivery col-4"><div class="modal-sub-title">Metoda dostawy: </div>' . $result1["nazwa"] . '</div>
                                                    <div class="modal-order__desc-element modal-order__desc-address col-4"><div class="modal-sub-title">Adres: </div> ' . $rekord["adres"] . ', ' . $rekord["miasto"] . ' ' . $rekord["kod_pocztowy"] . '</div>
                                                    <div class="modal-order__desc-element modal-order__desc-surname col-4"><div class="modal-sub-title">Nazwisko: </div>' . $rekord["nazwisko"] . '</div>
                                                
                                                    <div class="modal-order__desc-element modal-order__desc-method col-4"><div class="modal-sub-title">Metoda płatności: </div>' . $result["nazwa"] . '</div>
                                                    </div>');



                                        $query = $conn->query("SELECT zamowienie, id_produkt, produkt.nazwa, produkt.cena, produkt.miniaturka, zamowienie_produkt.ilosc FROM produkt INNER JOIN zamowienie_produkt ON produkt.id_produkt = zamowienie_produkt.produkt WHERE zamowienie = '" . $rekord['id_zamowienia'] . "'");
                                        $result = $query->fetchAll(\PDO::FETCH_ASSOC);
                                        foreach ($result as $rekord) {
                                            $id = $rekord["zamowienie"];
                                            get_element("elements/element-orders-orderedItem.php", array(
                                                'thumbnail' => "images/produkty/" . $rekord['miniaturka'],
                                                'name' => $rekord['nazwa'],
                                                'price' => $rekord['cena'],
                                                'quantity' => $rekord['ilosc'],
                                                'id' => $rekord['id_produkt']
                                            ));
                                        }
                                        $query = $conn->query("Select koszt from zamowienie WHERE id_zamowienia ='" . $id . "'");
                                        $result = $query->fetch(\PDO::FETCH_ASSOC);

                                        print(' <div class="modal-order__price">Łączna cena zamówienia wraz z dostawą:  ' . $result['koszt'] . ' zl</div></div>
                                                                    <div class="modal-footer">
                                                                    
                                                                   
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                   </div>
                                                        </div>');
                                    }




                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id_zamowienia</th>
                                        <th>mail</th>
                                        <th>data_zlozenia</th>
                                        <th>data_wyslania</th>
                                        <th>koszt</th>
                                        <th>status</th>
                                        <th> </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </main>
</body>
<?php include_once "footer.php"; ?>