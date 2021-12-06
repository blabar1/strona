<section class="c-featured-products">
    <div class="o-wrapper ">
        <div class="o-title">
            Polecamy:
        </div>
        <?php include_once("database.php"); ?>
        <?php include_once "separator.php"; ?>
        <div class="row">
            <?php
            $query = $conn->query("SELECT * FROM produkt LIMIT 12");
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $i = 0;
            foreach ($result as $row) {
                if ($i == 6) {
                    print('</div><div class="row">');
                    $i = 0;
                }
                $query1 = $conn->query("SELECT nazwa FROM kategoria WHERE id_kategoria = '" . $row['kategoria'] . "' LIMIT 1");
                $result1 = $query1->fetch(PDO::FETCH_ASSOC);
                print('<div class="col-xl-1 col-lg-2 col-sm-4 col-xs-6">');
                get_element("elements/element-product-tile-button.php", array(
                    'thumbnail' => "images/produkty/" . $row['miniaturka'],
                    'category'  => $result1['nazwa'],
                    'name'  =>  $row['nazwa'],
                    'price' =>  $row['cena'],
                    'id' => $row['id_produkt']
                ));
                print('</div>');
                $i++;
            }
            ?>
        </div>
    </div>
    </div>
</section>