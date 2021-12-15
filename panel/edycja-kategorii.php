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
    $query = $conn->query("SELECT * FROM kategoria WHERE id_kategoria = '" . $_POST['id'] . "'");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (isset($_POST['DODAJ'])) {
        if ($_FILES['plik']['name'] != "") {
            unlink("../images/kategorie/" . $result['miniaturka']);
            $conn->query("UPDATE `kategoria` SET `nazwa`='" . $_POST['kat'] . "',`miniaturka`='" . $_FILES['plik']['name'] . "',`nadkategoria`='" . $_POST['nadkat'] . "' WHERE id_kategoria = '" . $_POST['id'] . "'");
            move_uploaded_file($_FILES['plik']['tmp_name'], "../images/kategorie/" . $_FILES['plik']['name']);
            print('<script>alert("Kategoria zmodyfikowana pomyślnie."); window.location.href = "Kategorie.php";</script>');
        } else {
            $conn->query("UPDATE `kategoria` SET `nazwa`='" . $_POST['kat'] . "', `nadkategoria`='" . $_POST['nadkat'] . "' WHERE id_kategoria = '" . $_POST['id'] . "'");
            print('<script>alert("Kategoria zmodyfikowana pomyślnie."); window.location.href = "Kategorie.php";</script>');
        }
    }

    ?>

    <div>
        <<main class="mt-5 pt-3">
            <div class="o-title panel-title">
                <h3>Edycja kategori</h3>
            </div>
            <div class="container-fluid">

                <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="dod">
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nazwa Kategorii</label>
                            <input name="kat" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nazwa kategorii" value="<?php echo $result['nazwa']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Miniaturka (pozostaw puste, jeśli nie chcesz zmieniać)</label>
                            <div class="file-drop-area-category"> <span class="btn btn-primary ">Wybierz plik</span> <span class="file-message" id="divImageMediaPreview3">albo upuść tutaj</span> <input name="plik" type="file" class="file-input-category" accept=".jfif,.jpg,.jpeg,.png,.gif" /> </div>
                            <div id=> </div>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Wybierz nadkategorie</label>
                            <select name="nadkat" class="form-control" id="formGroupExampleInput2" required>
                                <option selected disabled hidden value="">Przykład</option>
                                <?php
                                $query1 = $conn->query('Select Distinct id_kategoria, nazwa from kategoria');
                                $result1 = $query1->fetchAll(\PDO::FETCH_ASSOC);
                                foreach ($result1 as $record1) {
                                    if ($result['nadkategoria'] ==  $record1['id_kategoria']) {
                                        print("<option selected value=" . $record1['id_kategoria'] . ">" . $record1['nazwa'] . "</option>");
                                    } else
                                        print("<option value=" . $record1['id_kategoria'] . ">" . $record1['nazwa'] . "</option>");
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="o-sideBySide">
                <div class="o-padding">
                <input type="hidden" name="id" value="<?php echo $result['id_kategoria']; ?>">

                <input type="submit" value="Zapisz" name="DODAJ" class="btn btn-primary">
                </div>
                <div class="o-padding">
                    <a class=" o-link" href="Kategorie.php"><button class="btn btn-primary" type="submit">Anuluj</buttom></a>
                    </di>
                </div>

                </form>
            </div>
                </form>
            </div>

    </main>


</body>
<?php include_once "footer.php"; ?>