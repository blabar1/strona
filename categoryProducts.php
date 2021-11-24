<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>

<?php get_element("elements/element-banner-slider.php", array(
    'images' => ['images/slider_item_1.jpg', 'images/slider_item_1.jpg', 'images/slider_item_3.jpg']
)); ?>
<!--category body-->
<div class="o-wrapper">
    <div class="o-title">Nazwa kategorii</div>
    <?php include_once "separator.php"; ?>
    <div class="c-categoryProducts">
        <div class="row">
            <!--list-->
            <div class="c-categoryProduct-filters__container col-xl-3 col-lg-3 col-md-3">
                <div class="c-categoryProduct-filters">
                    <div class="o-title">Filtry</div>


                </div>
            </div>
            <!-- category tiles-->
            <div class="c-category-tiles__container col-xl-9 col-lg-9 col-md-9" style="background-color:white;">
                <?php get_element("elements/element-product-tile__description.php", array(
                    'thumbnail' => "images/myszka2.jpg",
                    'category' => "COS",
                    'name' => "myszka",
                    'price' => "999999"
                )); ?>
                <?php get_element("elements/element-product-tile__description.php", array(
                    'thumbnail' => "images/myszka2.jpg",
                    'category' => "COS",
                    'name' => "myszka",
                    'price' => "999999"
                )); ?>
                <?php get_element("elements/element-product-tile__description.php", array(
                    'thumbnail' => "images/myszka2.jpg",
                    'category' => "COS",
                    'name' => "myszka",
                    'price' => "999999"
                )); ?>
                <?php get_element("elements/element-product-tile__description.php", array(
                    'thumbnail' => "images/myszka2.jpg",
                    'category' => "COS",
                    'name' => "myszka",
                    'price' => "999999"
                )); ?>
                <?php get_element("elements/element-product-tile__description.php", array(
                    'thumbnail' => "images/myszka2.jpg",
                    'category' => "COS",
                    'name' => "myszka",
                    'price' => "999999"
                )); ?>
                <?php get_element("elements/element-product-tile__description.php", array(
                    'thumbnail' => "images/myszka2.jpg",
                    'category' => "COS",
                    'name' => "myszka",
                    'price' => "999999"
                )); ?>
                <?php get_element("elements/element-product-tile__description.php", array(
                    'thumbnail' => "images/myszka2.jpg",
                    'category' => "COS",
                    'name' => "myszka",
                    'price' => "999999"
                )); ?>
                <?php get_element("elements/element-product-tile__description.php", array(
                    'thumbnail' => "images/myszka2.jpg",
                    'category' => "COS",
                    'name' => "myszka",
                    'price' => "999999"

                )); ?>


            </div>
        </div>

    </div>
</div>
<?php get_element("templates/footer.php"); ?>
<!-- 

<?php include_once "footer.php"; ?>