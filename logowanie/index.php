<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <title>Towar z drugiej ręki</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/arkusz_mal.css">
</head>

<body>
    <div class="c-forms">
        <button class="c-buttons">Logowanie</button>
        <button class="c-buttons">Nowe konto</button>
        <!-- login form-->
        <div class="c-form c-login">
            <h1>Logowanie</h1>
            <form>
                <fieldset class="c-fieldset">
                    <legend>&nbsp;E-mail&nbsp;</legend>
                    <input class="c-input" type="email" id="login" name="login" placeholder="emailik">
                </fieldset>
                <br>
                <fieldset class="c-fieldset">
                    <legend>&nbsp;Hasło&nbsp;</legend>
                    <input class="c-input" type="password" id="password" name="password" placeholder="hasełko">
                </fieldset>
                <br>
                <input class="c-input-submit" type="submit" id="zaloguj" name="zaloguj" value="Zaloguj">
            </form>
        </div>

        <!-- register form-->
        <div class="c-form c-register">
            <h1>Nie masz konta?</h1>
            <form>
                <fieldset class="c-fieldset">
                    <legend>&nbsp;E-mail&nbsp;</legend>
                    <input class="c-input" type="email" id="login" name="login" placeholder="emailik">
                </fieldset>
                <br>
                <fieldset class="c-fieldset">
                    <legend>&nbsp;Hasło&nbsp;</legend>
                    <input class="c-input" type="password" id="password" name="password" placeholder="hasełko">
                </fieldset>
                <br>
                <input class="c-input-submit" type="submit" id="zaloguj" name="zaloguj" value="Zaloguj">
            </form>
        </div>
        <div>
            <span>Witamy ponownie!</span>
        </div>

    </div>
</body>

</html>