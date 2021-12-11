<?php
    session_start();
    include 'database.php';
    $i = $_POST['value'];
    $query = $conn->query("SELECT id_konta FROM dane_konta WHERE mail = '".$_SESSION['user']."'");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $conn->query("UPDATE `koszyk` SET `ilosc`=$i WHERE konto = '".$result['id_konta']."' AND produkt = '".$_POST['produkt']."' ");
?>