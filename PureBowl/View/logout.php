<?php 
session_start();
include_once("config.php");
unset($_SESSION['e']);
header("Location:login.php");
?>