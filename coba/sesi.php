<?php
ob_start();
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
    session_destroy();
    header('Location : login.html');
}
ob_flush(); ?>
