<div class="c-categoryProduct-filter__title"><?php echo $title; ?></div>
<?php include "database.php" ?>
<?php
if ($_SESSION['category'] != 0) {
    $query = $conn->query("SELECT DISTINCT wartosc FROM produkt_wlasciwosc WHERE nazwa_wlasciwosc = $id_title AND produkt IN (SELECT id_produkt FROM produkt WHERE (kategoria IN (SELECT id_kategoria FROM kategoria WHERE nadkategoria = '" . $_SESSION['category'] . "') OR kategoria = '" . $_SESSION['category'] . "'))");
} else {
    $query = $conn->query("SELECT DISTINCT wartosc FROM produkt_wlasciwosc WHERE nazwa_wlasciwosc = $id_title");
}
$result = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $f = $_SESSION['filters'];
    if (!empty($f)) {
        if (in_array($id_title . ";" . $row['wartosc'],$f)) {
            print('<div class="c-categoryProduct-filter__body">
            <input onclick="filter_event()" class="c-categoryProduct-filter__checkbox" type="checkbox" id="f' . $row['wartosc'] . '" name="filters[]" value="' . $id_title . ";" . $row['wartosc'] . '" checked>
            <label class="c-categoryProduct-filter__checkbox-label" for="f' . $row['wartosc'] . '">' . $row['wartosc'] . '</label>
        </div>');
        } else {
            print('<div class="c-categoryProduct-filter__body">
        <input onclick="filter_event()" class="c-categoryProduct-filter__checkbox" type="checkbox" id="f' . $row['wartosc'] . '" name="filters[]" value="' . $id_title . ";" . $row['wartosc'] . '">
        <label class="c-categoryProduct-filter__checkbox-label" for="f' . $row['wartosc'] . '">' . $row['wartosc'] . '</label>
    </div>');
        }
    } else {
        print('<div class="c-categoryProduct-filter__body">
        <input onclick="filter_event()" class="c-categoryProduct-filter__checkbox" type="checkbox" id="f' . $row['wartosc'] . '" name="filters[]" value="' . $id_title . ";" . $row['wartosc'] . '">
        <label class="c-categoryProduct-filter__checkbox-label" for="f' . $row['wartosc'] . '">' . $row['wartosc'] . '</label>
    </div>');
    }
}
?>