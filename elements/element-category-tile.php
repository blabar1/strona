<div class="c-category-tile col-xs-6 col-sm-4 col-xl-4 col-lg-4 col-md-4">
    <div class="c-category-tile__past-hover">
        <div class="c-category-tile__past-list-container">
            <div class="c-category-tile__past-list">
                <ul>
                    <?php
                    include "database.php";
                    $query = $conn->query("SELECT nazwa FROM kategoria WHERE nadkategoria = '".$id_category."'");
                    $results = $query->fetchAll(PDO::FETCH_ASSOC);
                    foreach($results as $row){
                    print("<li>
                        <a href='#0'>
                            <div class='c-category-tile__past-hover-list-element'>".$row['nazwa']."</div>
                        </a>
                    </li>");
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="c-category-tile__content">
    <a href='#0'>
        <div class="c-category-tile__name"><?php echo $category; ?></div>
        <div class="c-category-tile__thumbnail" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
    </a>
    </div>
</div>