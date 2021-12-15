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
    $query = $conn->query("SELECT * FROM produkt WHERE id_produkt = '" . $_POST['id'] . "'");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (isset($_POST['DODAJ'])) {
      $conn->beginTransaction();
      try {
            if ($_FILES['plik']['name'] != "") {
                unlink("../images/produkty/" . $result['miniaturka']);
                $conn->query("UPDATE `produkt` SET `nazwa`='".$_POST['nazwa']."',`cena`='".$_POST['cena']."',`ilosc`='".$_POST['ilosc']."',`opis`='".$_POST['opis']."',`miniaturka`='".$_FILES['plik']['name']."',`kategoria`='".$_POST['kategoria']."' WHERE id_produkt = '" . $_POST['id'] . "'");
                move_uploaded_file($_FILES['plik']['tmp_name'], "../images/produkty/" . $_FILES['plik']['name']);
                print('<script>alert("Produkt zaktualizowany pomyślnie."); window.location.href = "Produkty.php";</script>');
               $conn->commit();
            } else {
                $conn->query("UPDATE `produkt` SET `nazwa`='".$_POST['nazwa']."',`cena`='".$_POST['cena']."',`ilosc`='".$_POST['ilosc']."',`opis`='".$_POST['opis']."',`kategoria`='".$_POST['kategoria']."' WHERE id_produkt = '" . $_POST['id'] . "'");
                print('<script>alert("Produkt zaktualizowany pomyślnie."); window.location.href = "Produkty.php";</script>');
               $conn->commit();
            }
      } catch (PDOException) {
          $conn->rollBack();
          print('<script>alert("Wystąpił nieoczekiwany błąd."); window.location.href = "index.php";</script>');
       }
    }
    ?>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
        <div class="o-title panel-title">
            <h3>Edycja produktu</h3>
        </div>
        <div class="container-fluid">
            <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="dod">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nazwa produktu</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nazwa produktu" name="nazwa" value="<?php echo $result['nazwa'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Cena</label>
                        <input type="number" class="form-control" id="formGroupExampleInput2" min="0" step="0.01" name="cena" placeholder="Cena produktu" value="<?php echo $result['cena'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Ilosc produktu</label>
                        <input type="number" class="form-control" id="formGroupExampleInput2" min="1" name="ilosc" placeholder="Ilosc produktu" value="<?php echo $result['ilosc'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Opis</label>
                        <label for="comment"></label>
                        <textarea class="form-control" rows="5" id="description-item" name="opis" placeholder="Opis" required><?php echo $result['opis'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Miniaturka</label>
                        <div class="file-drop-area"> <span class="btn btn-primary ">Wybierz plik</span> <span class="file-message" id="divImageMediaPreview">albo upuść tutaj</span> <input type="file" name="plik" class="file-input" accept=".jfif,.jpg,.jpeg,.png,.gif" /> </div>
                        <div id=> </div>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Wybierz kategorie</label>
                        <select class="form-control" id="formGroupExampleInput2" name="kategoria" required>
                            <option selected disabled hidden value="">Przykład</option>
                            <?php
                            $query1 = $conn->query('Select Distinct id_kategoria, nazwa from kategoria');
                            $result1 = $query1->fetchAll(\PDO::FETCH_ASSOC);
                            foreach ($result1 as $record) {
                                if ($result['kategoria'] == $record['id_kategoria'])
                                    print("<option selected value=" . $record['id_kategoria'] . ">" . $record['nazwa'] . "</option>");
                                else
                                    print("<option value=" . $record['id_kategoria'] . ">" . $record['nazwa'] . "</option>");
                            }
                            ?>
                        </select>
                    </div>

                </div>

                <div class="o-sideBySide">
                    <div class="o-padding">

                    <input type="hidden" name="id" value="<?php echo $result['id_produkt']; ?>">
                        <button class="btn btn-primary" name ="DODAJ"type="submit">Zapisz</buttom>
                    </div>
                    <div class="o-padding">
                        <a class=" o-link" href="Produkty.php"><button class="btn btn-primary" type="submit">Anuluj</buttom></a>
                        </di>
                    </div>

            </form>
        </div>

    </main>


</body>
<?php include_once "footer.php"; ?>