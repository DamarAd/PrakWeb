<?php

require_once 'core/init.php';

if(!$_SESSION['user']){
    header('Location:index.php');
}

unset($_SESSION['user']);
session_destroy();

header("Location:index.php");
?>