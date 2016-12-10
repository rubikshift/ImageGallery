<?php
    require 'db_access.php';
    require 'images.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $errors = checkImage();
        print_r($errors);
        if($errors['size'] == false && $errors['type'] == false)
        {
            moveFile();
            $original = $_FILES['image']['name'];
            $watermarked = addWatermark($_POST['watermark']);
            $thumbnail = generateThumbnail($watermarked);
            if($_POST['visibility'] == 'private')
                $visibility = $_SESSION['user_id'];
            else
                $visibility = 'public';
            $success = addImage($_POST['title'], $_POST['author'], $original, $watermarked, $thumbnail, $visibility);
            if($success)
            {   
                header("Location: success_upload");
                exit;
            }
        }
    }
    include 'view/upload_image_view.php';
?>