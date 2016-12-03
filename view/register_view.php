<?php require 'header.php';?>
    <header>
        <h1>Rejestracja</h1>
    </header>
    <section>
        <div id="dialog" title="Napisz e-mail">
            <p>Użytkowniku, teraz możesz napisać do mnie e-mail ze swoimi uwagami. Dziękuję.</p>
        </div>
        <h2 class="SectionText">Rejestracja</h1>
        <form action="register" method="post">
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
<?php require 'footer.php';?>