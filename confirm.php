<?php 
require_once './php/requireDoc.php';

$user_id = $_GET['id'];
$token = $_GET['token'];
$req = $pdo -> prepare('SELECT * FROM UtilisateurConnecte WHERE idUser = ?');
$req->execute([$user_id]);
$user = $req ->fetch();


session_start();
if($user && $user->confirmation_token == $token){
$pdo -> prepare('UPDATE UtilisateurConnecte SET confirmation_token = NULL, confirmed_at = NOW() WHERE idUser = ?')-> execute([$user_id]);

$_SESSION['auth'] = $user;
header('Location: inc/account.php');
    die('ok');

}else{
    $_SESSION['flash']['danger']= "Ce token n'est plus valide";
// header('Location: inc/login.php');
}
