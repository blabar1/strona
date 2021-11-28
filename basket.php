<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>

<div class="o-wrapper">
    <div class="c-basket-wrapper">
        <div class="c-basket">
            <div class="c-basket-container">
                <div class="row">

                    <?php get_element("elements/element-basket-title-button.php", array(
                        'quantity' => '9999'
                        // tam tez jest ten przycisk do usuwania wszystkego
                    )); ?>

                    <?php get_element("elements/element-basket-productList-delete.php", array(
                        'name' => 'XD'
                    )); ?>
                    <span class="o-separator"></span>
                    <div class="c-basket-products-list__container col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7">

                        <?php get_element("elements/element-basket-product-list.php", array(
                            'name' => 'col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7',
                            'thumbnail' => 'images/produkty/p1.jpg',
                            'price' => '99999'
                        )); ?>
                        <?php get_element("elements/element-basket-product-list.php", array(
                            'name' => 'XD',
                            'thumbnail' => 'images/produkty/p3.jpg',
                            'price' => '99999'
                        )); ?>
                        <?php get_element("elements/element-basket-product-list.php", array(
                            'name' => 'XD',
                            'thumbnail' => 'images/produkty/p7.jpg',
                            'price' => '99999'
                        )); ?>
                        <?php get_element("elements/element-basket-product-list.php", array(
                            'name' => 'XD',
                            'thumbnail' => 'images/produkty/p7.jpg',
                            'price' => '99999'
                        )); ?>
                        <?php get_element("elements/element-basket-product-list.php", array(
                            'name' => 'XD',
                            'thumbnail' => 'images/produkty/p7.jpg',
                            'price' => '99999'
                        )); ?>
                        <?php get_element("elements/element-basket-product-list.php", array(
                            'name' => 'XD',
                            'thumbnail' => 'images/produkty/p7.jpg',
                            'price' => '99999'
                        )); ?>
                        <?php get_element("elements/element-basket-product-list.php", array(
                            'name' => 'XD',
                            'thumbnail' => 'images/produkty/p7.jpg',
                            'price' => '99999'
                        )); ?>
                        <?php get_element("elements/element-basket-product-list.php", array(
                            'name' => 'XD',
                            'thumbnail' => 'images/produkty/p7.jpg',
                            'price' => '99999'
                        )); ?>
                        <?php get_element("elements/element-basket-product-list.php", array(
                            'name' => 'XD',
                            'thumbnail' => 'images/produkty/p7.jpg',
                            'price' => '99999'
                        )); ?>
                        <?php get_element("elements/element-basket-product-list.php", array(
                            'name' => 'XD',
                            'thumbnail' => 'images/produkty/p7.jpg',
                            'price' => '99999'
                        )); ?>
                        <?php get_element("elements/element-basket-product-list.php", array(
                            'name' => 'XD',
                            'thumbnail' => 'images/produkty/p7.jpg',
                            'price' => '99999'
                        )); ?>
                        <?php get_element("elements/element-basket-product-list.php", array(
                            'name' => 'XD',
                            'thumbnail' => 'images/produkty/p7.jpg',
                            'price' => '99999'
                        )); ?>
                        <?php get_element("elements/element-basket-product-list.php", array(
                            'name' => 'XD',
                            'thumbnail' => 'images/produkty/p7.jpg',
                            'price' => '99999'
                        )); ?>
                        <?php get_element("elements/element-basket-product-list.php", array(
                            'name' => 'XD',
                            'thumbnail' => 'images/produkty/p7.jpg',
                            'price' => '99999'
                        )); ?>
                        <?php get_element("elements/element-basket-product-list.php", array(
                            'name' => 'XD',
                            'thumbnail' => 'images/produkty/p7.jpg',
                            'price' => '99999'
                        )); ?>


                    </div>
                    <div class="c-basket-products-payment__container col-xs-12 col-sm-12 col-xl-5 col-lg-5 col-md-5">
                        <?php get_element("elements/element-basket-payment.php", array(
                            'price' => '12999999',
                        )); ?>

                    </div>
                </div>

            </div>

        </div>
    </div>


</div>

<?php include_once "footer.php"; ?>