<?php require 'header.php';?>
    <header>
        <h1>Twoja galeria</h1>
    </header>
    <section>
        <div id="dialog" title="Napisz e-mail">
            <p>Użytkowniku, teraz możesz napisać do mnie e-mail ze swoimi uwagami. Dziękuję.</p>
        </div>
        <h2 class="SectionText">Twoja galeria</h2>
        <form action="personal_gallery" method="post">
            <fieldset class="SectionText">
                <?php if(isset($_SESSION['selectedImages'])):?>
                <?php foreach($_SESSION['selectedImages'] as $imageId):                    
                    $query = ['_id' => new MongoId($imageId)];
                    $image = $db->gallery->findOne($query);
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
                            echo "<figcaption><input type='checkbox' name='selectedImages[$id]' value='$id'/> $title, $author";
                            if($visibility != 'public')
                                echo "<br/><span class='red'>prywatne</span>";
                            echo "</figcaption>";
                        ?>
                        </figure>
                    <?php endif?>
                <?php endforeach?>
                <?php endif?>
                <br/><br/>
                <input class="button" type="submit" value="Usuń zaznaczone z zapamiętanych"/>
            </fieldset>
        </form>
    </section>
<?php require 'footer.php';?>