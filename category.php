<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>

<?php get_element("elements/element-banner-slider.php", array(
    'images' => ['images/slider-item-4.jpg', 'images/slider-item-3.jpg']
)); ?>

<!--category body-->

<?php get_element("elements/element-breadcrumbs.php", array(
    'page' => $_SESSION['category']
)); ?>
<div class="o-wrapper">
    <div class="o-title">PlaceHolder.pl</div>
    <?php include_once "separator.php"; ?>
    <div class="c-category">
        <div class="row">
            <!--list-->
            <div class="c-category-list-text__container col-xl-3 col-lg-3 col-md-3">
                <div class="c-category-list-text">
                    <ul>
                        <?php
                        $query = $conn->query("SELECT id_kategoria, nazwa FROM kategoria WHERE nadkategoria is NULL");
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($result as $row) {
                            print('<li>
                            <a id="c' . $row['id_kategoria'] . '" onclick="event.preventDefault(); category_event(\'c' . $row['id_kategoria'] . '\')" href="/strona/category.php?category=' . $row['id_kategoria'] . '">
                            <div class="c-category-list-element">' . $row['nazwa'] . '</div>
                            </a>
                            </li>');
                        }
                        ?>
                    </ul>

                </div>
            </div>
            <!-- category tiles-->
            <div id="categoryTitles" class="c-category-tiles__container col-xl-9 col-lg-9 col-md-9" style="background-color:white;">

                <?php
                $query = $conn->query("SELECT id_kategoria, nazwa, miniaturka FROM kategoria WHERE nadkategoria ='".$_SESSION['category']."'");
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $row) {
                    get_element("elements/element-category-tile.php", array(
                        'thumbnail' => "images/kategorie/" . $row['miniaturka'],
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