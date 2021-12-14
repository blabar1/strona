<?php include("database.php"); ?>
<?php include("header.php"); ?>

<body onload="formreset()">
    <?php include_once "topBar.php"; ?>
    <?php
    if (isset($_POST['DODAJ'])) {
        $conn->query("INSERT INTO `kategoria`(`nazwa`, `miniaturka`, `nadkategoria`) VALUES ('" . $_POST['kat'] . "','" . $_FILES['plik']['name'] . "','" . $_POST['nadkat'] . "')");
        move_uploaded_file($_FILES['plik']['tmp_name'], "../images/kategorie/" . $_FILES['plik']['name']);
        print('<script>alert("Kategoria dodana pomyślnie."); window.location.href = "index.php";</script>');
    }
    if (isset($_POST['USUN'])) {
        $query = $conn->query("SELECT miniaturka FROM kategoria WHERE id_kategoria = '" . $_POST['id'] . "'");
        $result = $query->fetch(PDO::FETCH_ASSOC);
        unlink("../images/kategorie/" . $result['miniaturka']);
        $conn->query("DELETE FROM kategoria WHERE id_kategoria = '" . $_POST['id'] . "'");
        print('<script>alert("Kategoria usunięta pomyślnie."); window.location.href = "index.php";</script>');
    }
    ?>
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
                        <a href="Kategorie.php" class="nav-link px-3 active">
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
                        <span><i class="bi bi-table me-2"></i></span> Kategorie
                        <div class="float-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Dodaj Kategorie
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped data-table " style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>id_kategoria</th>
                                        <th>nazwa</th>
                                        <th>miniaturka</th>
                                        <th>nadkategoria</th>
                                        <th> </th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = $conn->query("Select * from kategoria");
                                    $result = $query->fetchAll(\PDO::FETCH_ASSOC);
                                    foreach ($result as $rekord) {
                                        print("<tr><td>");
                                        echo $rekord["id_kategoria"];
                                        print("</td><td>");
                                        echo $rekord["nazwa"];
                                        print("</td>");
                                        print("</td><td>");
                                        print('<img class="table-thumbnail" src="../images/kategorie/' . $rekord["miniaturka"] . '"');
                                        print("</td>");
                                        print("</td><td>");
                                        if ($rekord['nadkategoria'] == null) {
                                            echo "Brak nadkategorii ¯\_(ツ)_/¯";
                                        } else {
                                            $query = $conn->query('Select nazwa from kategoria where id_kategoria like ' . $rekord['nadkategoria']);
                                            $result = $query->fetchAll(\PDO::FETCH_ASSOC);
                                            foreach ($result as $record) {

                                                echo $record['nazwa'];
                                            }
                                        }

                                        print("</td>");
                                        print("</td><td>");




                                        print("</td>");
                                        print("</td><td>");
                                        echo "<div class='functional-buttons'><form method='post' action='edycja.php' class='temp''><input type='hidden' name='id' value='" . $rekord['id_kategoria'] . "'><button type='submit' name='idkategorii_edycja' class='submit  btn btn-primary edycja' value='" . $rekord['id_kategoria'] . "'>edytuj</button></form><form  method='post' action='Kategorie.php' ><input type='hidden' name='id' value='" . $rekord['id_kategoria'] . "'><button type='submit' onclick='return confirm(`Czy napewno chcesz kategorie " . $rekord['nazwa'] . " ?`);'  class='submit  btn btn-primary edycja' name='USUN' value='" . $rekord['id_kategoria'] . "'>usun</button></form></div>";
                                        print("</td>");
                                    }
                                    print("</tr>");
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id_kategoria</th>
                                        <th>nazwa</th>
                                        <th>miniaturka</th>
                                        <th>nadkategoria</th>
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
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content" style="overflow-y:scroll;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Dodawanie kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="dod">
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nazwa Kategorii</label>
                                <input name="kat" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nazwa kategorii" value="" required>
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Miniaturka</label>
                                <div class="file-drop-area-category"> <span class="btn btn-primary ">Wybierz plik</span> <span class="file-message" id="divImageMediaPreview3">albo upuść tutaj</span> <input name="plik" type="file" class="file-input-category" accept=".jfif,.jpg,.jpeg,.png,.gif" required /> </div>
                                <div id=> </div>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Wybierz nadkategorie</label>
                                <select name="nadkat" class="form-control" id="formGroupExampleInput2" required>
                                    <option selected disabled hidden value="">Przykład</option>
                                    <?php
                                    $query = $conn->query('Select Distinct id_kategoria, nazwa from kategoria');
                                    $result = $query->fetchAll(\PDO::FETCH_ASSOC);
                                    foreach ($result as $record) {
                                        print("<option value=" . $record['id_kategoria'] . ">" . $record['nazwa'] . "</option>");
                                    }
                                    ?>
                                </select>
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