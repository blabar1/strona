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
                        <a href="Konta.php" class="nav-link px-3  ">
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
                        <a href="Zamówienia-pracownik.php" class="nav-link px-3 ">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Zamówienia</span>
                        </a>
                    </li>
                    <li>
                    <li>
                        <a href="Właściwości.php" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Właściwości</span>
                        </a>
                    </li>
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
                        <span><i class="bi bi-table me-2"></i></span> Konta
                        <div class="float-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Dodaj Właściwość
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped data-table " style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>id_wlasciwosc</th>
                                        <th>nazwa</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = $conn->query("Select * from wlasciwosc");
                                    $result = $query->fetchAll(\PDO::FETCH_ASSOC);
                                    foreach ($result as $rekord) {
                                        print("<tr><td>");
                                        echo $rekord["id_wlasciwosc"];
                                        print("</td><td>");
                                        echo $rekord["nazwa"];
                                        print("</td>");

                                        print("</td><td>");
                                        echo "<div class='functional-buttons'><form method='post' action='edycja.php' class='temp''><button type='submit' name='idkonta_edycja' class='submit  btn btn-primary edycja' value='" . $rekord['id_wlasciwosc'] . "'>edytuj</button></form><form  method='post' action='Właściowść.php' ><input type='hidden' name='id' value='" . $rekord['id_wlasciwosc'] . "'><button type='submit' onclick='return confirm(`Czy napewno chcesz usunąć włąściwość " . $rekord['nazwa'] . " ?`);'  class='submit  btn btn-primary edycja' name='USUN' value='" . $rekord['id_wlasciwosc'] . "'>usun</button></form></div>";
                                        print("</td>");
                                    }
                                    print("</tr>");
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id_wlasciwosc</th>
                                        <th>nazwa</th>
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
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Dodawanie konta użytkownika</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" id="dod" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nazwa</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nazwa" value="" name="imie" required>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuluj</button>
                            <input type="submit" value="Zapisz" name="DODAJ" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
<?php include_once "footer.php"; ?>