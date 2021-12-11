<?php
    session_start();
    include 'database.php';
    $query = $conn->query("SELECT id_konta FROM dane_konta WHERE mail = '".$_SESSION['user']."'");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $query = $conn->query("INSERT INTO koszyk(konto, produkt, ilosc) VALUES ('".$result['id_konta']."', '".$_POST['produkt']."', '".$_POST['ilosc']."')");
?>