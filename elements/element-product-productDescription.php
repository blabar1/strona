<!-- product description-->
<div class="col-xs-12 col-sm-6 col-xl-8 col-lg-7 col-md-7">
    <div class="c-productPage-container-description-block">
        <div class="o-wrapper">
            <div class="c-productPage-container-description__block">
                <div class="c-productPage-container-name">
                    <h1 class="c-productPage-container-name__title"><?php echo $name; ?></h1>
                </div>
                <div class="row">
                    <div class="c-productPage-container-content">
                        <div class="col-xs-12 col-sm-12 col-xl-7 col-lg-7 col-md-7">
                            <div class="c-productPage-container-description">
                                <ul>
                                <?php
                        $ilosc = sizeof($description);
                        if ($ilosc)
                            for ($i = 0; $i < $ilosc; $i++) {
                                print('<li class="c-categoryProducts-tile__description-element">' . $description[$i] . ' </li>');
                            }
                        ?>

                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-xl-5 col-lg-5 col-md-5">
                            <div class="c-productPage-container-payment">
                                <div class="c-productPage-container-payment__price">
                                    <?php echo ($price . " zł"); ?>
                                </div>
                                <div class="c-productPage-container-payment__button-container">
                                    <div class="c-productPage-container-payment__select-container">
                                        <select class="c-productPage-container-payment__select">
                                            <option>1</option>
                                            <option>1</option>
                                            <option>100</option>
                                        </select>
                                    </div>
                                    <div class="c-productPage-container-payment__button">
                                        <button value="<?php echo $id; ?> " data-toggle="modal" class="c-productPage-container-payment__button-element" data-target="#modal-basket-pageProduct">
                                            <div class="c-productPage-container-payment__button-text">
                                                <span class="c-productPage-container-payment__button-span">
                                                    <svg class="c-productPage-container-payment__button-svg">
                                                        <path d="M11 7h1a.5.5 0 1 1 0 1h-1v1a.5.5 0 1 1-1 0V8H9a.5.5 0 0 1 0-1h1V6a.5.5 0 1 1 1 0v1zM5.323 4H8a.5.5 0 0 1 0 1H5.532l1.25 6h7.314l1.286-6H13a.5.5 0 1 1 0-1h3a.5.5 0 0 1 .489.605l-1.5 7A.5.5 0 0 1 14.5 12H6.99l.417 2H14a2 2 0 1 1-1.733 1H8.733a2 2 0 1 1-2.329-.91L4.094 3H2.5a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .49.398L5.322 4zM8 16a1 1 0 1 0-1.999-.001A1 1 0 0 0 8 16zm7 0a1 1 0 1 0-1.999-.001A1 1 0 0 0 15 16z"></path>
                                                    </svg>
                                                </span>
                                                Dodaj do koszyka
                                            </div>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-productPage-container-description__button-specification">
                    <svg xmlns="http://www.w3.org/2000/svg" class="scrollSpecifications" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                    </svg></button>
                    <div class="c-productPage-container-description__button-specification-text">Do specyfikacji</div>
                </div>
            </div>
        </div>
    </div>
</div>