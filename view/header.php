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
    <script type="text/javascript" src="js/ajax.js"></script>
</head>
<body onload="dataStoragingWarning()">
    <nav>
        <ul id="menu">
            <li><a href="index">Strona domowa</a></li>
            <li><a href="login">Logowanie</a></li>
            <li><a href="gallery">Galeria</a></li>
            <li><a href="personal_gallery">Twoja galeria</a></li>
            <li><a href="upload_image">Prześlij zdjęcie</a></li>
            <li><a href="search">Wyszukiwarka</a></li>
            <?php if(isset($_SESSION['user_id'])):?>
                <li><a href="logout">Wyloguj</a></li>
            <?php endif?>
        </ul>
    </nav>