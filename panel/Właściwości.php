<!DOCTYPE html>
<html lang="en">

<?php include("database.php"); ?>
<?php include("header.php"); ?>
<?php include("topBar.php"); ?>
<!-- Maciek tam jest menu takie jakby z uzytkownikiem -->


<body>
<?php
    if (isset($_POST['DODAJ'])) {
        $conn->query("INSERT INTO `wlasciwosc`(`nazwa`) VALUES ('" . $_POST['imie'] ."')");
        print('<script>alert("Właściwość dodana pomyślnie."); window.location.href = "Właściwości.php";</script>');
    }
    if (isset($_POST['USUN'])){
        $conn->query("DELETE FROM wlasciwosc WHERE  id_wlasciwosc = '" . $_POST['id'] . "'");
        print('<script>alert("Właściwość usunięta pomyślnie."); window.location.href = "Właściwości.php";</script>');
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
                                        echo "<div class='functional-buttons'><form method='post' action='edycja.php' class='temp''><button type='submit' name='idkonta_edycja' class='submit  btn btn-primary edycja' value='" . $rekord['id_wlasciwosc'] . "'>edytuj</button></form><form  method='post' action='Właściwości.php' ><input type='hidden' name='id' value='" . $rekord['id_wlasciwosc'] . "'><button type='submit' onclick='return confirm(`Czy napewno chcesz usunąć włąściwość " . $rekord['nazwa'] . " ?`);'  class='submit  btn btn-primary edycja' name='USUN' value='" . $rekord['id_wlasciwosc'] . "'>usun</button></form></div>";
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