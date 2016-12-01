<?php
    require 'db_access.php';
    require 'images.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
       $success = addNewImage();
        if($success)
        {
            header("Location: success_upload.php");
            exit;
        }
    }
    include 'view/upload_image_view.php';
?>