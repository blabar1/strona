<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>

<?php get_element("elements/element-banner-slider.php", array(
    'images' => ['images/slider_item_1.jpg', 'images/slider_item_1.jpg', 'images/slider_item_3.jpg']
)); ?>

<!--category body-->
<div class="o-wrapper">
    <div class="o-title">Kategorie</div>
    <div class="c-category">
        <div class="row">
            <div class="c-category-list-text__container col-xl-3 col-lg-3 col-md-3">
                <div class="c-category-list-text">
                    <ul>
                        <li>
                            <a href="#0">
                                <div class="c-category-list-element">Laptopy i komputery</div>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <div class="c-category-list-element">Smartfony i smartwatche</div>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <div class="c-category-list-element">Gaming i streaming</div>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <div class="c-category-list-element">Podzespoły komputerowe</div>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <div class="c-category-list-element">Urządzenie peryferyjne</div>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <div class="c-category-list-element">TV i audio</div>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <div class="c-category-list-element">Smarthome i lifestyle</div>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <div class="c-category-list-element">Akcesoria</div>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="c-category-tiles__container col-xl-9 col-lg-9 col-md-9" style="background-color:white;">
                <?php get_element("elements/element-category-tile.php", array(
                    'thumbnail' => "images/myszka2.jpg",
                    'category' => "COS"
                )); ?>
                <?php get_element("elements/element-category-tile.php", array(
                    'thumbnail' => "images/myszka2.jpg",
                    'category' => "COS"
                )); ?>
                <?php get_element("elements/element-category-tile.php", array(
                    'thumbnail' => "images/myszka2.jpg",
                    'category' => "COS"
                )); ?>
                <?php get_element("elements/element-category-tile.php", array(
                    'thumbnail' => "images/myszka2.jpg",
                    'category' => "COS"
                )); ?>

            </div>
        </div>

    </div>
</div>

<?php get_element("templates/footer.php"); ?> <?php include_once "footer.php"; ?>