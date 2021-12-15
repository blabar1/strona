<?php

use function PHPSTORM_META\map;

include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>
<div class="o-wrapper">
    <div class="c-subPage-title">
        <div class="o-title">Podstrony</div>
        <span class="o-separator"></span>
    </div>
    <?php
    $query = $conn->query("SELECT * FROM podstrona");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="">
        <div class="row">
            <div class="c-subPage-container">
                <?php 
                foreach($result as $row){
                    get_element("elements/element-subpage-tile.php", array(
                        'thumbnail' => './images/podstrony/'.$row['zdjecie'],
                        'title' => $row['tytul'],
                        'description' => $row['tresc'],
                        'id' => $row['id_podstrona']
                    ));
                }
                 ?>
            </div>
        </div>
    </div>
</div>


<?php get_element("templates/footer.php"); ?>
<?php include_once "footer.php"; ?>