<div class="o-wrapper">
    <?php include "database.php"; ?>
    <div class="c-breadcrumbs-container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item c-breadcrum-element"><a class="c-breadcrum-element-prev" href="index.php">PlaceHolder.pl</a></li>
                <li class="breadcrumb-item c-breadcrum-element"><a class="c-breadcrum-element-prev" href="category.php?category=1">Kategorie</a></li>
                <?php
                $list = "";
                $name = "";
                for (;;) {
                    $query = $conn->query("SELECT nadkategoria, nazwa FROM kategoria WHERE id_kategoria = '" . $page . "'  LIMIT 1");
                    $result = $query->fetch(PDO::FETCH_ASSOC);
                    if ($result['nadkategoria'] != null) {
                        $name = $result['nazwa'];
                        $list = '<li class="breadcrumb-item c-breadcrum-element"><a class="c-breadcrum-element-new" href="categoryProducts.php?category=' . $page . '&page=1">' . $name . '</a></li>' . $list;
                        $page = $result['nadkategoria'];
                    } else {
                        $query = $conn->query("SELECT nazwa FROM kategoria WHERE id_kategoria = '" . $page . "'  LIMIT 1");
                        $result = $query->fetch(PDO::FETCH_ASSOC);
                        $name = $result['nazwa'];
                        $list = '<li class="breadcrumb-item c-breadcrum-element"><a class="c-breadcrum-element-prev" href="category.php?category=' . $page . '">' . $name . '</a></li>' . $list;
                        print($list);
                        break;
                    }
                }
                ?>
            </ol>
        </nav>
    </div>
</div>