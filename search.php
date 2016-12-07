<?php
    require 'db_access.php';
    if($_SERVER['REQUEST_METHOD'] === 'GET')
    {
        $title = $_GET['title'];
        $db = getDB();
        $path = 'images/';
        if($title !== "")
        {
            $query = ['title' => new MongoRegex("/$title/i")];
            $results = $db->gallery->find($query);
            foreach($results as $result)
            {   
                $imageThumbnailPath = $path . $result['thumbnail'];
                $imageWatermarkedPath = $path . $result['watermarked'];
                $title = $result['title'];
                $author = $result['author'];
                $visibility = $result['visibility'];
                if($visibility == 'public' || $visibility == $_SESSION['user_id'])
                {
                    echo "<figure class='Gallery-Img'><a href='$imageWatermarkedPath' target='_blank'><img src='$imageThumbnailPath' title='$title' alt='$title'/></a>";
                    echo "<figcaption><input type='checkbox' name='selectedImages[$id]' value='$id'/> $title, $author";
                    if($visibility != 'public')
                        echo "<br/><span class='red'>prywatne</span>";
                    echo "</figcaption></figure>";
                }
            }
        }
    }
?>