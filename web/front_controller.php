<?php
require '../routing.php';
session_start();
require '../' . $routing[$_GET['action']] . '.php';
?>