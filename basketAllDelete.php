<?php
session_start();
include 'database.php';
if(isset($_SESSION['user']))
$conn->query("DELETE FROM koszyk WHERE konto = (SELECT id_konta FROM dane_konta WHERE mail = '".$_SESSION['user']."')");
else{
    unset($_SESSION['koszyk']);
    $_SESSION['koszyk'] = array();
}
?>