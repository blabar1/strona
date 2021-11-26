<?php include_once "../functions.php" ?>
<?php include_once "database.php" ?>
  <!-- Product lists-->
  <div class="c-categoryProducts-tiles__container col-xl-9 col-lg-9 col-md-9" style="background-color:white;">
  <?php
    $query = $conn->query("SELECT id_produkt, nazwa, cena, miniaturka FROM produkt WHERE kategoria IN (SELECT id_kategoria FROM kategoria WHERE nadkategoria = '".$_GET['category']."')");
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($results as $row){
      $wlasciowsci = array();
      $query2 = $conn->query("SELECT wartosc, nazwa FROM produkt_wlasciwosc INNER JOIN  wlasciwosc ON nazwa_wlasciwosc = id_wlasciwosc WHERE produkt =  '".$row['id_produkt']."' ORDER BY nazwa LIMIT 4");
      $results2 = $query2->fetchAll(PDO::FETCH_ASSOC);
      foreach($results2 as $row2){
        $wlasciowsci[] = $row2['nazwa'].": ".$row2['wartosc'] ;
      }
      get_element("elements/element-product-list__description.php", array(
        'thumbnail' => "images/produkty/".$row['miniaturka'],
        'name' => $row['nazwa'],
        'price' => $row['cena'],
        'description' =>  $wlasciowsci
      ));
    }
     ?>
  </div>
  