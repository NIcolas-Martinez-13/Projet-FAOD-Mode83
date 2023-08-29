<?php
if (isset($_GET['id']) && isset($_GET['confirmation_token'])) {
    require 'db.php';
    require 'functions.php';
    $req = $pdo -> prepare('SELECT * FROM utilisateurconnecte WHERE idUser =? AND reset_token IS NOT NULL AND reset_token =? AND reset_at > DATE_SUB(NOW(), INTERVAL 30 MINUTE)');
    $req -> execute([$_GET['idUser'],$_GET['confirmation_token ']]);
    $user = $req -> fetch();
    if ($user) {
        if (!empty($_POST)) {
            if(!empty($_POST['password']) && $_POST['password'] != $_POST['confirm_password']) {
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $pdo -> prepare('UPDATE utilisateurconnecte SET password =?') -> execute([$password]);
                session_start();
                $_SESSION['flash']['success'] ="Votre mot de passe a bien été modifié";
                $_SESSION['auth']= $user;
                header('Location: account.php'); 
                exit();
            }
        }
    } else {
        $_SESSION['flash']['error'] ="Ce token n'est pas valide";
        header('Location: login.php');
        exit();
    }
}
?> 
<?php require '../php/head.php'; ?>


<h1>Réinitialiser mon mot de passe </h1>


<div class="flex justify-center items-center h-screen">
  <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md  ">
    <div class="px-6 py-4">
        <div class="flex justify-center mx-auto">
            <img class="w-auto h-20 sm:h-2O" src="../images/logo-mode83.webp" alt="">
        </div>

        <p class="mt-1 text-center text-gray-500 ">Confirmation nouveau password</p>




        <form action="" method="POST">
           
        <div class="w-full mt-4">
                <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg  focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="password" name="password" placeholder="Nouveau mot de passe "  />
            </div>
        <div class="w-full mt-4">
                <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg  focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="password" name="confirm_password" placeholder="Confirmation Nouveau mot de passe"  />
            </div>

                <button class="px-6 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    réinitialiser mon mot de passe
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
