<!-- Maciek to jest 1 elelment tak jakbydo krecenia na stronie ten co jest po lewej stronie 

<div id="1-t">
                        <div class="o-title">Tutaj dajemy tytuł 1</div>

                        <div class="c-template-container-text">
                            a tutaj tekst jest ogółem backend person


                        </div>
                        <div class="c-template-container-image">
                            <img class="c-template-container-image-element" src="images/test.jpg">


                        </div>
                    </div>-->


<?php

use function PHPSTORM_META\map;

include_once "header.php"; 

?>
<?php include_once "templates/menu.php"; 
$query = $conn->query("SELECT * FROM podstrona WHERE id_podstrona = '".$_GET['id_podstrona']."'");
$result = $query->fetch(PDO::FETCH_ASSOC);?>

<div class="o-wrapper">
    <div class="row">
        <div class="c-template">

            <div class="c-template-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="o-wrapper">
                    <div id="1-t">
                        <div class="o-title"><?php echo $result['tytul']; ?></div>
                        <div class="c-template-container-image">
                            <img class="c-template-container-image-element" src="images/podstrony/<?php echo $result['zdjecie']; ?>">
                        </div>
                        <div class="c-template-container-text">
                        <?php echo $result['tresc']; ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_element("templates/footer.php"); ?>
<?php include_once "footer.php"; ?>