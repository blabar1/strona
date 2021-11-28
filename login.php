<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <title>Towar z drugiej ręki</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/arkusz_mal.css">
    <?php include "database.php"; ?>
</head>

<body>
    <div class="o-wrapper">
        <div class="c-forms-compoments">
            <div class="c-forms">
                <div class="c-buttons">
                <button class="c-button c-button-clicked" id='loging'>Logowanie</button>
                <button class="c-button" id='registerg'>Nowe konto</button>
                </div>
                <!-- login form-->
                <div class="c-form" id='login'>
                    <h1>Logowanie</h1>
                    <form action='login.php' method="POST">
                        <?php
                        if (isset($_SESSION['user']))
                            header("Location:index.php");
                        else if (isset($_POST['login']) && $_POST['login'] != "") {
                            $login = $conn->query("SELECT haslo FROM dane_logowania WHERE mail ='" . $_POST['login'] . "' LIMIT 1");
                            $user = $login->fetch(PDO::FETCH_ASSOC);
                            if ($user) {
                                if (password_verify($_POST['password'], $user['haslo'])) {
                                    $_SESSION['user'] = htmlspecialchars($_POST['login']);
                                    header("Location:index.php");
                                } else {
                                    print("<fieldset class='c-fieldset'>
                            <legend>&nbsp;E-mail&nbsp;</legend>
                            <input class='c-input' type='email' name='login' value='" . $_POST['login'] . "' placeholder='emailik' required>
                            </fieldset>
                            <br>
                            <fieldset class='c-fieldset'>
                            <legend>&nbsp;Hasło&nbsp;</legend>
                            <input class='c-input' type='password' name='password' placeholder='hasełko' required>
                            </fieldset>
                            <h6 style='color: red;'>Zle haselko :(((.</h6> 
                            <br>
                            <input class='c-input-submit' type='submit' value='Zaloguj'>");
                                }
                            } else {
                                print("<fieldset class='c-fieldset'>
                        <legend>&nbsp;E-mail&nbsp;</legend>
                        <input class='c-input' type='email' name='login' value='" . $_POST['login'] . "' placeholder='emailik' required>
                        </fieldset>
                        <h6 style='color: red;'>Dane konto nie istnije.</h6> 
                        <br>
                        <fieldset class='c-fieldset'>
                        <legend>&nbsp;Hasło&nbsp;</legend>
                        <input class='c-input' type='password' name='password' placeholder='hasełko' required>
                        </fieldset>
                        <br>
                        <input class='c-input-submit' type='submit' value='Zaloguj'>");
                            }
                        } else {
                            print("<fieldset class='c-fieldset'>
                    <legend>&nbsp;E-mail&nbsp;</legend>
                    <input class='c-input' type='email' name='login' placeholder='emailik' required>
                    </fieldset>
                    <br>
                    <fieldset class='c-fieldset'>
                    <legend>&nbsp;Hasło&nbsp;</legend>
                    <input class='c-input' type='password' name='password' placeholder='hasełko' required>
                    </fieldset>
                    <br>
                    <input class='c-input-submit' type='submit' value='Zaloguj'>");
                        }
                        ?>
                    </form>
                </div>

                <!-- register form-->
                <div class="c-form" id='register'>
                    <h1>Rejestracja</h1>
                    <form action='login.php' method="POST">
                        <?php
                        if (isset($_SESSION['user']))
                            header("Location:index.php");
                        else if (isset($_POST['register']) && $_POST['register'] != "") {
                            try {
                                $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
                                $mail = $_POST['register'];
                                $register = $conn->query("INSERT INTO dane_logowania (`mail`, `haslo`) VALUES ('" . $mail . "', '" . $hash . "')");
                                $userdate = $conn->query("INSERT INTO dane_konta (`imie`, `nazwisko`, `konto_typ`, `mail`) VALUES ('" . $_POST['fname'] . "', '" . $_POST['lname'] . "', 1 , '". $mail . "')");
                                header("Location:index.php");
                            } catch (PDOException $ex) {
                                if ($ex->errorInfo[1] == 1062) {
                                    print(" <fieldset class='c-fieldset'><legend>&nbsp;Imię&nbsp;</legend>
                                    <input class='c-input' type='text' value='" . $_POST['fname'] . "' name='fname' placeholder='Imię' required>
                                    </fieldset><br>
                                    <fieldset class='c-fieldset'>
                                    <legend>&nbsp;Nazwisko&nbsp;</legend>
                                    <input class='c-input' type='text' value='" . $_POST['lname'] . "' name='lname' placeholder='Nazwisko' required>
                                    </fieldset><br>
                            <fieldset class='c-fieldset'>
                            <legend>&nbsp;E-mail&nbsp;</legend>
                            <input class='c-input' type='email' name='register' value='" . $_POST['register'] . "' placeholder='emailik' required>
                            </fieldset>
                            <h6 style='color: red;'>Ten mail jest już zajęty.</h6> 
                            <fieldset class='c-fieldset'>
                            <legend>&nbsp;Hasło&nbsp;</legend>
                            <input class='c-input' type='password' name='password' placeholder='hasełko' required>
                            </fieldset>
                            <br>
                            <input class='c-input-submit' type='submit' value='Zarejestruj się'>");
                                } else
                                    print("<h6 style='color: red;'>Nieoczekiwany błąd. Spróbuj ponownie.</h6>");
                            }
                        } else {
                            print(" <fieldset class='c-fieldset'><legend>&nbsp;Imię&nbsp;</legend>
                            <input class='c-input' type='text' name='fname' placeholder='Imię' required>
                            </fieldset><br>
                            <fieldset class='c-fieldset'>
                            <legend>&nbsp;Nazwisko&nbsp;</legend>
                            <input class='c-input' type='text' name='lname' placeholder='Nazwisko' required>
                            </fieldset><br>
                        <fieldset class='c-fieldset'>
                        <legend>&nbsp;E-mail&nbsp;</legend>
                        <input class='c-input' type='email' name='register' placeholder='emailik' required>
                        </fieldset>
                        <br>
                        <fieldset class='c-fieldset'>
                        <legend>&nbsp;Hasło&nbsp;</legend>
                        <input class='c-input' type='password' name='password' placeholder='hasełko' required>
                        </fieldset>
                        <br>
                        <input class='c-input-submit' type='submit' value='Zarejestruj się'>");
                        }
                        ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "footer.php"; ?>
