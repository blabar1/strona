<?php include("database.php"); ?>
<?php include("header.php"); ?>

<body onload="formreset()">
    <?php include_once "topBar.php"; ?>
    <?php
    if (isset($_POST['DODAJ'])) {
        $conn->query("INSERT INTO `podstrona`(`tytul`, `zdjecie`, `tresc`) VALUES ('" . $_POST['kat'] . "','" . $_FILES['plik']['name'] . "','" . $_POST['opis'] . "')");
        move_uploaded_file($_FILES['plik']['tmp_name'], "../images/podstrony/" . $_FILES['plik']['name']);
        print('<script>alert("Podstrona dodana pomyślnie."); window.location.href = "Podstrony.php";</script>');
    }
    if (isset($_POST['USUN'])) {
        $query = $conn->query("SELECT zdjecie FROM podstrona WHERE id_podstrona = '" . $_POST['id'] . "'");
        $result = $query->fetch(PDO::FETCH_ASSOC);
        unlink("../images/podstrony/" . $result['zdjecie']);
        $conn->query("DELETE FROM podstrona WHERE id_podstrona = '" . $_POST['id'] . "'");
        print('<script>alert("Podstrona usunięta pomyślnie."); window.location.href = "Podstrony.php";</script>');
    }
    ?>
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
                        <span><i class="bi bi-table me-2"></i></span> Podstrony
                        <div class="float-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Dodaj Podstrone
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped data-table " style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>id_podstrona</th>
                                        <th>tytul</th>
                                        <th>zdjecie</th>
                                        <th>tresc</th>
                                        <th></th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = $conn->query("Select * from podstrona");
                                    $result = $query->fetchAll(\PDO::FETCH_ASSOC);
                                    foreach ($result as $rekord) {
                                        print("<tr><td>");
                                        echo $rekord["id_podstrona"];
                                        print("</td><td>");
                                        echo $rekord["tytul"];
                                        print("</td>");
                                        print("</td><td>");
                                        print('<img class="table-thumbnail" src="../images/podstrony/' . $rekord["zdjecie"] . '"');
                                        print("</td>");
                                        print("</td><td>".$rekord["tresc"]);
                                        

                                        print("</td>");
                                        print("</td><td>");




                                        print("</td>");
                                        print("</td><td>");
                                        echo "<div class='functional-buttons'><form method='post' action='edycja-podstrony.php' class='temp''><input type='hidden' name='id' value='" . $rekord['id_podstrona'] . "'><button type='submit' name='idkategorii_edycja' class='submit  btn btn-primary edycja' value='" . $rekord['id_podstrona'] . "'>edytuj</button></form><form  method='post' action='Podstrony.php' ><input type='hidden' name='id' value='" . $rekord['id_podstrona'] . "'><button type='submit' onclick='return confirm(`Czy napewno chcesz usunąć podstrone " . $rekord['tytul'] . " ?`);'  class='submit  btn btn-primary edycja' name='USUN' value='" . $rekord['id_podstrona'] . "'>usun</button></form></div>";
                                        print("</td>");
                                    }
                                    print("</tr>");
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id_podstrona</th>
                                        <th>tytul</th>
                                        <th>zdjecie</th>
                                        <th>tresc</th>
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
                        <h5 class="modal-title" id="exampleModalLabel">Dodawanie podstrony</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="dod">
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Tytuł podstrony</label>
                                <input name="kat" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nazwa kategorii" value="" required>
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Zdjęcie</label>
                                <div class="file-drop-area-category"> <span class="btn btn-primary ">Wybierz plik</span> <span class="file-message" id="divImageMediaPreview3">albo upuść tutaj</span> <input name="plik" type="file" class="file-input-category" accept=".jfif,.jpg,.jpeg,.png,.gif" required /> </div>
                                <div id=> </div>
                            </div>
                            <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Tresc</label>
                <label for="comment"></label>
                <textarea class="form-control" rows="5" id="description-item" name="opis" placeholder="Opis" required></textarea>
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