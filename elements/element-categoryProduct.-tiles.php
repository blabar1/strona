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
  if (isset($_SESSION['filters']) && !empty($_SESSION['filters'])) {
    $p = explode(";", $_SESSION['filters'][0]);
    $filter = "AND id_produkt IN (SELECT produkt FROM produkt_wlasciwosc WHERE (nazwa_wlasciwosc = " . $p[0] . " AND wartosc = '" . $p[1] . "')";
    for ($i = 1; $i < sizeof($_SESSION['filters']); $i++) {
      $f = $_SESSION['filters'];
      $e = explode(";", $f[$i]);
      $filter .= ' OR (nazwa_wlasciwosc = ' . $e[0] . ' AND wartosc = "' . $e[1] . '") ';
    }
    $filter .= ")";
  } else
    $filter = "";
  if (isset($_SESSION['search'])) {
    $szukana = $_SESSION['search'];
  }
  if (isset($_GET['order']) && $_GET['order'] == "cr")
    $o = " ORDER BY cena ASC ";
  else if (isset($_GET['order']) && $_GET['order'] == "cm")
    $o = " ORDER BY cena DESC ";
  else if (isset($_GET['order']) && $_GET['order'] == "nr")
    $o = " ORDER BY nazwa ASC ";
  else if (isset($_GET['order']) && $_GET['order'] == "nm")
    $o = " ORDER BY nazwa DESC ";
  else
    $o = "";
  if ($_SESSION['category'] != 0)
    $query = $conn->query("SELECT id_produkt, nazwa, cena, miniaturka FROM produkt WHERE nazwa LIKE '%" . trim($szukana) . "%' AND (kategoria IN (SELECT id_kategoria FROM kategoria WHERE nadkategoria = '" . $_SESSION['category'] . "') OR kategoria = '" . $_SESSION['category'] . "') 
    $filter
    $o
    LIMIT 15 OFFSET " . ($_SESSION['page'] - 1) * 15);
  else
    $query = $conn->query("SELECT id_produkt, nazwa, cena, miniaturka FROM produkt WHERE nazwa LIKE '%" . trim($szukana) . "%'" . " $filter $o LIMIT 15 OFFSET " . ($_SESSION['page'] - 1) * 15);
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
    print('<h6><div class="o-title">Nie znaleziono produktów</div> <span><img class="o-notFound-image c-categoryProduct-fitter" src="images/imageNotFound.svg"></span></h6>'); // dobrze zrobione co ni blazej?
  ?>
</div>