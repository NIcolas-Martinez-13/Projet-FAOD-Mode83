 
<?php 

require_once '../php/requireDoc.php';

if(!empty($_POST) && !empty($_POST['email'])) {

    
    $req = $pdo-> prepare('SELECT * FROM utilisateurconnecte WHERE email = ? AND confirmed_at IS NOT NULL ');
    $req -> execute([$_POST['email']]);
    $user = $req->fetch();
    if($user) {
        session_start();
        $reset_token = str_random(60);
        $pdo -> prepare('UPDATE utilisateurconnecte SET reset_token = ?, reset_at = NOW() WHERE idUser = ?') -> execute([$reset_token, $user->idUser]);
        $user_id = $user -> idUser;
        sendMailForget($_POST['email'], $user_id, $reset_token);
        $_SESSION['flash']['success'] = 'Un email de confirmation vous a été envoyé pour confirmer vore compte';
        header('Location: login.php');
        exit();
    } else {
        session_start();
        $_SESSION['flash']['danger']= 'Aucun compte ne correspond à cette adresse ';
    }
}
?> 
<?php
require('../php/head.php'); ?> 

<h1>Se connecter </h1>


<div class="flex justify-center items-center h-screen">
  <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md  ">
    <div class="px-6 py-4">
        <div class="flex justify-center mx-auto">
            <img class="w-auto h-20 sm:h-2O" src="../images/logo-mode83.webp" alt="">
        </div>

        <p class="mt-1 text-center text-gray-500 ">Mot de passe oublié</p>

        <form action="" method="POST">
            <div class="w-full mt-4">
                <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg  focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="email" name="email" placeholder="Email" aria-label="Adresse Mail" />
            </div>

                <button class="px-6 mt-3 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    Envoyer mon nouveau mot de passe
                </button>
            </div>
        </form>
    </div>
</div>

</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  </body>
</html>
<?php debug($_SESSION);
