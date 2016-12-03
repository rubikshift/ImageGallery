<?php
    require 'db_access.php';
    $db = getDB();
    $path = 'images/';
    if($_SERVER['REQUEST_METHOD'] === 'POST')
        foreach($_POST['selectedImages'] as $id)
            unset($_SESSION['selectedImages'][$id]);
    include 'view/personal_gallery_view.php';
?>