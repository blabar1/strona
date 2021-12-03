<?php include_once "header.php";

include_once "templates/menu.php"; ?>
<div class="o-wrapper">
    <div class="c-ordersPage-wrapper">
        <div class="c-ordersPage-container">
            <div class="c-ordersPage-title">
                <div class="c-ordersPage-title o-title">Twoje zamówienia</div>
                <span class="o-separator"></span>
            </div>
            <!-- to jak nie ma zamowien chlop jeszcze -->
            <!-- <div class="c-ordersPage-body">
                <div class="c-ordersPage-notFound-text">
                    <div class=" o-title">Nie masz zamówień <span><img class="o-notFound-image" src="images/imageNotFound.svg"></span></div>
                    <h6 class="c-ordersPage-notFound-sub-text"> Wygląda na to że nic jeszcze nie zamawiałeś :(</h6>
                </div>
            </div> --> <span class="linia">
                <div class="c-ordersPage-body">

                    <?php get_element("elements/element-orders-date.php", array(
                        'date' => 'DATA LMAO',
                    )); ?>

                    <?php get_element("elements/element-orders-orderedItem.php", array(
                        'thumbnail' => "images/produkty/p1.jpg",
                        'name' => 'product name',
                        'price' => '21.37',
                        'description' => 'product name',
                        'id' => 'product name',
                        'quantity' => '1',
                    ));
                    ?>
                    <?php get_element("elements/element-orders-orderedItem.php", array(
                        'thumbnail' => "images/produkty/p1.jpg",
                        'name' => 'product name',
                        'price' => '21.37',
                        'description' => 'product name',
                        'id' => 'product name',
                        'quantity' => '1',
                    ));
                    ?>
                    <?php get_element("elements/element-orders-orderedItem.php", array(
                        'thumbnail' => "images/produkty/p5.jpg",
                        'name' => 'product name',
                        'price' => '21.37',
                        'description' => 'product name',
                        'id' => 'product name',
                        'quantity' => '1',
                    ));
                    ?>
                    <?php get_element("elements/element-orders-orderedItem.php", array(
                        'thumbnail' => "images/produkty/p4.jpg",
                        'name' => 'product name',
                        'price' => '21.37',
                        'description' => 'product name',
                        'id' => 'product name',
                        'quantity' => '1',
                    ));
                    ?>
                    <?php get_element("elements/element-orders-orderedItem.php", array(
                        'thumbnail' => "images/produkty/p3.jpg",
                        'name' => 'product name',
                        'price' => '21.37',
                        'description' => 'product name',
                        'id' => 'product name',
                        'quantity' => '1',
                    ));
                    ?>
                    <?php get_element("elements/element-orders-orderedItem.php", array(
                        'thumbnail' => "images/produkty/p2.jpg",
                        'name' => 'product name',
                        'price' => '21.37',
                        'description' => 'product name',
                        'id' => 'product name',
                        'quantity' => '1',
                    ));
                    ?>
            </span>
        </div>
        <div class="c-ordersPage-container-footer">
            <h6>Koszt zamówienia: <?php $price = 999;
                                    echo ($price . " zł"); ?></h6>
        </div>
        <span class="linia">
            <div class="c-ordersPage-body">

                <?php get_element("elements/element-orders-date.php", array(
                    'date' => 'DATA LMAO',
                )); ?>

                <?php get_element("elements/element-orders-orderedItem.php", array(
                    'thumbnail' => "images/produkty/p1.jpg",
                    'name' => 'product name',
                    'price' => '21.37',
                    'description' => 'product name',
                    'id' => 'product name',
                    'quantity' => '1',
                ));
                ?>
                <?php get_element("elements/element-orders-orderedItem.php", array(
                    'thumbnail' => "images/produkty/p1.jpg",
                    'name' => 'product name',
                    'price' => '21.37',
                    'description' => 'product name',
                    'id' => 'product name',
                    'quantity' => '1',
                ));
                ?>
                <?php get_element("elements/element-orders-orderedItem.php", array(
                    'thumbnail' => "images/produkty/p5.jpg",
                    'name' => 'product name',
                    'price' => '21.37',
                    'description' => 'product name',
                    'id' => 'product name',
                    'quantity' => '1',
                ));
                ?>
                <?php get_element("elements/element-orders-orderedItem.php", array(
                    'thumbnail' => "images/produkty/p4.jpg",
                    'name' => 'product name',
                    'price' => '21.37',
                    'description' => 'product name',
                    'id' => 'product name',
                    'quantity' => '1',
                ));
                ?>
                <?php get_element("elements/element-orders-orderedItem.php", array(
                    'thumbnail' => "images/produkty/p3.jpg",
                    'name' => 'product name',
                    'price' => '21.37',
                    'description' => 'product name',
                    'id' => 'product name',
                    'quantity' => '1',
                ));
                ?>
                <?php get_element("elements/element-orders-orderedItem.php", array(
                    'thumbnail' => "images/produkty/p2.jpg",
                    'name' => 'product name',
                    'price' => '21.37',
                    'description' => 'product name',
                    'id' => 'product name',
                    'quantity' => '1',
                ));
                ?>
        </span>
    </div>
    <div class="c-ordersPage-container-footer">
        <h6>Koszt zamówienia: <?php $price = 999;
                                echo ($price . " zł"); ?></h6>
    </div>

</div>
</div>
</div>








<?php get_element("templates/footer.php");
include_once "footer.php"; ?>