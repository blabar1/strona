<!-- products cards -->
<div class="c-products-cards">
<?php include ("database.php"); ?>
    <div class="o-wrapper">
        <div class="c-products-cards__title">
            <div class="o-title"><?php echo $title; ?></div>
            <span class="o-separator"></span>
        </div>
        <div class=" c-products-cards__slider js-products-slider">
            
                <?php
                    $query = $conn->query("SELECT * FROM produkt ORDER BY RAND() LIMIT 12"); 
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    foreach($result as $row){
                        $query1 = $conn->query("SELECT nazwa FROM kategoria WHERE id_kategoria = '".$row['kategoria']."' LIMIT 1"); 
                        $result1 = $query1->fetch(PDO::FETCH_ASSOC);
                        print('<div class="c-products-cards__slider-item c-product-cards-wrapper">');
                        get_element("elements/elementjd.php", array(
                            'thumbnail' => "images/produkty/".$row['miniaturka'],
                            'category'  => $result1['nazwa'],
                            'name'  =>  $row['nazwa'],
                            'price' =>  $row['cena'],
                            'id' => $row['id_produkt']
                        ));
                        print('</div>');
                    }
                 ?>
        </div>
    </div>