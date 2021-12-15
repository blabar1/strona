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
    $query = $conn->query("SELECT * FROM podstrona WHERE id_podstrona = '" . $_POST['id'] . "'");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (isset($_POST['DODAJ'])) {
        if ($_FILES['plik']['name'] != "") {
            unlink("../images/podstrony/" . $result['zdjecie']);
            $conn->query("UPDATE `podstrona` SET `tytul`='" . $_POST['kat'] . "',`zdjecie`='" . $_FILES['plik']['name'] . "',`tresc`='" . $_POST['opis'] . "' WHERE id_podstrona= '" . $_POST['id'] . "'");
            move_uploaded_file($_FILES['plik']['tmp_name'], "../images/podstrony/" . $_FILES['plik']['name']);
            print('<script>alert("Podstrona zmodyfikowana pomyślnie."); window.location.href = "Podstrony.php";</script>');
        } else {
            $conn->query("UPDATE `podstrona` SET `tytul`='" . $_POST['kat'] . "', `tresc`='" . $_POST['opis'] . "' WHERE id_podstrona = '" . $_POST['id'] . "'");
            print('<script>alert("Podstrona zmodyfikowana pomyślnie."); window.location.href = "Podstrony.php";</script>');
        }
    }

    ?>

    <div>
        <<main class="mt-5 pt-3">
            <div class="o-title panel-title">
                <h3>Edycja podstrony</h3>
            </div>
            <div class="container-fluid">

                <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="dod">
                    <div class="modal-body">
                    <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Tytuł podstrony</label>
                                <input name="kat" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nazwa kategorii" value="<?php echo $result['tytul']; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Zdjęcie</label>
                                <div class="file-drop-area-category"> <span class="btn btn-primary ">Wybierz plik</span> <span class="file-message" id="divImageMediaPreview3">albo upuść tutaj</span> <input name="plik" type="file" class="file-input-category" accept=".jfif,.jpg,.jpeg,.png,.gif"  /> </div>
                                <div id=> </div>
                            </div>
                            <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Tresc</label>
                <label for="comment"></label>
                <textarea class="form-control" rows="5" id="description-item" name="opis" placeholder="Opis" required><?php echo $result['tresc']; ?> </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="o-sideBySide">
                <div class="o-padding">
                <input type="hidden" name="id" value="<?php echo $result['id_podstrona']; ?>">

                <input type="submit" value="Zapisz" name="DODAJ" class="btn btn-primary">
                </div>
                <div class="o-padding">
                    <a class=" o-link" href="Podstrony.php"><button class="btn btn-primary" type="submit">Anuluj</buttom></a>
                    </di>
                </div>

                </form>
            </div>
                </form>
            </div>

    </main>


</body>
<?php include_once "footer.php"; ?>