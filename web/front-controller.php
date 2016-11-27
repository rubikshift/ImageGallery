<?php
session_start();
if($_GET['action'] == '/'):
require '../view/index.php';
endif
?>