<?php
session_start();
if(!isset($_SESSION["username"])){
header('Location: file:///C:/xampp/htdocs/Attirent-master/php/login.php',true,301);
exit(); }
?>
