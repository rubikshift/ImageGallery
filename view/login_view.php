<?php require 'header.php';?>
    <header>
        <h1>Logowanie</h1>
    </header>
    <section>
        <div id="dialog" title="Napisz e-mail">
            <p>Użytkowniku, teraz możesz napisać do mnie e-mail ze swoimi uwagami. Dziękuję.</p>
        </div>
        <h2 class="SectionText">Logowanie</h1>
        <?php if(empty($_SESSION['user_id'])):?>
            <form action="login" method="post">
                <fieldset class="SectionText">
                    <label for="login"><b>Login: </b></label><input type="text" name="login" placeholder="login" required/><br/><br/>
                    <label for="password"><b>Hasło: </b><label><input type="password" name="password" placeholder="hasło" required/><br/><br/>
                    <input class="button" type="submit" value="Zaloguj"/>
                </fieldset>
            </form>
            <p class="SectionText">Nie masz konta? <a href="register">Zarejestruj się</a></p>
        <?php else:?>
            <p class="SectionText">Jesteś już zalogowany!</p>
        <?php endif?>
        <?php if($_SERVER['REQUEST_METHOD'] === 'POST'):?>
            <?php if($success != true):?>
                <p class="SectionText"><span class="red">Niepoprawny login lub hasło!</span></p>
            <?php endif?>
        <?php endif?>
    </section>
<?php require 'footer.php';?>