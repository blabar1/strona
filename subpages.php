<?php

use function PHPSTORM_META\map;

include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>
<div class="o-wrapper">
    <div class="c-subPage-title">
        <div class="o-title">Podstrony</div>
        <span class="o-separator"></span>
    </div>
    <div class="">
        <div class="row">
            <div class="c-subPage-container">

                <?php get_element("elements/element-subpage-tile.php", array(
                    'thumbnail' => './images/produkty/p1.jpg',
                    'title' => 'tytul',
                    'description' => 'tresc strony tutaj to wiesz bedzie taki preview'
                )); ?>
                <?php get_element("elements/element-subpage-tile.php", array(
                    'thumbnail' => './images/produkty/p1.jpg',
                    'title' => 'tytul',
                    'description' => 'tresc strony tutaj to wiesz bedzie taki preview'
                )); ?>
                <?php get_element("elements/element-subpage-tile.php", array(
                    'thumbnail' => './images/produkty/p1.jpg',
                    'title' => 'tytul',
                    'description' => 'tresc strony tutaj to wiesz bedzie taki preview'
                )); ?>
                <?php get_element("elements/element-subpage-tile.php", array(
                    'thumbnail' => './images/produkty/p1.jpg',
                    'title' => 'tytul',
                    'description' => 'tresc strony tutaj to wiesz bedzie taki preview'
                )); ?>
                <?php get_element("elements/element-subpage-tile.php", array(
                    'thumbnail' => './images/produkty/p1.jpg',
                    'title' => 'tytul',
                    'description' => 'tresc strony tutaj to wiesz bedzie taki preview'
                )); ?>
                <?php get_element("elements/element-subpage-tile.php", array(
                    'thumbnail' => './images/produkty/p1.jpg',
                    'title' => 'tytul',
                    'description' => 'tresc strony tutaj to wiesz bedzie taki preview'
                )); ?>
                <?php get_element("elements/element-subpage-tile.php", array(
                    'thumbnail' => './images/produkty/p1.jpg',
                    'title' => 'tytul',
                    'description' => 'tresc strony tutaj to wiesz bedzie taki preview'
                )); ?>

            </div>
        </div>
    </div>
</div>


<?php get_element("templates/footer.php"); ?>
<?php include_once "footer.php"; ?>