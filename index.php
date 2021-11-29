<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>
<?php get_element("elements/element-banner-slider.php", array(
    'images' => ['images/slider-item-1.jpg', 'images/slider_item_1.jpg', 'images/slider_item_3.jpg']
)); ?>

<?php get_element("elements/element-featured-products.php"); ?>

<!-- <?php include_once("elements/element-promotion-half.php"); ?> -->


<?php get_element("templates/footer.php"); ?>
<?php include_once "footer.php"; ?>