<?php
    // logout the user and redirect him back to the login page
    session_start();
    unset($_SESSION['username']);
    header("Location:login.php");
?>