<?php
include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>

<?php get_element("elements/element-banner-slider.php", array(
    'images' => ['images/slider_item_1.jpg', 'images/slider_item_1.jpg', 'images/slider_item_3.jpg']
)); ?>
<!--category body-->
<div class="o-wrapper">

    <?php
    if (isset($_GET['category'])) {
        if ($_GET['category'] != 0) {
            $query = $conn->query("SELECT nazwa FROM kategoria WHERE id_kategoria = '" . $_GET['category'] . "' LIMIT 1");
            $result = $query->fetch(PDO::FETCH_ASSOC);
            print('<div class="o-title">' . $result['nazwa'] . '</div>');
        } else
            print('<div class="o-title">Wszystkie produkty</div>');
    } else
        print('<div class="o-title">Something wrong, I can feel it.</div>');
    ?>

    <?php include_once "separator.php"; ?>
    <div class="c-categoryProducts">
        <div class="row">
            <!--list-->
            <div class="c-categoryProduct-filters__container col-xl-3 col-lg-3 col-md-3">
                <div class="c-categoryProduct-filters ">
                    <div class="c-categoryProduct-filters__header">
                        <div class="o-title">Filtry<div class="c-categoryProduct-filters__header-exit">&times;</div>



                        </div>
                    </div>
                    <div class="c-categoryProduct-filter-elements-container">
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>


                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>


                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                        </form>
                        <div class="c-categoryProduct-filter__title">przyklad</div>
                        <form>
                            <div class="c-categoryProduct-filter__body">
                                <input class="c-categoryProduct-filter__checkbox" type="checkbox" id="tutaj to samo co w for" name="" value="">
                                <label class="c-categoryProduct-filter__checkbox-label" for="tutaj to samo co w id">opis</label>
                            </div>
                            <div class="o-title">Koniec</div>
                        </form>

                    </div>
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
                                    <div class="c-categoryProducts-changer-per-page__select-filters"><button id="js-filters-button" class="c-categoryProducts-changer-per-page__select-filters__button">Filtry</button></div>
                                    <button title="Widok kafelków" class="button-tiles" id="js-button-tiles" <?php if (isset($_COOKIE['widok'])) {
                                                                                                                    if ($_COOKIE['widok'] == "tiles") print('disabled');
                                                                                                                } else print('disabled'); ?>><span class="c-categoryProducts-changer-buttons-tiles"><svg style="width: 100%;height: 100%;" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M5 15h6V7H5zM13 15h6V7h-6zM21 15h6V7h-6zM5 25h6v-8H5zM13 25h6v-8h-6zM21 25h6v-8h-6z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </button>
                                    <button title="Widok listy szczegółowy" id="js-button-list" class="button-list" <?php if (isset($_COOKIE['widok']) && $_COOKIE['widok'] == "list") print('disabled'); ?>><span class="c-categoryProducts-changer-buttons-list"><svg style="width: 100%;height: 100%;" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
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
                <div id="category-products">
                    <?php
                    error_reporting(E_ALL ^ E_WARNING);
                    if (isset($_COOKIE['widok'])) {
                        if ($_COOKIE['widok'] == 'tiles')
                            include_once "elements/element-categoryProduct.-tiles.php";
                        else
                            include_once "elements/element-categoryProduct.-list.php";
                    } else
                        include_once "elements/element-categoryProduct.-tiles.php"  ?>
                    <div>

                    </div>
                </div>
            </div>



            <div class=" col-xs-12 col-sm-12 col-xl-9 col-lg-9 col-md-9">
                <div class="c-category-pagination-container">
                    <nav aria-label="...">
                        <ul class="pagination pagination-sm">
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
<?php get_element("templates/footer.php"); ?>

<?php include_once "footer.php"; ?>