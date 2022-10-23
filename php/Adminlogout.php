<?php
    session_start();
    unset($_SESSION['user_name']);
    header('location:Adminlogin.php');
?>