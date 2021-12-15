<!DOCTYPE html>
<html lang="en">

<?php include("database.php"); ?>
<?php include("header.php"); ?>
<?php include("topBar.php"); ?>
<!-- Maciek tam jest menu takie jakby z uzytkownikiem -->



<body>

    <!-- offcanvas -->
    <?php include("canvas.php"); ?>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
        <div class="o-title panel-title">
            <h3>Edycja właściwości</h3>
        </div>
        <div class="container-fluid">


            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nazwa</label>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_POST['nazwa'] ?? null;
                    if ($name !== null) {
                        $kwerenda_dod = $conn->query("UPDATE wlasciowsc set nazwa =" . $nazwa . "where id_wlasciwosc =" . $id);
                        echo "<script> window.open('Właściwości.php','_self');</script>";
                    }
                }


                ?>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $id = $_POST['idwlasciwosci_edycja'];
                    $query = $conn->query('Select DISTINCT * from wlasciwosc where id_wlasciwosc =' . $id);
                    $record = $query->fetchAll(\PDO::FETCH_ASSOC);
                    foreach ($record as $result) {
                        print('<input type="text" class="nazwa form-control" id="formGroupExampleInput" placeholder="Nazwa" value="' . $result["nazwa"] . '" name="nazwa" required>');
                    }
                }
                ?>

            </div>
            <div class="o-sideBySide">
                <div class="o-padding">
                    <form method="post" id="dod" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                        <button class="btn btn-primary" type="submit">Zapisz</buttom>
                </div>
                <div class="o-padding">
                    <a class=" o-link" href="Właściwości.php"><button class="btn btn-primary" type="submit">Anuluj</buttom></a>
                    </di>
                </div>

                </form>
            </div>

    </main>


</body>
<?php include_once "footer.php"; ?>