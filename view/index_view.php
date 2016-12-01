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
        <h1>Moje Hobby</h1>
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
        <div id="dialog" title="Napisz e-mail">
            <p>Użytkowniku, teraz możesz napisać do mnie e-mail ze swoimi uwagami. Dziękuję.</p>
        </div>
        <h2 class="SectionText">Gry karciane</h2>
        <figure class="DropDown-Img">
            <img src="img/karty.bmp" title="karty" alt="karty" />
            <figure class="DropDown-Zoom">
                <img src="img/karty.bmp" title="karty" alt="karty" />
                <figcaption>Autor: Asimzb, CC-BY-3.0</figcaption>
            </figure>
        </figure>
        <p class="SectionText"><i>Gra karciana</i> – gra, w której używa się kart do gry.</p>
        <p class="SectionText">Podstawowy podział przebiega między grami tradycyjnymi i kolekcjonerskimi grami karcianymi. Wśród gier tradycyjnych stosuje się najczęściej talie bazujące na talii brydżowej lub tarotowej.</p>
        <p class="SectionText">Liczba graczy może wahać się od 1 (pasjanse), w nielicznych przypadkach sięgając nawet 20 (poker).</p>
        <p class="SectionText">W pewnych grach jak poker, makao może brać udział różna liczba graczy bez szczególnych zmian reguł gry. Pewne gry posiadają specjalne warianty dla różnych liczb graczy (np. kierki które są przeznaczone dla czterech graczy, mają wariant dla trzech). Istnieją również gry, w których przy liczbie graczy większej niż przewidziana gracze kolejno opuszczają rozdania (skat, różne odmiany tarota). Inne gry praktycznie nie przewidują możliwości uczestnictwa w nich innej niż przewidziana liczby graczy (brydż).</p>
        <p class="SectionText">Gracze w grach karcianych grają samodzielnie lub dobierają się w drużyny, które są stałe (brydż) lub zmieniają się (skat).</p>
        <p class="SectionText">Do najbardziej popularnych tradycyjnych gier karcianych należą: brydż, poker, kierki, makao, tysiąc, do mniej popularnych – np. wist, blackjack i preferans.</p>
        <p class="SectionText">Wśród najpopularniejszych kolekcjonerskich gier karcianych znajdują się Magic: The Gathering, Yu-Gi-Oh! oraz POKEMON. W Polsce popularne są także gry Veto i Dungeoneer. Inne gry karciane, nie używające tradycyjnych kart, ale nie będące też grami kolekcjonerskimi to np. Cytadela, Zaginione Miasta, Munchkin, Wiochmen 2 czy Zombiaki.</p>
        <h2 class="SectionText">Przykładowe gry karciane</h2>
        <table id="BaseInfo" class="SectionText">
            <thead>
                <tr> <th></th> <th><a href="brydz.html">Brydż</a></th> <th><a href="makao.html">Makao</a></th> <th><a href="poker.html">Poker</a></th></tr>
            </thead>
            <tbody>
                <tr> <td>Liczba graczy</td> <td>4</td> <td>>=2</td> <td>>=2</td></tr>
                <tr> <td>Liczba kart</td> <td>52</td> <td>>=52</td> <td>52</td></tr>
                <tr> <td>Złożoność</td> <td>Duża</td> <td>Mała</td> <td>Mała</td></tr>
            </tbody>
        </table>
        <h2 class="SectionText">Przydatne linki</h2>
        <ul class="SectionText">
            <li>Żródło: <a href="https://pl.wikipedia.org/wiki/Poker">Wikipedia</a></li>
        </ul>
    </section>
    <footer onmouseenter="dzialaj()" onmouseleave="dzialaj()">
        <p><a href="mailto:s165596@stundent.pg.gda.pl?subject=ProjektHiH-WAI">Michał Krakowiak<span> – Kliknij aby wysłać e-mail</span></a></p>
    </footer>
</body>
</html>