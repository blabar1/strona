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

include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>

<div class="o-wrapper">
    <div class="row">
        <div class="c-template">

            <div class="c-template-container col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="o-wrapper">
                    <div id="1-t">
                        <div class="o-title">Tutaj dajemy tytuł 1</div>

                        <div class="c-template-container-text">
                            a tutaj tekst jest ogółem backend person


                        </div>
                        <div class="c-template-container-image">
                            <img class="c-template-container-image-element" src="images/komputerek.jpg">


                        </div>
                    </div>
                    <div id="2-t">
                        <div class="o-title">Tutaj dajemy tytuł 2</div>
                        <div class="c-template-container-text">
                            a tutaj tekst jest ogółem backend person
                            a tutaj tekst jest ogółem backend person a tutaj tekst jest ogółem backend person a tutaj tekst jest ogółem backend person a tutaj tekst jest ogółem backend person a tutaj tekst jest ogółem backend person a tutaj tekst jest ogółem backend person a tutaj tekst jest ogółem backend person Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum modi eveniet iure cupiditate aperiam doloremque harum eum perferendis, tempore tempora quidem officia debitis optio assumenda, velit non ut. Recusandae, blanditiis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, eveniet tempora consequuntur quo fugit adipisci rerum labore quibusdam nobis neque temporibus facere quam optio aspernatur quis quos ad rem animi.
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et neque inventore voluptatibus soluta temporibus fuga quia sapiente officiis autem, sint iure est ex vitae distinctio aut libero adipisci tempora dicta?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit ad voluptates earum excepturi similique aliquid. Aliquam in nesciunt inventore doloribus sequi hic nulla odit eos eaque ipsam. Aspernatur, amet obcaecati.

                        </div>
                    </div>

                </div>
            </div>
            <div class="c-template-container-nav col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="o-wrapper">
                    <div class="c-template-container-nav-title o-title">Spis treści</div>
                    <div class="c-template-container-nav-list">
                        <ol style="list-style:decimal;">
                            <!-- Maciek tutaj petla na ilosc tytulow  -->
                            <li class="c-template-container-nav-list__element" id="1-s">tytul</li>
                            <li class="c-template-container-nav-list__element" id="2-s">tytul</li>
                        </ol>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>
<script>
    // Maciek tutaj trzeba petelke zrobic ale nie na szyje tylko zeby sie skrolowalo ladnie jak nacisnie
    $(document).ready(function() {
        $("#1-s").click(function() {
            $('html, body').animate({
                scrollTop: $("#1-t").offset().top - 140
            }, 1000);
        });
        $("#2-s").click(function() {
            $('html, body').animate({
                scrollTop: $("#2-t").offset().top - 140
            }, 1000);
        });
    });
</script>
<?php get_element("templates/footer.php"); ?>
<?php include_once "footer.php"; ?>