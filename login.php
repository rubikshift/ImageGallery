<?php
    require 'db_access.php';
    if(empty($_SESSION['user_id']) && $_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $success = signInUser((string)$_POST['login'], (string)$_POST['password']);
        if($success)
        {   
            header("Location: success_login");
            exit;
        }
    }
    include 'view/login_view.php';
?>