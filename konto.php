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
        <div class="c-account-container">
            <div class="c-account-banner col-xs-12 col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="o-title">Witaj <?php echo $result['imie']; ?> </div>
                <div class="c-account-banner__subtitle">Ustawienia konta</div>
            </div>
            <div class="c-account-forms-body">
                <div class="c-account-body col-xs-12 col-sm-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="c-account-forms">
                        <div class="c-account-forms__form">
                            <form>
                                <div class="form-group">
                                    <label for="inputAddress">Imie</label>
                                    <input type="text" value="<?php echo $result['imie']; ?>" class="form-control c-account-forms__form-input" id="inputname" placeholder="Imie">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Nazwisko</label>
                                    <input type="text" value="<?php echo $result['nazwisko']; ?>" class="form-control c-account-forms__form-input" id="inputsurname" placeholder="Nazwisko">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" value="<?php echo $result['mail']; ?>" class="form-control c-account-forms__form-input" id="inputEmail4" placeholder="Email">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Adres</label>
                                    <input type="text" value="<?php echo $result['adres']; ?>" class="form-control c-account-forms__form-input" id="inputAddress" placeholder="Adres">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="inputCity">Miasto</label>
                                        <input type="text" value="<?php echo $result['miasto']; ?>" class="form-control c-account-forms__form-input" id="inputCity" placeholder="Miasto">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="kod-poczty">Kod pocztowy</label>
                                        <input type="text" value="<?php echo $result['kod_pocztowy']; ?>" class="form-control c-account-forms__form-input" id="kod-poczty" placeholder="Kod pocztowy">
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