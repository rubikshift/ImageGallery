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
        <h1>Dodawanie zdjęcia</h1>
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
        <h2 class="SectionText">Dodaj zdjęcie</h1>
        <form method="post" enctype="multipart/form-data">
            <fieldset class="SectionText">
                <label for="title"><b>Tytuł: </b></label><input type="text" name="title" placeholder="tytuł"/><br/><br/>
               <?php if(empty($_SESSION['user_id']))
                {
                    echo "<label for='author'><b>Autor: </b></label><input type='text' name='author' placeholder='autor'/><br/><br/>";
                }
                else 
                {
                    $db = getDB();
                    $query = ['_id' => $_SESSION['user_id']];
                    $result = $db->users->findOne($query);
                    $username = $result['username'];
                    echo "<label for='author'><b>Autor: </b></label><input type='text' name='author' placeholder='autor' value='$username'/><br/><br/>";
                } ?>
                <label for="waterMark"><b>ZnakWodny: </b><label><input type="text" name="waterMark" placeholder="znak wodny"/><br/><br/>
                <label for="image"><b>Plik: </b><label><input type="file" name="image" accept=".png,.jpg" placeholder="plik"/><br/><br/>
                <input class="button" type="submit" value="Gotowe"/>
            </fieldset>
        </form>
    </section>
    <footer onmouseenter="dzialaj()" onmouseleave="dzialaj()">
        <p><a href="mailto:s165596@stundent.pg.gda.pl?subject=ProjektHiH-WAI">Michał Krakowiak<span> – Kliknij aby wysłać e-mail</span></a></p>
    </footer>
</body>
</html>