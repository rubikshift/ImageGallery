<?php require 'header.php';?>
    <header>
        <h1>Galeria</h1>
    </header>
    <section>
        <div id="dialog" title="Napisz e-mail">
            <p>Użytkowniku, teraz możesz napisać do mnie e-mail ze swoimi uwagami. Dziękuję.</p>
        </div>
        <h2 class="SectionText">Galeria</h2>
        <form action="gallery" method="post">
            <fieldset class="SectionText">
                <?php foreach($images as $image):
                    $imageThumbnailPath = $path . $image['thumbnail'];
                    $imageWatermarkedPath = $path . $image['watermarked'];
                    $title = $image['title'];
                    $author = $image['author'];
                    $id = $image['_id'];
                    $visibility = $image['visibility'];
                        
                    if($visibility == 'public' || $visibility == $_SESSION['user_id']):?>
                        <figure class="Gallery-Img">
                        <?php 
                            echo "<a href='$imageWatermarkedPath' target='_blank'><img src='$imageThumbnailPath' title='$title' alt='$title'/></a>";
                            if(empty($_SESSION['selectedImages']["$id"]))
                            {   
                                echo "<figcaption><input type='checkbox' name='selectedImages[$id]' value='$id'/> $title, $author";
                                if($visibility != 'public')
                                    echo "<br/><span class='red'>prywatne</span>";
                                echo "</figcaption>";
                            } 
                            else
                            {   
                                echo "<figcaption><input type='checkbox' name='selectedImages[$id]' value='$id' checked/> $title, $author";
                                if($visibility != 'public')
                                    echo "<br/><span class='red'>prywatne</span>";
                                echo "</figcaption>";
                            } 
                        ?>
                        </figure>
                    <?php endif?>
                <?php endforeach?>
                <br/><br/>
                <input class="button" type="submit" value="Zapisz"/>
            </fieldset>
        </form>
    </section>
<?php require 'footer.php';?>