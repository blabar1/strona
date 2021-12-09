<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>
<?php
if (!isset($_SESSION['user'])) print("<script>open('login.php','_self');</script>");
else
    $query = $conn->query("SELECT * FROM dane_konta INNER JOIN dane_logowania ON dane_konta.mail = dane_logowania.mail WHERE dane_konta.mail ='" . $_SESSION['user'] . "' LIMIT 1");
$result = $query->fetch(PDO::FETCH_ASSOC);
?>

<div class="o-wrapper">
    <div class="row">
        <?php
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
            print('<script>$("#form").load(location.href + " #form>*", "");</script>');
        }
        ?>
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
                                    <input type="text" value="<?php echo $result['imie']; ?>" class="form-control c-account-forms__form-input" name="imie" id="inputname" placeholder="Imie">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Nazwisko</label>
                                    <input type="text" value="<?php echo $result['nazwisko']; ?>" class="form-control c-account-forms__form-input" name="nazwisko" id="inputsurname" placeholder="Nazwisko">
                                </div>
                                <!-- <div class="form-group">
                                    <div class="form-group">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" value="<?php //echo $result['mail']; 
                                                                    ?>" class="form-control c-account-forms__form-input" name="mail" id="inputEmail4" placeholder="Email">
                                    </div>
                                    
                                </div> -->
                                <div class="form-group">
                                    <label for="inputAddress">Adres</label>
                                    <input type="text" value="<?php echo $result['adres']; ?>" class="form-control c-account-forms__form-input" name="adres" id="inputAddress" placeholder="Adres">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="inputCity">Miasto</label>
                                        <input type="text" value="<?php echo $result['miasto']; ?>" class="form-control c-account-forms__form-input" name="miasto" id="inputCity" placeholder="Miasto">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="kod-poczty">Kod pocztowy</label>
                                        <input type="text" value="<?php echo $result['kod_pocztowy']; ?>" class="form-control c-account-forms__form-input" name="kod" id="kod-poczty" placeholder="Kod pocztowy">
                                    </div>
                                </div>
                                <div class="c-account-forms__form-button-container">
                                    <button class="c-account-forms__form-button" value="anuluj"><a href="index.php" style="color: white">Anuluj</a></button>
                                    <button type="submit" class="c-account-forms__form-button">Zapisz zmiany</button>

                                </div>
                            </form>
                            <div class="c-account-forms-password-changer c-account-forms-password-changer-pass">
                                <button class="o-none" data-toggle="modal" data-target="#passwordModal">Zmień hasło</button>
                            </div>
                            <div class="c-account-forms-password-changer c-account-forms-password-changer-mail">
                                <button class="o-none" data-toggle="modal" data-target="#mail">Zmień mail</button>

                            </div>
                            <div class="c-account-forms-password-changer c-account-forms-password-changer-delete">
                                <button class="o-none" data-toggle="modal" data-target="#delete">Usuń konto</button>

                            </div>
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
                <button type="button" class="c-basket-modal__button-clean">Usuń</button>
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
            <div class="modal-body-account">
                <div class="form-group">
                    <label for="inputEmail4">Obecne hasło</label>
                    <div class="c-account-modal-wrapper">

                        <input type="password" class="form-control c-account-forms__form-input" id="password" placeholder="Hasło" /><i class="bi bi-eye-slash" id="togglePassword"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Nowe hasło</label>
                    <div class="c-account-modal-wrapper">
                        <input type="password" value="" class="form-control c-account-forms__form-input" name="mail" id="password_new" placeholder="Nowe hasło" /><i class="bi bi-eye-slash" id="togglePassword_new"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Powtórz nowe hasło</label>
                    <div class="c-account-modal-wrapper">
                        <input type="password" value="" class="form-control c-account-forms__form-input" name="mail" id="password_newSND" placeholder="Powtórz nowe hasło" /><i class="bi bi-eye-slash" id="togglePassword_newSND"></i>
                    </div>
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
                <button type="button" class="btn c-modal-button" style="background-color:var(--orange); color:white;">Zapisz zmainy</button>
            </div>
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
                <h5 class="modal-title o-title">Dodano do koszyka</h5>

            </div>
            <div class="modal-body-account">
                <div class="modal-body-account">
                    <div class="form-group">
                        <label for="inputEmail4">Obecny mail</label>
                        <div class="c-account-modal-wrapper">
                            <input type="password" value="" class="form-control c-account-forms__form-input" name="mail" id="mail" placeholder="Maciek w placeholderze value" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Nowy mail</label>
                        <div class="c-account-modal-wrapper">
                            <input type="password" value="" class="form-control c-account-forms__form-input" name="mail" id="mail" placeholder="Nowy mail">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn c-modal-button" style="background-color:var(--orange); color:white;" data-dismiss="modal">Anuluj</button>
                <button type="button" class="btn c-modal-button" style="background-color:var(--orange); color:white;">Zapisz zmiany</button>
            </div>
        </div>
    </div>
</div>

<?php get_element("templates/footer.php"); ?>


<?php include_once "footer.php"; ?>