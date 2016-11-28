<?php
    include 'db_access.php';
    if(empty($_SESSION['user_id']) && $_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $success = signInUser((string)$_POST['login'], (string)$_POST['password']);
        if($success == true)
        {   
            header("Location: success.php");
            exit;
        }
        else
        {   
            header("Location: fail.php");
            exit;
        }
    }
    include 'view/login_view.php';
?>