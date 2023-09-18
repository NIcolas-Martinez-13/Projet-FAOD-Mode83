<?php 
// session_start();
// setcookie('remember', NULL, -1);
// unset($_SESSION['auth']);
// $_SESSION['flash']['sucess'] ='Vous etes maintenant déconnecté';
// header('Location: login.php');

session_start();
if (isset($_POST['logout'])) {
    // Supprimez les cookies, la session, et effectuez d'autres opérations de déconnexion
    setcookie('remember', NULL, -1);
    unset($_SESSION['auth']);
    $_SESSION['flash']['success'] = 'Vous êtes maintenant déconnecté';
    header('Location: login.php');
    exit();
} else {
    // Redirigez l'utilisateur vers une autre page s'il tente d'accéder à ce script directement
    header('Location: login.php'); // Remplacez 'index.php' par la page souhaitée
    exit();
}