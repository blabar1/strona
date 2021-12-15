<?php
if (!isset($_SESSION)) {
    session_start();
} ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="../css/arkusz.css" />
    <link rel="stylesheet" href="css/component.orderedItem-list.css" />
    <title>Panel admina</title>
</head> <!-- top navigation bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="index.php">Panel sterowania</a>
        <h5 style="color:red; width:auto;">
            <marquee>Admin panel - wszystko działa dobrze :)</marquee>
        </h5>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button type="button" class="btn c-modal-button" style="background-color:var(--orange); color:white;"><a class="o-href" href="../index.php">Powrót do strony sklepu</a></button>
    </div>
</nav>
<?php include("functions.php"); ?>
<!-- top navigation bar -->