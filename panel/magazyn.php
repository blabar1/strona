<!DOCTYPE html>
<html lang="en">
<?php include("database.php"); ?>
<?php include("header.php"); ?>
<?php include("topBar.php"); ?>
<body>
<?php include("canvas.php"); ?>
<?php
    if (isset($_POST['DODAJ'])) {
        $query = $conn->query("SELECT ilosc FROM produkt WHERE id_produkt = '".$_POST['produkt']."'");
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $i = $result['ilosc']+$_POST['ilosc'];
        $conn->query("UPDATE produkt SET ilosc = '".$i."' WHERE id_produkt =  '".$_POST['produkt']."'");
        print('<script>alert("Produkt zamówiony pomyślnie."); window.location.href = "magazyn.php";</script>');
    }
    ?>
  </body>
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
                  Zamów produkt do magazynu
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
            <h5 class="modal-title" id="exampleModalLabel">Zamawianie produktu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="dod">
            <div class="modal-body">
            <label for="formGroupExampleInput2" class="form-label">Produkt</label>
                <div id='spec' class="mb-3">
            <select class="form-control"  name="produkt" required>
                      <option selected disabled hidden value="">Przykład</option>
                      <?php
                      $query = $conn->query('Select * from produkt');
                      $result = $query->fetchAll(\PDO::FETCH_ASSOC);
                      foreach ($result as $record) {
                        print("<option value=" . $record['id_produkt'] . ">" . $record['nazwa'] . "</option>");
                      }
                      ?>
                    </select>
                    </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nazwa produktu</label>
                <input type="number" min='1' step='1' class="form-control" id="formGroupExampleInput" placeholder="Ilosc towaru do zamowienia" name="ilosc" value="" required>
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


</html>