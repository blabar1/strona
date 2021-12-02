<?php include_once "header.php";

include_once "templates/menu.php"; ?>
<div class="o-wrapper">
    <div class="c-ordersPage-wrapper">
        <div class="c-ordersPage-container">
            <div class="c-ordersPage-title">
                <div class="c-ordersPage-title o-title">Twoje zamówienia</div>
                <span class="o-separator"></span>
            </div>
            <div class="c-ordersPage-body">
                <div class="c-ordersPage-notFound-text">
                    <div class=" o-title">Nie masz zamówień <span><img class="o-notFound-image" src="images/imageNotFound.svg"></span></div>
                    <h6 class="c-ordersPage-notFound-sub-text"> Wygląda na to że nic jeszcze nie zamawiałeś :(</h6>

                </div>


            </div>
        </div>
    </div>
</div>








<?php get_element("templates/footer.php");
include_once "footer.php"; ?>