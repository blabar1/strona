<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>


<div class="o-wrapper">
    <div class="c-productPage">
        <div class="row">
            <div class="c-productPage-container">
                <?php get_element("elements/element-product-gallery.php", array(
                    'thumbnail' => "images/produkty/p8.jpg",
                    'images' => ['images/produkty/p7.jpg', 'images/produkty/p3.jpg', 'images/produkty/p4.jpg']
                )); ?>
                <?php get_element("elements/element-product-productDescription.php", array(
                    'name' => 'Microsoft Surface Go 3 Y/4GB/64GB/Win11',
                    'description1' => 'opis 1',
                    'description2' => 'opis 2',
                    'description3' => 'opis 3',
                    'description4' => 'opis 4',
                    'price' => '123123.99',
                )); ?>


            </div>
        </div>
    </div>
    <span class="o-separator specifications-span"></span>
    <?php get_element("elements/element-product-specification.php", array(
        'SpecificationName' => 'Microsoft Surface Go 3 Y/4GB/64GB/Win11',
        'SpecificationValue' => 'Microsoft Surface Go 3 Y/4GB/64GB/Win11 Microsoft Surface Go 3 Y/4GB/64GB/Win11Microsoft Su Y/4GB/64GB/Win11 Microsoft Surface Go 3 Y/4GB/64GB/Win11Microsoft Su Y/4GB/64GB/Win11 Microsoft Surface Go 3 Y/4GB/64GB/Win11Microsoft Su Y/4GB/64GB/Win11 Microsoft Surface Go 3 Y/4GB/64GB/Win11Microsoft Su Y/4GB/64GB/Win11 Microsoft Surface Go 3 Y/4GB/64GB/Win11Microsoft Su Y/4GB/64GB/Win11 Microsoft Surface Go 3 Y/4GB/64GB/Win11Microsoft Surface Go 3 Y/4GB/64GB/Win11',
        'SpecificationName1' => 'Microsoft Surface Go 3 Y/4GB/64GB/Win11',
        'SpecificationValue1' => 'Microsoft Surface Go 3 Y/4GB/64GB/Win11 Microsoft Surface Go 3 Y/4GB/64GB/Win11Microsoft Surface Go 3 Y/4GB/64GB/Win11',
    )); ?>
</div>


<?php get_element("templates/footer.php"); ?>
<?php include_once "footer.php"; ?>