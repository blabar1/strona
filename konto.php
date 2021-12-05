<?php include_once "header.php"; ?>
<?php include_once "templates/menu.php"; ?>
<?php 
if (!isset($_SESSION['user'])) print("<script>open('login.php','_self');</script>");
else

?>

<div class="o-wrapper">
    <div class="row">
        <div class="c-account-container">
            <div class="c-account-banner col-xs-12 col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="o-title">Witaj user name </div>
                <div class="c-account-banner__subtitle">Ustawienia konta</div>
            </div>
            <div class="c-account-forms-body">
                <div class="c-account-body col-xs-12 col-sm-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="c-account-forms">
                        <div class="c-account-forms__form">
                            <form>
                                <div class="form-group">
                                    <label for="inputAddress">Imie</label>
                                    <input type="text" class="form-control c-account-forms__form-input" id="inputname" placeholder="Imie">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Nazwisko</label>
                                    <input type="text" class="form-control c-account-forms__form-input" id="inputsurname" placeholder="Nazwisko">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control c-account-forms__form-input" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div>
                                        <label for="inputPassword4">Hasło</label>
                                        <p class="form-group-password-block form-group ">
                                            <input type="password" class="form-control c-account-forms__form-input" id="password" placeholder="Hasło" /><i class="bi bi-eye-slash" id="togglePassword"></i>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Adres</label>
                                    <input type="text" class="form-control c-account-forms__form-input" id="inputAddress" placeholder="Adres">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="inputCity">Miasto</label>
                                        <input type="text" class="form-control c-account-forms__form-input" id="inputCity">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="kod-poczty">Kod pocztowy</label>
                                        <input type="text" class="form-control c-account-forms__form-input" id="kod-poczty">
                                    </div>
                                </div>
                                <div class="c-account-forms__form-button-container">
                                    <button class="c-account-forms__form-button" value="anuluj">Anuluj</button>
                                    <button type="submit" class="c-account-forms__form-button">Zapisz zmiany</button>

                                </div>
                            </form>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>
</div>






<?php get_element("templates/footer.php"); ?>

<?php include_once "footer.php"; ?>