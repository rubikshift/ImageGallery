<?php
    require 'db_access.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $success = addNewImage(/* dodaj atrybuty*/);
        if($success)
        {
            header("Location: success_newImage.php");
            exit;
        }
    }
    include 'view/add_new_image.php';
?>