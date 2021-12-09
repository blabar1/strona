<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>

<?php
if (isset($_GET['id']))
    $idp = $_GET['id'];
else
    $idp = 69;
$query = $conn->query("SELECT kategoria FROM produkt WHERE id_produkt = '" . $idp . "' LIMIT 1");
$result = $query->fetch(PDO::FETCH_ASSOC);
print('<div class="c-productPage-breadcrumbs-wrapper">');
get_element("elements/element-breadcrumbs.php", array(
    'page' => $result['kategoria']

)); ?>
</div>
<div class="o-wrapper">

    <div class="c-productPage">
        <div class="row">
            <div class="c-productPage-container">
                <?php
                $query = $conn->query("SELECT wartosc, nazwa FROM produkt_wlasciwosc INNER JOIN  wlasciwosc ON nazwa_wlasciwosc = id_wlasciwosc WHERE produkt = $idp ORDER BY nazwa LIMIT 4");
                $results = $query->fetchAll(PDO::FETCH_ASSOC);
                if (!empty($results)) {
                    foreach ($results as $row) {
                        $wlasciowsci[] = $row['nazwa'] . ": " . $row['wartosc'];
                    }
                } else {
                    $wlasciowsci[] = "Nie znaleziono.";
                }
                $query = $conn->query("SELECT * FROM galeria_zdjec WHERE produkt = $idp");
                $result = $query->fetchALL(PDO::FETCH_ASSOC);
                if (!empty($result)) {
                    foreach ($result as $row) {
                        $images[] = "images/produkty/$idp/" . $row['plik'];
                    }
                } else {
                    $query = $conn->query("SELECT * FROM produkt WHERE id_produkt = $idp LIMIT 1");
                    $result = $query->fetch(PDO::FETCH_ASSOC);
                    $images = array();
                }
                $query = $conn->query("SELECT * FROM produkt WHERE id_produkt = $idp LIMIT 1");
                $result = $query->fetch(PDO::FETCH_ASSOC);
                get_element("elements/element-product-gallery.php", array(
                    'thumbnail' => "images/produkty/" . $result['miniaturka'],
                    'images' => $images
                )); ?>
                <?php get_element("elements/element-product-productDescription.php", array(
                    'id' => $idp,
                    'name' => $result['nazwa'],
                    'description' => $wlasciowsci,
                    'price' => $result['cena']
                )); ?>
            </div>
        </div>
    </div>
    <span class="o-separator"></span>
    <?php get_element("elements/element-product-descritpionBlock.php", array(
        'descriptionProduct' => $result['opis']
    )); ?>

    <span class="o-separator specifications-span"></span>
    <?php
    $query1 = $conn->query("SELECT wartosc, nazwa FROM produkt_wlasciwosc INNER JOIN  wlasciwosc ON nazwa_wlasciwosc = id_wlasciwosc WHERE produkt = $idp ORDER BY nazwa");
    $result1 = $query1->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($result1)) {
        foreach ($result1 as $row1) {
            $specification[] = $row1['nazwa'] . ";" . $row1['wartosc'];
        }
    } else {
        $specification[] = "Błąd;Błąd";
    }
    get_element("elements/element-product-specification.php", array(
        'specification' => $specification
    ));
    ?>
</div>
<?php get_element("elements/element-product-productPageModal.php", array(
    'thumbnail' => 'images/produkty/' . $result['miniaturka'],
    'name' => $result['nazwa'],
    'price' => $result['cena']
)); ?>

<?php get_element("templates/footer.php"); ?>
<?php include_once "footer.php"; ?>