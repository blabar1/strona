<div class="c-basket-list-wrapper">
    <div>
        <?php include "database.php" ?>
        <div class="c-basket-list ">
            <div class="c-basket-list__thumbnail" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
            <div class="c-basket-list__inside">

                <div class="c-basket-list__content">
                    <div class="c-basket-list__name-container">
                        <?php
                        $named = str_replace(' ', '-', $name);
                        ?> <a href="productPage.php?name=<?php echo $named; ?>&id=<?php echo $id; ?>">
                            <div class="c-basket-list__name">
                                <h3 title="<?php echo $name; ?>"><span class="c-basket-list__name-span">
                                        <?php echo $name; ?>
                                    </span></h3>
                            </div>
                        </a>
                    </div>
                    <div class="c-basket-list__price-container">
                        <div class="c-basket-list__price"><?php echo ($price . " zł"); ?></div>
                        <div class="c-basket-list__select-container">
                            <?php
                            if(isset($_SESSION['user'])){
                                $query = $conn->query("SELECT ilosc FROM koszyk WHERE konto = (SELECT id_konta FROM dane_konta WHERE mail = '" . $_SESSION['user'] . "') AND produkt = $id LIMIT 1");
                                $result = $query->fetch(PDO::FETCH_ASSOC);
                                $ki =  $result['ilosc'];
                            }else{
                                $ki = $_SESSION['koszyk'][$id];
                            }
                            $query = $conn->query("SELECT ilosc FROM produkt WHERE id_produkt = $id LIMIT 1");
                            $result = $query->fetch(PDO::FETCH_ASSOC);
                            print('<select id="s'.$id.'" onchange=" basketChange('.$id.')" class="c-basket-list__select"');
                            for ($i = 0; $i <= $result['ilosc']; $i++)
                                if ($i == $ki)
                                    print('<option selected>' . $i . '</option>');
                                else
                                    print('<option>' . $i . '</option>');
                            print('</select>');
                            ?>
                        </div>
                        <div class="c-basket-list__button-container">
                            <?php get_element("elements/element-basket-delete-button.php", array(
                                'id' => $id
                            )); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>