<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>

<?php get_element("elements/element-banner-slider.php", array(
    'images' => ['images/slider_item_1.jpg', 'images/slider_item_1.jpg', 'images/slider_item_3.jpg']
)); ?>
<!--category body-->
<div class="o-wrapper">
    <div class="o-title">Nazwa kategorii</div>
    <?php include_once "separator.php"; ?>
    <div class="c-categoryProducts">
        <div class="row">
            <!--list-->
            <div class="c-categoryProduct-filters__container col-xl-3 col-lg-3 col-md-3">
                <div class="c-categoryProduct-filters">
                    <div class="o-title">Filtry</div>


                </div>
            </div>
            <div class="c-categoryProducts-container">
                <!--changer-bar-->
                <div class="o-wrapper">
                    <div class="c-categoryProducts-changer-container">
                        <div class="c-categoryProducts-changer">
                            <div class="c-categoryProducts-changer-per-page">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

                                    <select class="c-categoryProducts-changer-per-page__select">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                    </select>
                                    <label class="c-categoryProducts-changer-per-page__select-label">Ilość wyświetlanych produktów</label>
                                </form>
                            </div>
                            <div class="c-categoryProducts-changer-buttons-container">
                                <div class="c-categoryProducts-changer-buttons">
                                    <button title="Widok kafelków" class="button-tiles" id="js-button-tiles" disabled><span class="c-categoryProducts-changer-buttons-tiles"><svg style="width: 100%;height: 100%;" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M5 15h6V7H5zM13 15h6V7h-6zM21 15h6V7h-6zM5 25h6v-8H5zM13 25h6v-8h-6zM21 25h6v-8h-6z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </button>
                                    <button title="Widok listy szczegółowy" id="js-button-list" class="button-list"><span class="c-categoryProducts-changer-buttons-list"><svg style="width: 100%;height: 100%;" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M5 11h5V7H5zM5 18h5v-4H5zM5 25h5v-4H5zM12 11h15V7H12zM12 18h15v-4H12zM12 25h15v-4H12z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Products-->
                <?php get_element("elements/element-product-list__description.php", array(
                    'thumbnail' => "images/myszka2.jpg",
                    'name' => "myszka",
                    'price' => "999999",
                    'description1' => "opis1",
                    'description2' => "opis2",
                    'description3' => "opis3",
                    'description4' => "opis4",
                )); ?>
                <?php get_element("elements/element-product-list__description.php", array(
                    'thumbnail' => "images/myszka2.jpg",
                    'name' => "myszka",
                    'price' => "999999",
                    'description1' => "opis1",
                    'description2' => "opis2",
                    'description3' => "opis3",
                    'description4' => "opis4",
                )); ?>
                <?php get_element("elements/element-product-list__description.php", array(
                    'thumbnail' => "images/komputerek.jpg",
                    'name' => "myszka",
                    'price' => "999999",
                    'description1' => "opis1",
                    'description2' => "opis2",
                    'description3' => "opis3",
                    'description4' => "opis4",
                )); ?>


            </div>
        </div>
    </div>
</div>
</div>
<?php get_element("templates/footer.php"); ?>
<!-- 

<?php include_once "footer.php"; ?>