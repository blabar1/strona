<?php
    session_start();
    include 'database.php';
    $i = $_POST['value'];
    if(isset($_SESSION['user'])){
        $query = $conn->query("SELECT id_konta FROM dane_konta WHERE mail = '".$_SESSION['user']."'");
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $query2 = $conn->query("SELECT * FROM koszyk WHERE konto = '" . $result['id_konta'] . "' AND produkt = '" . $_POST['produkt'] . "'");
        $result2 = $query2->fetch(PDO::FETCH_ASSOC);
        if (empty($result2)){
            $conn->query("INSERT INTO koszyk(konto, produkt, ilosc) VALUES ('" . $result['id_konta'] . "', '" . $_POST['produkt'] . "', '" . $i . "')");
        }else{
            $i = $i + $result2['ilosc'];
            $conn->query("UPDATE `koszyk` SET `ilosc`=$i WHERE konto = '".$result['id_konta']."' AND produkt = '".$_POST['produkt']."' ");
        } 
    }else{
        if(array_key_exists($_POST['produkt'],$_SESSION['koszyk'])){
            $_SESSION['koszyk'][$_POST['produkt']]=$i+$_SESSION['koszyk'][$_POST['produkt']];
        }else{
        $_SESSION['koszyk'] += array($_POST['produkt']=>$i);
        }
    }
?>