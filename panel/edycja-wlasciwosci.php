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
                if (isset($_POST['nazwa'])) {
                    $name = $_POST['nazwa'] ?? null;
                    if ($name !== null) {
                        $kwerenda_dod = $conn->query("UPDATE wlasciwosc set nazwa ='" . $_POST['nazwa'] . "' where id_wlasciwosc ='" . $_POST['id'] ."'");
                        echo "<script>alert('Właściwość zaktualizowana pomyślnie.'); window.open('Właściwości.php','_self');</script>";
                    }
                }


                ?>
                <form method="post" id="dod" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <?php
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $query = $conn->query('Select DISTINCT * from wlasciwosc where id_wlasciwosc =' . $id);
                    $record = $query->fetch(\PDO::FETCH_ASSOC);
                        print('<input type="text" class="nazwa form-control" id="formGroupExampleInput" placeholder="Nazwa" value="' . $record["nazwa"] . '" name="nazwa" required><input type="hidden" name="id" value="' . $record["id_wlasciwosc"] . '">');

                }
                ?>

            </div>
            <div class="o-sideBySide">
                <div class="o-padding">
                    

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