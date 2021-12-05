<?php
$named = str_replace(' ', '-', $name);
?>
<a href="productPage.php?name=<?php echo $named; ?>&id=<?php echo $id; ?>">
    <div class="c-product-tile">
        <div class="c-product-tile__thumbnail" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
        <div class="c-product-tile__content">
            <div class="c-product-tile__category"><?php echo $category; ?></div>
            <div class="c-product-tile__name"><?php echo $name; ?></div>
            <div class="c-product-tile__price"><?php echo ($price . " zł"); ?></div>
</a>
<div class="c-product-tile__button-container">
    <?php get_element("elements/element-basket-button.php", array(
        'id' => $id
    )); ?>

</div>
</div>
</div>

<?php get_element("elements/element-basket-button-modal.php", array(
    'thumbnail' => $thumbnail,
    'name' => $name,
    'price' => $price,
    'id' => $id
)); ?>