<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>


<div class="o-wrapper">
    <div class="c-productPage">
        <div class="c-productPage-container">
            <!-- gallery-->
            <?php get_element("elements/element-product-gallery.php", array(
                'thumbnail' => "images/komputerek.jpg",
                'images' => ['images/slider_item_1.jpg', 'images/slider_item_1.jpg', 'images/slider_item_3.jpg']
            )); ?>


        </div>
    </div>
</div>


<?php get_element("templates/footer.php"); ?>



<?php include_once "footer.php"; ?>