<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>
<?php
ob_start();
if (isset($_POST['mail'])) {
    $conn->query("UPDATE dane_logowania SET `mail`='" . $_POST['mail'] . "' WHERE mail = '" . $_SESSION['user'] . "'");
    $_SESSION['user'] = $_POST['mail'];
    print('<div class="alert alert-success alert-dismissible" style="color:white; background-color: #28a745; display:flex; align-items:center;">

                <strong>
                    <svg style="margin-right:15px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                    </svg>
                </strong>Zmiany zapisano pomyślnie.<a href="#" class="close" data-dismiss="alert" aria-label="close" style=" margin-right: 0;
                margin-left: auto;">&times;</a>
                </div>');
    unset($_POST['mail']);
    unset($_POST['zapiszmail']);
}
if (isset($_POST['imie'])) {
    $conn->query("UPDATE dane_konta SET `imie`='" . $_POST['imie'] . "',`nazwisko`='" . $_POST['nazwisko'] . "',`adres`='" . $_POST['adres'] . "',`miasto`='" . $_POST['miasto'] . "',`kod_pocztowy`='" . $_POST['kod'] . "' WHERE mail = '" . $_SESSION['user'] . "'");
    print('<div class="alert alert-success alert-dismissible" style="color:white; background-color: #28a745; display:flex; align-items:center;">

                <strong>
                    <svg style="margin-right:15px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                    </svg>
                </strong>Zmiany zapisano pomyślnie.<a href="#" class="close" data-dismiss="alert" aria-label="close" style=" margin-right: 0;
                margin-left: auto;">&times;</a>
                </div>');
    unset($_POST['imie']);
    unset($_POST['nazwisko']);
    unset($_POST['adres']);
    unset($_POST['miasto']);
    unset($_POST['kod']);
    unset($_POST['zapisz']);
}
if (isset($_POST['usuwanie'])) {
    $conn->query("DELETE FROM dane_logowania WHERE mail = '" . $_SESSION['user'] . "'");
    unset($_POST['usuwanie']);
    unset($_SESSION['user']);
}
if (isset($_POST['password'])) {
    $login = $conn->query("SELECT haslo FROM dane_logowania WHERE mail ='" . $_SESSION['user'] . "' LIMIT 1");
    $user = $login->fetch(PDO::FETCH_ASSOC);
    if (password_verify($_POST['password'], $user['haslo'])) {
        $hash = password_hash($_POST['passwordN1'], PASSWORD_BCRYPT);
        $conn->query("UPDATE dane_logowania SET `haslo`='" . $hash . "' WHERE mail = '" . $_SESSION['user'] . "'");
        print('<div class="alert alert-success alert-dismissible" style="color:white; background-color: #28a745; display:flex; align-items:center;">

        <strong>
            <svg style="margin-right:15px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
            </svg>
        </strong>Zmiany zapisano pomyślnie.<a href="#" class="close" data-dismiss="alert" aria-label="close" style=" margin-right: 0;
        margin-left: auto;">&times;</a>
        </div>');
    } else {
        print('<div class="alert alert-danger alert-dismissible" style="color:white; background-color:#a94442; display:flex; align-items:center;">

        <strong>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16" style="margin-right:9px">
        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
      </svg>
        </strong>Nie udało się zmienić hasła. Niepoprawne obecne hasło.<a href="#" class="close" data-dismiss="alert" aria-label="close" style=" margin-right: 0;
        margin-left: auto;">&times;</a>
        </div>');
    }
}
?>
<?php
if (!isset($_SESSION['user'])) print("<script>open('index.php','_self');</script>");
else
    $query = $conn->query("SELECT * FROM dane_konta INNER JOIN dane_logowania ON dane_konta.mail = dane_logowania.mail WHERE dane_konta.mail ='" . $_SESSION['user'] . "' LIMIT 1");
$result = $query->fetch(PDO::FETCH_ASSOC);
?>

<div class="o-wrapper">
    <div class="row">
        <div class="c-account-container">
            <div class="c-account-banner col-xs-12 col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="o-title">Witaj <?php echo $result['imie']; ?> </div>
                <div class="c-account-banner__subtitle">Ustawienia konta</div>
            </div>
            <div class="c-account-forms-body">
                <div class="c-account-body col-xs-12 col-sm-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="c-account-forms">
                        <div id="form" class="c-account-forms__form">
                            <form action="konto.php" method="POST">
                                <div class="form-group">
                                    <label for="inputAddress">Imie</label>
                                    <input type="text" value="<?php echo $result['imie']; ?>" maxlength="32" class="form-control c-account-forms__form-input" name="imie" id="inputname" placeholder="Imie" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Nazwisko</label>
                                    <input type="text" value="<?php echo $result['nazwisko']; ?>" maxlength="32" class="form-control c-account-forms__form-input" name="nazwisko" id="inputsurname" placeholder="Nazwisko" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Adres</label>
                                    <input type="text" value="<?php echo $result['adres']; ?>" maxlength="64" class="form-control c-account-forms__form-input" name="adres" id="inputAddress" placeholder="Adres">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="inputCity">Miasto</label>
                                        <input type="text" value="<?php echo $result['miasto']; ?>" maxlength="45" class="form-control c-account-forms__form-input" name="miasto" id="inputCity" placeholder="Miasto">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="kod-poczty">Kod pocztowy</label>
                                        <input type="text" value="<?php echo $result['kod_pocztowy']; ?>" maxlength="6" class="form-control c-account-forms__form-input" pattern="^[0-9]{2}-[0-9]{3}$" name="kod" id="kod-poczty" placeholder="np. 00-000">
                                    </div>
                                </div>
                                <div class="c-account-forms__form-button-container">
                                    <button class="c-account-forms__form-button" value="anuluj"><a href="index.php" style="color: white">Anuluj</a></button>
                                    <button type="submit" name="zapisz" class="c-account-forms__form-button">Zapisz zmiany</button>

                                </div>
                            </form>
                            
                            <div class="c-account-forms-password-changer c-account-forms-password-changer-pass">
                                <button class="o-none" data-toggle="modal" data-target="#passwordModal">Zmień hasło</button>
                            </div>
                            <div class="c-account-forms-password-changer c-account-forms-password-changer-mail">
                                <button class="o-none" data-toggle="modal" data-target="#mail">Zmień mail</button>

                            </div>
                            <?php
                                if($result['konto_typ'] !=3){
                                    print('<div class="c-account-forms-password-changer c-account-forms-password-changer-delete">
                                    <button class="o-none" data-toggle="modal" data-target="#delete">Usuń konto</button>
    
                                </div>');
                                }
                            ?>
                            
                        </div>


                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade top30" id="delete" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Czy chcesz usunać konto? </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body c-basket__modal-body">
                Czy zamierzasz usunąć konto? Pamiętaj, że tej akcji nie można cofnąć.
            </div>
            <div class="modal-footer c-basket-modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
                <form action="konto.php" method="POST">
                    <button type="submit" name="usuwanie" class="c-basket-modal__button-clean">Usuń</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade top30" id="passwordModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title o-title">Zmiana Hasła</h5>

            </div>
            <form action="konto.php" method="POST">
                <div class="modal-body-account">
                    <div class="form-group">
                        <label for="inputEmail4">Obecne hasło</label>
                        <div class="c-account-modal-wrapper">

                            <input type="password" class="form-control c-account-forms__form-input" name="password" id="passwordA" placeholder="Hasło" /><i class="bi bi-eye-slash" id="togglePassword"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Nowe hasło</label>
                        <div class="c-account-modal-wrapper">
                            <input onkeyup="check()" type="password" value="" class="form-control c-account-forms__form-input" name="passwordN1" id="password_new" placeholder="Nowe hasło" /><i class="bi bi-eye-slash" id="togglePassword_new"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Powtórz nowe hasło</label>
                        <div class="c-account-modal-wrapper">
                            <input onkeyup="check()" type="password" value="" class="form-control c-account-forms__form-input" name="passwordN2" id="password_newSND" placeholder="Powtórz nowe hasło" /><i class="bi bi-eye-slash" id="togglePassword_newSND"></i>
                        </div>
                    </div>
                    <div id="alert" class="c-account-passMeter-wrapper">
                        Nowe hasło musi być takie samo w obu polach.
                    </div>
                </div>
                <div class="c-account-passMeter-container">
                    <div class="c-account-passMeter-wrapper">
                        Długość nowego hasła:<div id="c-account-passMeter-feedback">brak</div>
                    </div>
                    <div class="c-account-passMeter-meter">
                        <div class="c-account-passMeter-meter__element" id="element-1"></div>
                        <div class="c-account-passMeter-meter__element" id="element-2"></div>
                        <div class="c-account-passMeter-meter__element " id="element-3"></div>
                        <div class="c-account-passMeter-meter__element" id="element-4"></div>
                        <div class="c-account-passMeter-meter__element" id="element-5"></div>
                        <div class="c-account-passMeter-meter__element" id="element-6"></div>
                        <div class="c-account-passMeter-meter__element" id="element-7"></div>
                        <div class="c-account-passMeter-meter__element" id="element-8"></div>
                        <div class="c-account-passMeter-meter__element" id="element-9"></div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn c-modal-button" style="background-color:var(--orange); color:white;" data-dismiss="modal">Anuluj</button>
                    <button id="guzik" type="submit" class="btn c-modal-button" style="background-color:var(--orange); color:white;" disabled>Zapisz zmainy</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade top30" id="mail" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title o-title">Zmiana maila</h5>

            </div>
            <form action="konto.php" method="POST">
                <div class="modal-body-account">

                    <div class="modal-body-account">

                        <div class="form-group">
                            <label for="inputEmail4">Obecny mail</label>
                            <div class="c-account-modal-wrapper">
                                <input type="email" value="" class="form-control c-account-forms__form-input" name="obecny" id="mail" placeholder="<?php echo $result['mail']; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4">Nowy mail</label>
                            <div class="c-account-modal-wrapper">
                                <input type="email" value="" class="form-control c-account-forms__form-input" name="mail" id="mail" placeholder="Nowy mail">
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn c-modal-button" style="background-color:var(--orange); color:white;" data-dismiss="modal">Anuluj</button>
                    <button type="submit" name="zapiszmail" class="btn c-modal-button" style="background-color:var(--orange); color:white;">Zapisz zmiany</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php get_element("templates/footer.php"); ?>


<?php include_once "footer.php"; ?>