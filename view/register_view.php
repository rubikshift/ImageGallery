<!DOCTYPE html>

<html lang="pl-PL" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Michał Krakowiak 165596">
    <title>Moje Hobby</title>
    <link type="text/css" rel="stylesheet" href="stylesheet.css" />
    <link type="text/css" rel="stylesheet" href="js/jquery-ui/jquery-ui.css" />
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/email_info.js"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery_ui_basic.js"></script> 
    <script type="text/javascript" src="js/newDiv.js"></script>
</head>
<body onload="dataStoragingWarning()">
    <header>
        <h1>Rejestracja</h1>
    </header>
    <nav>
        <ul id="menu">
            <li><a href="index.php">Strona domowa</a></li>
            <li><a href="login.php">Logowanie</a></li>
            <li><a href="gallery.php">Galeria</a></li>
            <li><a href="upload_image.php">Prześlij zdjęcie</a></li>
        </ul>
    </nav>
    <section>
        <h2 class="SectionText">Rejestracja</h1>
        <form method="post">
            <fieldset class="SectionText">
                <label for="email"><b>Email: </b></label><input type="email" name="email" placeholder="email" required/><br/><br/>
                <label for="login"><b>Login: </b></label><input type="text" name="login" placeholder="login" required/><br/><br/>
                <label for="password"><b>Hasło: </b><label><input type="password" name="password" placeholder="hasło" required/><br/><br/>
                <label for="repeat_password"><b>Powtórz hasło: </b><label><input type="password" name="repeat_password" placeholder="powtórz hasło" required/><br/><br/>
                <input class="button" type="submit" value="Gotowe"/>
            </fieldset>
        </form>
        <?php if($_SERVER['REQUEST_METHOD'] === 'POST'):?>
            <?php if($_POST['password'] !== $_POST['repeat_password']):?>
                <p class="SectionText"><span class="red">Hasła nie są takie same!</span></p>
            <?php endif?>
            <?php if($success != true):?>
                <p class="SectionText"><span class="red">Taka nazwa użytkownika już istnieje!</span></p>
            <?php endif?>
        <?php endif?>
    </section>
    <footer onmouseenter="dzialaj()" onmouseleave="dzialaj()">
        <p><a href="mailto:s165596@stundent.pg.gda.pl?subject=ProjektHiH-WAI">Michał Krakowiak<span> – Kliknij aby wysłać e-mail</span></a></p>
    </footer>
</body>
</html>