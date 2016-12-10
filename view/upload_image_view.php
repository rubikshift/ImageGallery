<?php require 'header.php';?>
    <header>
        <h1>Prześlij zdjęcie</h1>
    </header>
    <section>
        <div id="dialog" title="Napisz e-mail">
            <p>Użytkowniku, teraz możesz napisać do mnie e-mail ze swoimi uwagami. Dziękuję.</p>
        </div>
        <h2 class="SectionText">Dodaj zdjęcie</h1>
        <form action="upload_image" method="post" enctype="multipart/form-data">
            <fieldset class="SectionText">
                <label for="title"><b>Tytuł: </b></label><input type="text" name="title" placeholder="tytuł" required/><br/><br/>
               <?php if(empty($_SESSION['user_id']))
                {
                    echo "<label for='author'><b>Autor: </b></label><input type='text' name='author' placeholder='autor' required/><br/><br/>";
                }
                else 
                {
                    $db = getDB();
                    $query = ['_id' => $_SESSION['user_id']];
                    $result = $db->users->findOne($query);
                    $username = $result['username'];
                    echo "<label for='author'><b>Autor: </b></label><input type='text' name='author' placeholder='autor' value='$username' required/><br/><br/>";
                } ?>
                <label for="watermark"><b>Znak Wodny: </b><label><input type="text" name="watermark" placeholder="znak wodny" required/><br/><br/>
                <label for="image"><b>Plik: </b><label><input type="file" name="image" accept=".png,.jpg" placeholder="plik" required/><br/><br/>
                <?php if(isset($_SESSION['user_id'])):?>
                    <label>
                        <input type="radio" name="visibility" value="public" checked/> Publiczne
                    </label>
                    <label>
                        <input type="radio" name="visibility" value="private"/> Prywatne
                    </label>
                    <br/><br/>
                <?php endif?>
                <input class="button" type="submit" value="Gotowe"/>
            </fieldset>
        </form>
        <?php if($_SERVER['REQUEST_METHOD'] === 'POST'):?>
            <?php if($errors['size']):?>
                <p class="SectionText"><span class="red">Niepoprawny rozmiar pliku!</span></p>
            <?php endif ?>
            <?php if($errors['type']):?>
                <p class="SectionText"><span class="red">Niepoprawny format pliku!</span></p>
            <?php endif ?>
        <?php endif?>
    </section>
<?php require 'footer.php';?>