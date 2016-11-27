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
        <h1>Logowanie</h1>
    </header>
    <nav>
        <ul id="menu">
            <li><a href="index.php">Strona domowa</a></li>
            <li><a href="login.php">Logowanie</a></li>
            <li><a href="gallery.php">Galeria</a></li>
        </ul>
    </nav>
    <section>
        
        <h2 class="SectionText">Logowanie</h1>
        <?php if(empty($user)):?>
        <form method="post">
            <fieldset class="SectionText">
                <label for="login"><b>Login: </b></label><input type="text" name="login" placeholder="login"/><br/><br/>
                <label for="password"><b>Hasło: </b><label><input type="password" name="password" placeholder="hasło"/><br/><br/>
                <input class="button" type="submit" value="Zaloguj"/>
            </fieldset>
        </form>
        <p class="SectionText">Nie masz konta? <a href="register.php">Zarejestruj się</a></p>
        <?php else:?>
        <p class="SectionText">Jesteś już zalogowany!</p>
        <?php endif?>

    </section>
    <footer onmouseenter="dzialaj()" onmouseleave="dzialaj()">
        <p><a href="mailto:s165596@stundent.pg.gda.pl?subject=ProjektHiH-WAI">Michał Krakowiak<span> – Kliknij aby wysłać e-mail</span></a></p>
    </footer>
</body>
</html>