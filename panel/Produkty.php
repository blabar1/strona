<!DOCTYPE html>
<html lang="en">

<?php include("database.php"); ?>
<?php include("header.php"); ?>
<?php include("topBar.php"); ?>
<!-- Maciek tam jest menu takie jakby z uzytkownikiem -->

<body>
  <?php
  if (isset($_POST['DODAJ'])) {
    $conn->beginTransaction();
    try {
    move_uploaded_file($_FILES['miniaturka']['tmp_name'], "../images/produkty/" . $_FILES['miniaturka']['name']);
    $conn->query("INSERT INTO `produkt`( `nazwa`, `cena`, `ilosc`, `opis`, `miniaturka`, `kategoria`) VALUES ('" . $_POST['nazwa'] . "','" . $_POST['cena'] . "','" . $_POST['ilosc'] . "','" . $_POST['opis'] . "','" . $_FILES['miniaturka']['name'] . "','" . $_POST['kategoria'] . "')");
    $query = $conn->query("SELECT max(id_produkt) as id FROM produkt");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    for ($i = 0; $i < sizeof($_POST['wlasnosc']); $i++) {
      $conn->query("INSERT INTO `produkt_wlasciwosc`(`produkt`, `nazwa_wlasciwosc`, `wartosc`) VALUES ('" . $result['id'] . "','" . $_POST['wlasnosc'][$i] . "','" . $_POST['wartosc'][$i] . "')");
    }
    mkdir("../images/produkty/" . $result['id']);
    for ($i = 0; $i < sizeof($_FILES['galeria']['name']); $i++) {
      $conn->query("INSERT INTO `galeria_zdjec`(`plik`, `produkt`) VALUES ('" . $_FILES['galeria']['name'][$i] . "','" . $result['id'] . "')");
      move_uploaded_file($_FILES['galeria']['tmp_name'][$i], "../images/produkty/" . $result['id'] . "/" . $_FILES['galeria']['name'][$i]);
    }
    print('<script>alert("Produkt dodany pomyślnie."); window.location.href = "Produkty.php";</script>');
    $conn->commit();
  } catch (PDOException) {
    $conn->rollBack();
    print('<script>alert("Wystąpił nieoczekiwany błąd."); window.location.href = "index.php";</script>');
}
  }
  if (isset($_POST['USUN'])) {
    $conn->beginTransaction();
    try {
    $query = $conn->query("SELECT miniaturka FROM produkt WHERE id_produkt = '" . $_POST['id'] . "'");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    unlink("../images/produkty/" . $result['miniaturka']);
    array_map('unlink', glob("../images/produkty/" . $_POST['id'] . "/*.*"));
    rmdir("../images/produkty/" . $_POST['id']);
    $conn->query("DELETE FROM produkt WHERE id_produkt = '" . $_POST['id'] . "'");
    print('<script>alert("Produkt usunięty pomyślnie."); window.location.href = "Produkty.php";</script>');
  }catch (PDOException) {
      $conn->rollBack();
      print('<script>alert("Wystąpił nieoczekiwany błąd."); window.location.href = "Produkty.php";</script>');
  }
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
      <div class="row">

      </div>
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Produkty
              <div class="float-right">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Dodaj Produkt
                </button>
              </div>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-striped data-table " style="width: 100%">
                  <thead>
                    <tr>
                      <th>id_produktu</th>
                      <th>nazwa</th>
                      <th>cena</th>
                      <th>ilosc</th>
                      <th>opis</th>
                      <th>miniaturka</th>
                      <th>kategoria</th>
                      <th> </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = $conn->query("Select * from produkt");
                    $result = $query->fetchAll(\PDO::FETCH_ASSOC);
                    foreach ($result as $rekord) {
                      print("<tr><td>");
                      echo $rekord["id_produkt"];
                      print("</td><td>");
                      echo $rekord["nazwa"];
                      print("</td>");
                      print("</td><td>");
                      echo ($rekord["cena"] . " zł");
                      print("</td>");
                      print("</td><td>");
                      echo $rekord["ilosc"];
                      print("</td>");
                      print("</td><td>");
                      print('<div class="table-description" </div> ' . $rekord["opis"]);
                      print("</td>");
                      print("</td><td>");
                      print('<img class="table-thumbnail" src="../images/produkty/' . $rekord["miniaturka"] . '"');
                      print("</td>");
                      print("</td><td>");

                      $query = $conn->query('Select nazwa from kategoria where id_kategoria =' . $rekord["kategoria"]);
                      $result = $query->fetchAll(\PDO::FETCH_ASSOC);
                      foreach ($result as $record) {
                        echo $record['nazwa'];
                      }

                      print("</td>");
                      print("</td><td>");
                      echo "<div class='functional-buttons'><form method='post' action='edycja-produktu.php' class='temp''><input type='hidden' name='id' value='" . $rekord['id_produkt'] . "'><button type='submit' name='idkategorii_edycja' class='submit  btn btn-primary edycja' value='" . $rekord['id_produkt'] . "'>edytuj</button></form><form  method='post' action='Produkt.php' ><input type='hidden' name='id' value='" . $rekord['id_produkt'] . "'><button type='submit' onclick='return confirm(`Czy napewno chcesz usunąć produkt " . $rekord['nazwa'] . " ?`);'  class='submit  btn btn-primary edycja' name='USUN' value='" . $rekord['id_produkt'] . "'>usun</button></form></div>";
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
            <h5 class="modal-title" id="exampleModalLabel">Dodawanie Produktu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="dod">
            <div class="modal-body">

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nazwa produktu</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nazwa produktu" name="nazwa" value="" required>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Cena</label>
                <input type="number" class="form-control" id="formGroupExampleInput2" min="0" step="0.01" name="cena" placeholder="Cena produktu" value="" required>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Ilosc produktu</label>
                <input type="number" class="form-control" id="formGroupExampleInput2" min="1" name="ilosc" placeholder="Ilosc produktu" value="" required>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Opis</label>
                <label for="comment"></label>
                <textarea class="form-control" rows="5" id="description-item" name="opis" placeholder="Opis" required></textarea>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Miniaturka</label>
                <div class="file-drop-area"> <span class="btn btn-primary ">Wybierz plik</span> <span class="file-message" id="divImageMediaPreview">albo upuść tutaj</span> <input type="file" name="miniaturka" class="file-input" accept=".jfif,.jpg,.jpeg,.png,.gif" required /> </div>
                <div id=> </div>
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Galeria</label>

                <div class="form-group">
                  <div class="file-drop-area-gallery"> <span class="btn btn-primary ">Wybierz plik</span> <span class="file-message" id="divImageMediaPreview-gallery">albo upuść tutaj</span> <input type="file" class="file-input-gallery" name="galeria[]" accept=".jfif,.jpg,.jpeg,.png,.gif" required multiple /> </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Wybierz kategorie</label>
                <select class="form-control" id="formGroupExampleInput2" name="kategoria" required>
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
              <div id="allspec">
                <label for="formGroupExampleInput2" class="form-label">Specyfikacja</label>
                <div id='spec' class="mb-3">

                  <div style="display: flex;">
                    <select class="form-control" style="width: 48%; margin-right: 4%" name="wlasnosc[]" required>
                      <option selected disabled hidden value="">Przykład</option>
                      <?php
                      $query = $conn->query('Select id_wlasciwosc, nazwa from wlasciwosc');
                      $result = $query->fetchAll(\PDO::FETCH_ASSOC);
                      foreach ($result as $record) {
                        print("<option value=" . $record['id_wlasciwosc'] . ">" . $record['nazwa'] . "</option>");
                      }
                      ?>
                    </select>
                    <input type="text" class="form-control" name="wartosc[]" placeholder="wartosc" style="width: 48%" required>
                  </div>
                </div>
              </div>
              <button onclick="addSpec()" type="button" class="btn btn-secondary">Dodaj właściwość</button>
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
  <?php include("footer.php"); ?>


</body>


</html>