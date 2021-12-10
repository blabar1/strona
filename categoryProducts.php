<?php
include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>
<?php get_element("elements/element-banner-slider.php", array(
    'images' => ['images/slider-item-4.jpg', 'images/slider-item-3.jpg']
)); ?>
<!--category body-->
<?php get_element("elements/element-breadcrumbs.php", array(
    'page' => $_SESSION['category']
)); ?>
<div class="o-wrapper">

    <?php
    if (isset($_GET['category'])) {
        if ($_GET['category'] != 0) {
            $query = $conn->query("SELECT nazwa FROM kategoria WHERE id_kategoria = '" . $_GET['category'] . "' LIMIT 1");
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if (isset($_GET['search']) && $_GET['search'] != "%")
                print('<div class="o-title">' . $result['nazwa'] . ' - szukana fraza: "' . $_GET['search'] . '" </div>');
            else
                print('<div class="o-title">' . $result['nazwa'] . '</div>');
        } else
            if (isset($_GET['search']) && $_GET['search'] != "%")
            print('<div class="o-title">Wszystkie produkty - szukana fraza: "' . $_GET['search'] . '"</div>');
        else
            print('<div class="o-title">Wszystkie produkty</div>');
    } else
        print('<div class="o-title">Nie znaleziono kategorii</div>');
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
                    <?php
                    print("<div id='filtry'><input type='hidden' id='kat' value='" . $_SESSION['category'] . "'>");
                    print("<input type='hidden' id='ord' value='" . $_SESSION['order'] . "'><input type='hidden' id='srch' value='" . $_SESSION['search'] . "'></div>");
                    ?>
                    <div class="c-categoryProduct-filter-elements-container">
                        <?php
                        if ($_SESSION['category'] != 0) {
                            $query = $conn->query("SELECT DISTINCT id_wlasciwosc, nazwa FROM wlasciwosc WHERE id_wlasciwosc IN (SELECT nazwa_wlasciwosc from produkt_wlasciwosc WHERE produkt IN (SELECT id_produkt FROM produkt WHERE (kategoria IN (SELECT id_kategoria FROM kategoria WHERE nadkategoria = '" . $_SESSION['category'] . "') OR kategoria = '" . $_SESSION['category'] . "')))");
                        } else {
                            $query = $conn->query("SELECT DISTINCT id_wlasciwosc, nazwa FROM wlasciwosc WHERE id_wlasciwosc IN (SELECT nazwa_wlasciwosc from produkt_wlasciwosc)");
                        }
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($result as $row) {
                            get_element("elements/element-categoryProduct-filters.php", array(
                                'title' => $row['nazwa'],
                                'id_title' => $row['id_wlasciwosc']
                            ));
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="c-categoryProducts-container">
                <!--changer-bar-->
                <div class="o-wrapper">
                    <div class="c-categoryProducts-changer-container">
                        <div class="c-categoryProducts-changer">
                            <div class="c-categoryProducts-changer-per-page">
                                <form name="jd">
                                    <select autocomplete="off" id='order' name="order" onchange="select_event()" href=<?php print("'/strona/categoryProducts.php?category=" . $_SESSION['category'] . "&page=1&order='"); ?> class="c-categoryProducts-changer-per-page__select">
                                        <option value="d">Domyślne</option>
                                        <option value="cr" <?php if (isset($_GET['order']) && $_GET['order'] == "cr") echo 'selected' ?>>Cena - od najniższej </option>
                                        <option value="cm" <?php if (isset($_GET['order']) && $_GET['order'] == "cm") echo 'selected' ?>>Cena - od najwyższej</option>
                                        <option value="nr" <?php if (isset($_GET['order']) && $_GET['order'] == "nr") echo 'selected' ?>>Nazwa - od A do Z</option>
                                        <option value="nm" <?php if (isset($_GET['order']) && $_GET['order'] == "nm") echo 'selected' ?>>Nazwa - od Z do A</option>
                                    </select>
                                    <label class="c-categoryProducts-changer-per-page__select-label">Sortowanie</label>
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
                        include_once "elements/element-categoryProduct.-tiles.php";
                    ?>
                </div>
            </div>



            <div class=" col-xs-12 col-sm-12 col-xl-9 col-lg-9 col-md-9">
                <div class="c-category-pagination-container">
                    <nav aria-label="...">
                        <ul id="page-chooser" class="pagination pagination-sm">
                            <?php
                            if (isset($_SESSION['filters']) && !empty($_SESSION['filters'])) {
                                $p = explode(";", $_SESSION['filters'][0]);
                                $filter = "AND id_produkt IN (SELECT produkt FROM produkt_wlasciwosc WHERE (nazwa_wlasciwosc = " . $p[0] . " AND wartosc = '" . $p[1] . "')";
                                for ($i = 1; $i < sizeof($_SESSION['filters']); $i++) {
                                    $f = $_SESSION['filters'];
                                    $e = explode(";", $f[$i]);
                                    $filter .= ' OR (nazwa_wlasciwosc = ' . $e[0] . ' AND wartosc = "' . $e[1] . '") ';
                                }
                                $filter .= ")";
                            } else
                                $filter = "";
                            if (isset($_SESSION['search'])) {
                                $szukana = $_SESSION['search'];
                            }
                            if ($_SESSION['category'] != 0)
                                $query = $conn->query("SELECT count(id_produkt) AS jd FROM produkt WHERE nazwa LIKE '%" . trim($szukana) . "%' $filter AND (kategoria IN (SELECT id_kategoria FROM kategoria WHERE nadkategoria = '" . $_SESSION['category'] . "') OR kategoria = '" . $_SESSION['category'] . "') LIMIT 1 ");
                            else
                                $query = $conn->query("SELECT count(id_produkt) AS jd FROM produkt WHERE nazwa LIKE '%" . trim($szukana) . "%' $filter LIMIT 1");
                            $ilosc_produktow = $query->fetch(PDO::FETCH_ASSOC);
                            $i = $ilosc_produktow['jd'];
                            $i /= 15;
                            $i = ceil($i);
                            $filtry = "";
                            if (!empty($_SESSION['filters'])) {
                                $d = sizeof($_SESSION['filters']);
                                for ($k = 0; $k < $d; $k++)
                                    $filtry = "&filters[]=" . $_SESSION['filters'][$k] . $filtry;
                            }
                            if (isset($_GET['order']))
                                $o = $_GET['order'];
                            else
                                $o = " ";
                            for ($j = 1; $j <= $i; $j++) {
                                if ($j == $_SESSION['page'])
                                    print('<li class="page-item active" aria-current="page"><span class="page-link">' . $j . '</span></li>');
                                else {
                                    $id = "b" . $j;
                                    print('<li class="page-item"><a id="' . $id . '"  class="page-link page-number" onclick="event.preventDefault(); button_event(\'' . $id . '\')" href="/strona/categoryProducts.php?search=' . $_SESSION['search'] . '&category=' . $_SESSION['category'] . '&page=' . $j . '&order=' . $o . $filtry . '">' . $j . '</a></li>');
                                }
                            }
                            ?>
                            <script src="scripts/categoryPage.js"></script>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
<?php get_element("templates/footer.php"); ?>

<?php include_once "footer.php"; ?>