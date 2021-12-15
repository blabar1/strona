<!DOCTYPE html>
<html lang="en">

<?php include("database.php"); ?>
<?php include("header.php"); ?>
<?php include("topBar.php"); ?>
<!-- Maciek tam jest menu takie jakby z uzytkownikiem -->
<?php
if (isset($_POST['DODAJ'])) {
    $conn->beginTransaction();
    try {
        $hash = password_hash($_POST['haslo'], PASSWORD_BCRYPT);
        $mail = $_POST['mail'];
        $register = $conn->query("INSERT INTO dane_logowania (`mail`, `haslo`) VALUES ('" . $mail . "', '" . $hash . "')");
        $conn->query("INSERT INTO `dane_konta`(`imie`, `nazwisko`, `adres`, `miasto`, `kod_pocztowy`, `konto_typ`, `mail`) VALUES ('" . $_POST['imie'] . "','" . $_POST['nazwisko'] . "','" . $_POST['adres'] . "','" . $_POST['miasto'] . "','" . $_POST['kod'] . "','" . $_POST['typ'] . "','" . $mail . "')");
        print('<script>alert("Konto dodane pomyślnie."); window.location.href = "Konta.php";</script>');
        $conn->commit();
    } catch (PDOException $ex) {
        $conn->rollBack();
        if ($ex->errorInfo[1] == 1062) {
            print('<script>alert("Konto z podanym e-mailem już istnieje."); window.location.href = "Konta.php";</script>');
        } else {
            print('<script>alert("Błąd przy dodawaniu użytkownika."); window.location.href = "Konta.php";</script>');
        }
    }
}
if (isset($_POST['USUN'])) {
    $conn->query("DELETE FROM dane_logowania WHERE mail = '" . $_POST['id'] . "'");
    print('<script>alert("Konto usunięte pomyślnie."); window.location.href = "Konta.php";</script>');
}
?>

<body>

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
                                Dodaj Konto
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped data-table " style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>id_konta</th>
                                        <th>imie</th>
                                        <th>nazwisko</th>
                                        <th>adres</th>
                                        <th>miasto</th>
                                        <th>kod_pocztowy</th>
                                        <th>konto_typ</th>
                                        <th>mail</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = $conn->query("Select * from dane_konta");
                                    $result = $query->fetchAll(\PDO::FETCH_ASSOC);
                                    foreach ($result as $rekord) {
                                        print("<tr><td>");
                                        echo $rekord["id_konta"];
                                        print("</td><td>");
                                        echo $rekord["imie"];
                                        print("</td>");
                                        print("</td><td>");
                                        echo $rekord["nazwisko"];
                                        print("</td>");
                                        print("</td><td>");
                                        if ($rekord['adres'] == null) {
                                            echo "Brak podanego adresu (⌣̩̩́_⌣̩̩̀)";
                                        } else {
                                            echo $rekord["adres"];
                                        }
                                        print("</td>");
                                        print("</td><td>");
                                        if ($rekord['miasto'] == null) {
                                            echo "Brak podanego miasta ಥ_ಥ";
                                        } else {
                                            echo $rekord["miasto"];
                                        }
                                        print("</td>");
                                        print("</td><td>");
                                        if ($rekord['kod_pocztowy'] == null) {
                                            echo "Brak podanego kodu pocztowego (._.)";
                                        } else {
                                            echo $rekord["kod_pocztowy"];
                                        }
                                        print("</td>");
                                        print("</td><td>");

                                        $query = $conn->query('Select nazwa from typ_konta where id_typ =' . $rekord["konto_typ"]);
                                        $result = $query->fetchAll(\PDO::FETCH_ASSOC);
                                        foreach ($result as $record) {
                                            echo $record['nazwa'];
                                        }
                                        print("</td>");
                                        print("</td><td>");
                                        echo $rekord["mail"];


                                        print("</td>");
                                        print("</td><td>");
                                        echo "<div class='functional-buttons'><form method='post' action='edycja-konta.php' class='temp''><input type='hidden' name='id' value='" . $rekord['id_konta'] . "'><button type='submit' name='idkonta_edycja' class='submit  btn btn-primary edycja' value='" . $rekord['id_konta'] . "'>edytuj</button></form><form  method='post' action='Konta.php' ><input type='hidden' name='id' value='" . $rekord['mail'] . "'><button type='submit' onclick='return confirm(`Czy napewno chcesz usunąć konto " . $rekord['mail'] . " ?`);'  class='submit  btn btn-primary edycja' name='USUN' value='" . $rekord['mail'] . "'>usun</button></form></div>";
                                        print("</td>");
                                    }
                                    print("</tr>");
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id_produktu</th>
                                        <th>nazwa</th>
                                        <th>cena</th>
                                        <th>ilosc</th>
                                        <th>opis</th>
                                        <th>miniaturka</th>
                                        <th>kategoria</th>
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
                                <label for="formGroupExampleInput" class="form-label">Imie</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Imie" value="" name="imie" required>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nazwisko</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nazwisko" value="" name="nazwisko" required>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Adres</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="adres" value="" name="adres" required>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">miasto</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="miasto" name="miasto" value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="kod-poczty">Kod pocztowy</label>
                                <input type="text" value="" maxlength="6" class="form-control c-account-forms__form-input" pattern="^[0-9]{2}-[0-9]{3}$" name="kod" id="kod-poczty" placeholder="np. 00-000" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1">Adres email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp" placeholder="email">
                            </div>
                            <label for="formGroupExampleInput" class="form-label">Hasło</label>
                            <div class="mb-3 eye-toggle">

                                <input type="password" class="form-control" id="add_user" placeholder="hasło" name="haslo" value="" required /><i class="bi bi-eye-slash" id="add_user_toggle"></i>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typ" id="exampleRadios3" value="1" checked>
                                    <label class="form-check-label" for="exampleRadios3">
                                        Klient
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typ" id="exampleRadios2" value="2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Pracownik
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typ" id="exampleRadios1" value="3">
                                <label class="form-check-label" for="exampleRadios1">
                                    Administrator
                                </label>
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