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
                        <a href="Konta.php" class="nav-link px-3 active">
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
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Produkty</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Produkty</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Produkty</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Produkty</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Produkty</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Produkty</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Produkty</span>
                        </a>
                    </li>

                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Tabele
                        </div>
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
                                        <th>imie</th>
                                        <th>nazwiksko</th>
                                        <th>adres</th>
                                        <th>miasto</th>
                                        <th>kod_pocztowy</th>
                                        <th>mail</th>
                                        <th>dostawa</th>
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
                                        print("</td><td>");
                                        echo $rekord["imie"];
                                        print("</td>");
                                        print("</td><td>");
                                        echo $rekord["nazwisko"];
                                        print("</td>");
                                        print("</td><td>");
                                        echo $rekord["adres"];
                                        print("</td>");
                                        print("</td><td>");
                                        echo $rekord["miasto"];
                                        print("</td>");
                                        print("</td><td>");
                                        echo $rekord["kod_pocztowy"];
                                        print("</td>");
                                        print("</td><td>");
                                        echo $rekord["mail"];
                                        print("</td>");
                                        print("</td><td>");
                                        echo $rekord["dostawa"];
                                        print("</td>");
                                        print("</td><td>");
                                        echo $rekord["data_zlozenia"];
                                        print("</td>");
                                        print("</td><td>");
                                        echo $rekord["data_wyslania"];
                                        print("</td>");
                                        print("</td><td>");
                                        echo $rekord["koszt"];
                                        print("</td>");
                                        print("</td><td>");
                                        echo $rekord["status"];
                                        print("</td>");

                                        print("</td><td>");
                                        echo "<div class='functional-buttons'><button data-bs-toggle='modal' data-bs-target='#exampleModal" . $rekord['id_zamowienia'] . "' name='zamowienie-szczegoly' class='submit  btn btn-primary edycja' value='" . $rekord['id_zamowienia'] . "'>szczegóły</button><form  method='post' action='Konta.php' ><button type='submit' onclick='return confirm(`Czy napewno chcesz usunac konto uzytkownika " . $rekord['id_zamowienia'] . " " . $rekord['id_zamowienia'] . " ?`);'  class='submit  btn btn-primary edycja' value='" . $rekord['id_zamowienia'] . "'>usun</button></form></div>";
                                        print("</td>");
                                    }
                                    print("</tr>");

                                    print('
                                    <div class="modal fade" id="exampleModal' . $rekord["id_zamowienia"] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Szczegóły zamówienia o id ' . $rekord["id_zamowienia"] . '</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                
                                                    <div class="modal-body modal-order__desc">');

                                    $query = $conn->query("SELECT id_produkt, produkt.nazwa, produkt.cena, produkt.miniaturka, zamowienie_produkt.ilosc FROM produkt INNER JOIN zamowienie_produkt ON produkt.id_produkt = zamowienie_produkt.produkt WHERE zamowienie = '" . $rekord['id_zamowienia'] . "'");
                                    $result = $query->fetchAll(\PDO::FETCH_ASSOC);
                                    foreach ($result as $rekord) {

                                        print('<div class="modal-order__element"><div class="modal-order__title">Thumbnail produktu:</div><img style="width:400px; height:100%;" src="../images/produkty/' . $rekord['miniaturka'] . '"><div class=""> Nazwa produktu: ' . $rekord['nazwa'] . ' Ilosc zamówionych sztuk: ' . $rekord['ilosc'] . '</div></div>');
                                    }


                                    print('</div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuluj</button>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>');
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id_zamowienia</th>
                                        <th>imie</th>
                                        <th>nazwiksko</th>
                                        <th>adres</th>
                                        <th>miasto</th>
                                        <th>kod_pocztowy</th>
                                        <th>mail</th>
                                        <th>dostawa</th>
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