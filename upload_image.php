<?php
    require 'db_access.php';
    require 'images.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $errors = checkImage();
        if($errors['size'] == false && $errors['type'] == false)
        {
            moveFile();
            $original = $_FILES['image']['name'];
            $watermarked = addWatermark($_POST['watermark']);
            $miniImage = generateMiniImage($watermarked);
            $success = addImage($_POST['title'], $_POST['author'], $original, $watermarked, $miniImage);
            if($success)
            {   
                header("Location: success_upload.php");
                exit;
            }
        }
    }
    include 'view/upload_image_view.php';
?>