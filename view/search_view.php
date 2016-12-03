<?php require 'header.php';?>
    <header>
        <h1>Wyszukiwarka</h1>
    </header>
<section>
    <div id="dialog" title="Napisz e-mail">
            <p>Użytkowniku, teraz możesz napisać do mnie e-mail ze swoimi uwagami. Dziękuję.</p>
    </div>
    <h2 class="SectionText">Wyszukiwarka</h2>
    <form>
      <fieldset class="SectionText">
          <label for="searchBar"><b>Tytuł zdjęcia: </b></label><input type="text" id="searchBar" name="searchBar" onkeyup="showHint(this.value)" placeholder="Tytuł zdjęcia"/>
        </fieldset>
        <div class="SectionText" id="result"></div>
    </form>
</section>
<?php require 'footer.php';?>