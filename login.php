<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <title>Towar z drugiej ręki</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="css/arkusz_mal.css">
    <link rel="stylesheet" href="css/components/components.strength-meter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <!-- <?php include "header.php"; ?> -->
    <?php include "database.php"; ?>
</head>


<body class="animation-gradient">
    <div class="o-wrapper">
        <div class="row">
            <div class="c-forms-container">
                <div class="c-forms-compoments col-xs-6 col-sm-6 col-xl-8 col-lg-8 col-md-8">
                    <div class="c-forms">
                        <div class="c-buttons">
                            <button class="c-button c-button-clicked fromRight" id='loging'>Logowanie</button>
                            <button class="c-button fromLeft" id='registerg'>Nowe konto</button>
                        </div>
                        <!-- login form-->
                        <div class="c-form" id='login'>
                            <h1 class="o-title">Logowanie</h1>
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
                           
                            <fieldset class='c-fieldset'>
                            <legend>&nbsp;Hasło&nbsp;</legend>
                            <input class='c-input' type='password' name='password' placeholder='hasełko' required>
                            </fieldset>
                            <h6 style='color: red;'>Zle haselko :(((.</h6> 
                            
                            <input class='c-input-submit' type='submit' value='Zaloguj'>");
                                        }
                                    } else {
                                        print("<fieldset class='c-fieldset'>
                        <legend>&nbsp;E-mail&nbsp;</legend>
                        <input class='c-input' type='email' name='login' value='" . $_POST['login'] . "' placeholder='emailik' required>
                        </fieldset>
                        <h6 style='color: red;'>Dane konto nie istnije.</h6> 
                    
                        <fieldset class='c-fieldset'>
                        <legend>&nbsp;Hasło&nbsp;</legend>
                        <input class='c-input' type='password' name='password' placeholder='hasełko' required>
                        </fieldset>
                  
                        <input class='c-input-submit' type='submit' value='Zaloguj'>");
                                    }
                                } else {
                                    print("<fieldset class='c-fieldset'>
                    <legend>&nbsp;E-mail&nbsp;</legend>
                    <input class='c-input' type='email' name='login' placeholder='emailik' required>
                    </fieldset>
         
                    <fieldset class='c-fieldset'>
                    <legend>&nbsp;Hasło&nbsp;</legend>
                    <input class='c-input' id='password_new3'  type='password' name='password' placeholder='hasełko' required/><i class='bi bi-eye-slash' id='togglePassword_new3'></i>
                    </fieldset>
      <div class='c-input-button'>
                    <input class='c-input-submit' type='submit' value='Zaloguj'></div>");
                                }
                                ?>
                            </form>
                        </div>

                        <!-- register form-->
                        <div class="c-form" id='register'>
                            <h1 class="o-title">Rejestracja</h1>
                            <form action='login.php' method="POST">
                                <?php
                                if (isset($_SESSION['user']))
                                    header("Location:index.php");
                                else if (isset($_POST['register']) && $_POST['register'] != "") {
                                    try {
                                        $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
                                        $mail = $_POST['register'];
                                        $register = $conn->query("INSERT INTO dane_logowania (`mail`, `haslo`) VALUES ('" . $mail . "', '" . $hash . "')");
                                        $userdate = $conn->query("INSERT INTO dane_konta (`imie`, `nazwisko`, `konto_typ`, `mail`) VALUES ('" . $_POST['fname'] . "', '" . $_POST['lname'] . "', 1 , '" . $mail . "')");
                                        $_SESSION['user'] = $mail;
                                        header("Location:index.php");
                                    } catch (PDOException $ex) {
                                        if ($ex->errorInfo[1] == 1062) {
                                            print(" <fieldset class='c-fieldset'><legend>&nbsp;Imię&nbsp;</legend>
                                    <input class='c-input' type='text' value='" . $_POST['fname'] . "' name='fname' placeholder='Imię' required>
                                    </fieldset>
                                    <fieldset class='c-fieldset'>
                                    <legend>&nbsp;Nazwisko&nbsp;</legend>
                                    <input class='c-input' type='text' value='" . $_POST['lname'] . "' name='lname' placeholder='Nazwisko' required>
                                    </fieldset>
                            <fieldset class='c-fieldset'>
                            <legend>&nbsp;E-mail&nbsp;</legend>
                            <input class='c-input' type='email' name='register' value='" . $_POST['register'] . "' placeholder='emailik' required>
                            </fieldset>
                            <h6 style='color: red;'>Ten mail jest już zajęty.</h6> 
                            <fieldset class='c-fieldset'>
                            <legend>&nbsp;Hasło&nbsp;</legend>
                            <input class='c-input' type='password' name='password' placeholder='hasełko' required>
                            </fieldset>
                            
                            <input class='c-input-submit' type='submit' value='Zarejestruj się'>");
                                        } else
                                            print("<h6 style='color: red;'>Nieoczekiwany błąd. Spróbuj ponownie.</h6>");
                                    }
                                } else {
                                    print(" <fieldset class='c-fieldset'><legend>&nbsp;Imię&nbsp;</legend>
                            <input class='c-input' type='text' name='fname' placeholder='Imię' required>
                            </fieldset>
                            <fieldset class='c-fieldset'>
                            <legend>&nbsp;Nazwisko&nbsp;</legend>
                            <input class='c-input' type='text' name='lname' placeholder='Nazwisko' required>
                            </fieldset>
                        <fieldset class='c-fieldset'>
                        <legend>&nbsp;E-mail&nbsp;</legend>
                        <input class='c-input' type='email' name='register' placeholder='emailik' required>
                        </fieldset>
                        
                        <fieldset class='c-fieldset'>
                        <legend>&nbsp;Hasło&nbsp;</legend>
                        <input class='c-input'  id='password_new2' type='password' name='password' placeholder='hasełko' required/><i class='bi bi-eye-slash' id='togglePassword_new2'></i>
                        </fieldset>
                        <div class='c-account-passMeter-container'>
                        <div class='c-account-passMeter-wrapper'>
                            Długość nowego hasła:<div id='c-account-passMeter-feedback'>brak</div>
                        </div>
                        <div class='c-account-passMeter-meter'>
                            <div class='c-account-passMeter-meter__element' id='element-1'></div>
                            <div class='c-account-passMeter-meter__element' id='element-2'></div>
                            <div class='c-account-passMeter-meter__element' id='element-3'></div>
                            <div class='c-account-passMeter-meter__element' id='element-4'></div>
                            <div class='c-account-passMeter-meter__element' id='element-5'></div>
                            <div class='c-account-passMeter-meter__element' id='element-6'></div>
                            <div class='c-account-passMeter-meter__element' id='element-7'></div>
                            <div class='c-account-passMeter-meter__element' id='element-8'></div>
                            <div class='c-account-passMeter-meter__element' id='element-9'></div>
        
                        </div>
                    </div>
                        
                        <input class='c-input-submit' type='submit' value='Zarejestruj się'>
");
                                }
                                ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once "footer.php"; ?>