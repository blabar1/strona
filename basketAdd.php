<?php
session_start();
include 'database.php';
if (isset($_SESSION['user'])) {
    $query = $conn->query("SELECT id_konta FROM dane_konta WHERE mail = '" . $_SESSION['user'] . "'");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $query2 = $conn->query("SELECT * FROM koszyk WHERE konto = '" . $result['id_konta'] . "' AND produkt = '" . $_POST['produkt'] . "'");
    $result2 = $query2->fetch(PDO::FETCH_ASSOC);
    if (empty($result2))
        $conn->query("INSERT INTO koszyk(konto, produkt, ilosc) VALUES ('" . $result['id_konta'] . "', '" . $_POST['produkt'] . "', '" . $_POST['ilosc'] . "')");
    else {
        $i = $_POST['ilosc'] + $result2['ilosc'];
        $conn->query("UPDATE `koszyk` SET `ilosc`=$i WHERE konto = '" . $result['id_konta'] . "' AND produkt = '" . $_POST['produkt'] . "' ");
    }
} else {
    if(array_key_exists($_POST['produkt'],$_SESSION['koszyk'])){
        $_SESSION['koszyk'][$_POST['produkt']]=$_POST['ilosc']+$_SESSION['koszyk'][$_POST['produkt']];
    }else{
    $_SESSION['koszyk'] += array($_POST['produkt']=>$_POST['ilosc']);
    }
}
