<?php
session_start();
include 'database.php';
$conn->query("DELETE FROM koszyk WHERE konto = (SELECT id_konta FROM dane_konta WHERE mail = '".$_SESSION['user']."') AND produkt = '".$_POST['produkt']."'");
?>