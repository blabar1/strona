<div class="c-productPage-container-specifications-wrapper">
    <div class="c-productPage-container-specifications">
        <div class="o-title">Specyfikacja</div>
        <div class="c-productPage-container-specifications__body row">
            
                <?php
                $ilosc = sizeof($specification);
                if ($ilosc)
                    for ($i = 0; $i < $ilosc; $i++) {
                    $s = explode(';',$specification[$i]);
                    $SpecificationName = $s[0];
                    $SpecificationValue = $s[1];
                    print('<div class="c-productPage-container-specifications__container">
                    <div class="c-productPage-container-specifications__name col-xs-6 col-sm-6 col-xl-6 col-lg-6 col-md-6">'.$SpecificationName.'</div>
                    <div class="c-productPage-container-specifications__value col-xs-6 col-sm-6 col-xl-6 col-lg-6 col-md-6">'.$SpecificationValue.'</div>
                    </div>');
                    } 
                ?>
            </div>
        </div>
    </div>
</div>