<?php

use function PHPSTORM_META\map;

include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>
<?php get_element("elements/element-banner-slider.php", array(
    'images' => ['images/slider-item-4.jpg', 'images/slider-item-3.jpg']
)); ?>

<?php get_element("elements/element-featured-products.php"); ?>

<?php get_element("elements/element-products-cards.php", array(
    'title' => 'XD',
)); ?>
<?php include_once("elements/element-promotion-half.php"); ?>


<?php get_element("templates/footer.php"); ?>
<?php include_once "footer.php"; ?>