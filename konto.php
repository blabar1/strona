<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>
<?php if(!isset($_SESSION['user'])) print("<script>open('login.php','_self');</script>");?>

<?php get_element("templates/footer.php"); ?>

<?php include_once "footer.php"; ?>