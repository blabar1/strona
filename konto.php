<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>
<?php if (!isset($_SESSION['user'])) print("<script>open('login.php','_self');</script>"); ?>

<div class="o-wrapper">
    <div class="row">
        <div class="c-account-container">
            <div class="c-account-banner col-xs-12 col-sm-12 col-xl-12 col-lg-12  col-md-12">
                <div class="o-title">User name</div>
            </div>
            <div class="c-account-body">
                <div class="c-account-list">

                </div>
                <div class="c-account-forms">

                </div>



            </div>
        </div>
    </div>
</div>






<?php get_element("templates/footer.php"); ?>

<?php include_once "footer.php"; ?>