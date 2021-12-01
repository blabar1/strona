<?php
setcookie('widok', 'tiles', time() + 3600 * 24 * 14, "/");
if (!isset($_SESSION)) {
  session_start();
}
?>
<?php include_once "../functions.php" ?>
<?php include_once "database.php" ?>
<!-- Product tiles-->
<div class="c-categoryProducts-tiles__container col-xl-9 col-lg-9 col-md-9" style="background-color:white;">
  <?php
  if (isset($_SESSION['search'])) {
    $szukana = $_SESSION['search'];
  }
  if ($_SESSION['category'] != 0)
    $query = $conn->query("SELECT id_produkt, nazwa, cena, miniaturka FROM produkt WHERE nazwa LIKE '%" . trim($szukana) . "%' AND (kategoria IN (SELECT id_kategoria FROM kategoria WHERE nadkategoria = '" . $_SESSION['category'] . "') OR kategoria = '" . $_SESSION['category'] . "') 
  
    LIMIT 1 OFFSET " . ($_SESSION['page']-1)*1);
  else
    $query = $conn->query("SELECT id_produkt, nazwa, cena, miniaturka FROM produkt WHERE nazwa LIKE '%" . trim($szukana) . "%'". " LIMIT 15 OFFSET " . ($_SESSION['page']-1)*15 );
  $results = $query->fetchAll(PDO::FETCH_ASSOC);
  if (!empty($results)) {
    foreach ($results as $row) {
      $wlasciowsci = array();
      $query2 = $conn->query("SELECT wartosc, nazwa FROM produkt_wlasciwosc INNER JOIN  wlasciwosc ON nazwa_wlasciwosc = id_wlasciwosc WHERE produkt =  '" . $row['id_produkt'] . "' ORDER BY nazwa LIMIT 4");
      $results2 = $query2->fetchAll(PDO::FETCH_ASSOC);
      foreach ($results2 as $row2) {
        $wlasciowsci[] = $row2['nazwa'] . ": " . $row2['wartosc'];
      }
      get_element("elements/element-product-tile__description.php", array(
        'thumbnail' => "images/produkty/" . $row['miniaturka'],
        'name' => $row['nazwa'],  
        'price' => $row['cena'],
        'description' =>  $wlasciowsci,
        'id' => $row['id_produkt']
      ));
    }
  } else
    print('<h6 style="color:red;font-size:50px;">Ni ma produktow. WYNOCHA!!!1!</h6>'); // dobrze zrobione co ni blazej?
  ?>
</div>