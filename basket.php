<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>

<div class="o-wrapper">
    <div class="c-basket-wrapper">
        <div class="c-basket">
            <div class="c-basket-container">
                <div class="row">
                    <?php
                    if (isset($_SESSION['user'])) {
                        $query = $conn->query("SELECT * FROM koszyk WHERE konto = (SELECT id_konta FROM dane_konta WHERE mail = '" . $_SESSION['user'] . "')");
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
                        if (empty($result)) {
                            print('<div class="c-basket-empty">
                            <div class="c-basket-empty-container">
                                <div class="c-basket-empty-container__title">Twój koszyk jest pusty</div>
                                <div class="c-basket-empty-container__subtext">Zainspiruj się</div>
                                <div class="c-basket-empty-container__button"><a href="index.php"><button class="c-basket-empty-container__button-element">Przejdź do strony głównej </button></a></div>
                            </div>
    
                        </div>');
                        } else {
                            $query = $conn->query("SELECT sum(ilosc) as i FROM koszyk WHERE konto = (SELECT id_konta FROM dane_konta WHERE mail = '" . $_SESSION['user'] . "')");
                            $result = $query->fetch(PDO::FETCH_ASSOC);
                            get_element("elements/element-basket-title-button.php", array(
                                'quantity' => $result['i']
                                // tam tez jest ten przycisk do usuwania wszystkego
                            ));

                            print('<span class="o-separator"></span>
                            <div class="c-basket-products-list__container col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7">');
                            $query = $conn->query("SELECT * FROM produkt WHERE id_produkt IN (SELECT produkt FROM koszyk WHERE konto = (SELECT id_konta FROM dane_konta WHERE mail = '" . $_SESSION['user'] . "'))");
                            $result = $query->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($result as $row) {
                                get_element("elements/element-basket-product-list.php", array(
                                    'name' => $row['nazwa'],
                                    'thumbnail' => 'images/produkty/' . $row['miniaturka'],
                                    'price' => $row['cena']
                                ));
                            }
                            $query = $conn->query("SELECT sum(koszyk.ilosc*produkt.cena) as c FROM produkt INNER JOIN koszyk ON produkt.id_produkt = koszyk.produkt WHERE id_produkt IN (SELECT produkt FROM koszyk WHERE konto = (SELECT id_konta FROM dane_konta WHERE mail = '" . $_SESSION['user'] . "'))");
                            $result = $query->fetch(PDO::FETCH_ASSOC);
                            print('</div><div class="c-basket-products-payment__container col-xs-12 col-sm-12 col-xl-5 col-lg-5 col-md-5">');
                            get_element("elements/element-basket-payment.php", array(
                                'price' => $result['c'],
                            ));
                            print('</div>');
                        }
                    } else {
                        if (isset($_COOKIE['koszyk'])) {
                        } else {
                            print('<div class="c-basket-empty">
                            <div class="c-basket-empty-container">
                                <div class="c-basket-empty-container__title">Twój koszyk jest pusty</div>
                                <div class="c-basket-empty-container__subtext">Zainspiruj się</div>
                                <div class="c-basket-empty-container__button"><a href="index.php"><button class="c-basket-empty-container__button-element">Przejdź do strony głównej </button></a></div>
                            </div>
    
                        </div>');
                        }
                    }
                    ?>

                    <?php get_element("elements/element-basket-productList-delete.php", array(
                        'name' => 'XD'
                    )); ?>
                    

                    

                </div>

            </div>

        </div>
    </div>



</div>

<?php include_once "footer.php"; ?>