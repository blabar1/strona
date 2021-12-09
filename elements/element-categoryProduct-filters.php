<div class="c-categoryProduct-filter__title"><?php echo $title; ?></div>
<?php include "database.php" ?>
<?php
    $query = $conn->query("SELECT DISTINCT wartosc FROM produkt_wlasciwosc WHERE nazwa_wlasciwosc = $id_title AND produkt IN (SELECT id_produkt FROM produkt WHERE (kategoria IN (SELECT id_kategoria FROM kategoria WHERE nadkategoria = '" . $_SESSION['category'] . "') OR kategoria = '" . $_SESSION['category'] . "'))");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $row){
        print('<div class="c-categoryProduct-filter__body">
        <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="f'.$row['wartosc'].'" name="filters[]" value="'.$row['wartosc'].'">
        <label class="c-categoryProduct-filter__checkbox-label" for="f'.$row['wartosc'].'">'.$row['wartosc'].'</label>
    </div>');
    }
?>