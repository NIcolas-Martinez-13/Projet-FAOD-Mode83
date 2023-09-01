

<?php session_start();
require '../php/head.php';
require 'functions.php';
?>
<?php
logged_only();
 if(!empty($_POST)){
    if(empty($_POST['password'])|| $_POST['password']!= $_POST['confirm_password']){
        $_SESSION['flash']['danger'] ="les mots de passe ne correspondent pas";

    }else {
        $user_id = $_SESSION['auth']->idUser;
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        require_once 'db.php';
        $pdo -> prepare('UPDATE UtilisateurConnecte SET password = ? WHERE idUser = ?')-> execute ([$password, $user_id]);
        $_SESSION['flash']['success'] ="Votre mot de passe a bien été mis à jour";

}
}
?>

<?php 
require ('../php/head.php'); ?> 

<h1>Bonjour <?= $_SESSION['auth']-> Username ?> </h1>

<form action="" method="POST">
    <div>
        <input type="password" name="password" placeholder="changer de mot de passe">
    </div>
    <div>
        <input type="password" name="confirm_password" placeholder="confirmation de changement de mot de passe">
    </div>
    <button> changer de mot de passe</button>
</form>

<?php debug($_SESSION);

