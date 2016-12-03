<?php
    if(isset($_SESSION['user_id']))
        unset($_SESSION['user_id']);
    include 'view/logout_view.php';
?>