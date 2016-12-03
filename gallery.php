<?php
    require 'db_access.php';
    $db = getDB();
    $images = $db->gallery->find();
    $path = 'images/';
    if($_SERVER['REQUEST_METHOD'] === 'POST')
        $_SESSION['selectedImages'] = $_POST['selectedImages'];
    include 'view/gallery_view.php';
?>