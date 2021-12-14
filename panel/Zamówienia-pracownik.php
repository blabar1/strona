<!DOCTYPE html>
<html lang="en">

<?php include("database.php"); ?>
<?php include("header.php"); ?>
<?php include("topBar.php"); ?>
<!-- Maciek tam jest menu takie jakby z uzytkownikiem -->

<body>

    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3">
                            Tabele
                        </div>
                    </li>
                    <li>
                        <a href="index.php" class="nav-link px-3 ">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Produkty</span>
                        </a>
                    </li>
                    <li>
                        <a href="Konta.php" class="nav-link px-3 ">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Konta</span>
                        </a>
                    </li>
                    <li>
                        <a href="Kategorie.php" class="nav-link px-3 ">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Kategorie</span>
                        </a>
                    </li>
                    <li>
                        <a href="Zamówienia-pracownik.php" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Zamówienia</span>
                        </a>
                    </li>
                    <li>
                    <li>
                        <a href="Właściwości.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Właściwości</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                            <span class="me-2"><i class="bi bi-layout-split"></i></span>
                            <span>Layouts</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="layouts">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-book-fill"></i></span>
                            <span>Pages</span>
                        </a>
                    </li>
                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Addons
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-graph-up"></i></span>
                            <span>Charts</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Tables</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
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
                                        print("<select name=''>
                                        <option selected value='" . $rekord["status"] . "'>" . $rekord["status"] . "</option>
                                        <option value=''></option>
                                        <option value=''></option>
                                        </select>");
                                        print("</td>");

                                        print("</td><td>");
                                        echo "<div class='functional-buttons'><button data-bs-toggle='modal' data-bs-target='#exampleModal" . $rekord['id_zamowienia'] . "' name='zamowienie-szczegoly' class='submit  btn btn-primary edycja' value='" . $rekord['id_zamowienia'] . "'>szczegóły</button></div>";
                                        print("</td>");
                                    }
                                    print("</tr>");
                                    foreach ($result as $rekord) {
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
                                                    <div class="modal-order__desc-element modal-order__desc-delivery col-4"><div class="modal-sub-title">Metoda dostawy: </div>' . $rekord["dostawa"] . '</div>
                                                    <div class="modal-order__desc-element modal-order__desc-address col-4"><div class="modal-sub-title">Adres: </div> ' . $rekord["adres"] . ', ' . $rekord["miasto"] . ' ' . $rekord["kod_pocztowy"] . '</div>
                                                    <div class="modal-order__desc-element modal-order__desc-surname col-4"><div class="modal-sub-title">Nazwisko: </div>' . $rekord["nazwisko"] . '</div>
                                                
                                                    <div class="modal-order__desc-element modal-order__desc-method col-4"><div class="modal-sub-title">Metoda płatności: </div>' . $rekord["metoda"] . '</div>
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