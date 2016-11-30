<?php
    require 'db_access.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    { 
        if($_POST['password'] === $_POST['repeat_password'])
        { 
            $success = addUser((string)$_POST['email'], (string)$_POST['login'], (string)$_POST['password']);
            if($success == true)
            {   
                header("Location: success_register.php");
                exit;
            }
        }
    }
    include 'view/register_view.php';
?>