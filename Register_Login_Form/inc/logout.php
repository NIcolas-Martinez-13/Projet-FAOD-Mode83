<?php 
session_start();
setcookie('remember', NULL, -1);
unset($_SESSION['auth']);
$_SESSION['flash']['sucess'] ='Vous etes maintenant déconnecté';
header('Location: login.php');