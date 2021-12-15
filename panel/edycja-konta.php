<!DOCTYPE html>
<html lang="en">

<?php include("database.php"); ?>
<?php include("header.php"); ?>
<?php include("topBar.php"); ?>
<!-- Maciek tam jest menu takie jakby z uzytkownikiem -->



<body>

    <!-- offcanvas -->
    <?php include("canvas.php"); ?>
    <?php
    $query = $conn->query("SELECT * FROM dane_konta WHERE id_konta = '" . $_POST['id'] . "'");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (isset($_POST['DODAJ'])) {
        $conn->query("UPDATE dane_konta SET `imie`='" . $_POST['imie'] . "',`nazwisko`='" . $_POST['nazwisko'] . "',`adres`='" . $_POST['adres'] . "',`miasto`='" . $_POST['miasto'] . "',`kod_pocztowy`='" . $_POST['kod'] . "' WHERE id_konta = '" . $_POST['id'] . "'");
        print('<script>alert("Konto zmodyfikowane pomyślnie."); window.location.href = "Konta.php";</script>');
    }
    ?>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="dod">
            <div class="o-title panel-title">
                <h3>Edycja konta</h3>
            </div>

            <div class="container-fluid">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Imie</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Imie" value="<?php echo $result['imie']; ?>" name="imie" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nazwisko</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nazwisko" value="<?php echo $result['nazwisko']; ?>" name="nazwisko" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Adres</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="adres" value="<?php echo $result['adres']; ?>" name="adres">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">miasto</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="miasto" name="miasto" value="<?php echo $result['miasto']; ?>">
                </div>
                <div class="mb-3">
                    <label for="kod-poczty">Kod pocztowy</label>
                    <input type="text" value="<?php echo $result['kod_pocztowy']; ?>" maxlength="6" class="form-control c-account-forms__form-input" pattern="^[0-9]{2}-[0-9]{3}$" name="kod" id="kod-poczty" placeholder="np. 00-000">
                </div>
                <div class="o-sideBySide">
                    <div class="o-padding">

                        <input type="hidden" name="id" value="<?php echo $result['id_konta']; ?>">
                        <input type="submit" value="Zapisz" name="DODAJ" class="btn btn-primary">
                    </div>
                    <div class="o-padding">
                        <a class=" o-link" href="Konta.php"><button class="btn btn-primary" type="submit">Anuluj</buttom></a>
                        </di>
                    </div>



                </div>
        </form>

    </main>


</body>
<?php include_once "footer.php"; ?>