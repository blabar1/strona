<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>

<?php get_element("elements/element-banner-slider.php", array(
    'images' => ['images/slider_item_1.jpg', 'images/slider_item_1.jpg', 'images/slider_item_3.jpg']
)); ?>

<!--category body-->
<div class="o-wrapper">
    <div class="o-title">Nazwa sklepu</div>
    <?php include_once "separator.php"; ?>
    <div class="c-category">
        <div class="row">
            <!--list-->
            <div class="c-category-list-text__container col-xl-3 col-lg-3 col-md-3">
                <div class="c-category-list-text">
                    <ul>
                        <?php
                        $query = $conn->query("SELECT id_kategoria, nazwa, miniaturka FROM kategoria WHERE nadkategoria is NULL");
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach($result as $row){
                            print('<li>
                            <a href="#0">
                            <div class="c-category-list-element">'.$row['nazwa'].'</div>
                            </a>
                            </li>');
                        }
                        ?>
                    </ul>

                </div>
            </div>
            <!-- category tiles-->
            <div class="c-category-tiles__container col-xl-9 col-lg-9 col-md-9" style="background-color:white;">

                <?php 
                     foreach($result as $row){
                        get_element("elements/element-category-tile.php", array(
                            'thumbnail' => "images/kategorie/".$row['miniaturka'],
                            'category' => $row['nazwa'],
                            'id_category' => $row['id_kategoria']
                        )); 
                    }
                    ?>
            </div>
        </div>

    </div>
</div>

<?php get_element("templates/footer.php"); ?> <?php include_once "footer.php"; ?>